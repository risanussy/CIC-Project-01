<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() {
        if ($this->session->userdata('email')) {
            redirect('user'); 
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        // $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'trim|required|matches[password]');
    
        // if ($this->form_validation->run() == FALSE) {
        //     $this->load->view('auth/index');
        // } else {
        //     $this->load->view('auth/login');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
    
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
    
        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    // login success
                    $data = [
                        'user' => $user['user'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if($user['role_id'] == 1) {
                        redirect('admin');
                    }
                    redirect('user');
                } else {
                    // login failed: incorrect password
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Incorrect password!</div>');
                    redirect('auth');
                }
            } else {
                // login failed: inactive account
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                This email has not been activated!</div>');
                redirect('auth');
            }
        } else {
            // login failed: email not registered
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email is not registered</div>');
            redirect('auth');
        }
    }

    public function registration() {
        $data['title'] = 'Registration Page';
        $this->load->view('auth/registration', $data);
    }

}