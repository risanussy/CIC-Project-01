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
        //agar user tak bisa kembali ke hal auth saat berada di hal regis
        if ($this->session->userdata('email')) {
            redirect('user'); 
        }

        //memberikan rules
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|email_valid|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already been registered'
        ]);
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|integer');

    
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration';
            $this->load->view('auth/registration', $data);
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),//crose side scripting
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'role_id' => 2,
                'is_active' => 1,
                'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
                'date_create' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation! your account has been created. Please Login</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been logged out!</div>');
        redirect('auth');
    }

}