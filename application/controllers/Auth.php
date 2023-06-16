<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() {
        if ($this->session->userdata('username')) {
            redirect('staff'); 
        }
    
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
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
    $username = $this->input->post('username'); 
    $password = $this->input->post('password');

    $user = $this->db->get_where('staff', ['username' => $username])->row_array();
    if (!$user) {
        $user = $this->db->get_where('agen', ['username' => $username])->row_array();
    }

    if ($user) {
        if ($user['is_active'] == 1) {
            if (password_verify($password, $user['password'])) {
                // login success
                $data = [
                    'username' => $user['username'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                
                if ($user['role_id'] == 1) {
                    redirect('staff');
                } else {
                    redirect('agen/list');
                }
            } else {
                // login failed: incorrect password
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Incorrect password!</div>');
                redirect('auth');
            }
        } else {
            // login failed: inactive account
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            This account is inactive!</div>');
            redirect('auth');
        }
    } else {
        // login failed: username not registered
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Username is not registered</div>');
        redirect('auth');
    }
}
    
public function registration()
{
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[demobc.email]', [
        'is_unique' => 'This email has already been registered.'
    ]);
    $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|integer');

    if ($this->form_validation->run() == false) {
        $data['title'] = 'Registration';
        $this->load->view('auth/registration', $data);
        $this->load->view('templates/auth_footer');
    } else {
        $data = [
            'sponsor' => $this->input->post('sponsor'),
            'fullname' => $this->input->post('fullname'),
            'username' => $this->input->post('username'),
            'nik' => $this->input->post('nik'),
            'no_hp' => $this->input->post('no_hp'),
            'email' => $this->input->post('email'),
            'npwp' => $this->input->post('npwp'),
            'provinsi' => $this->input->post('provinsi'),
            'alamat' => $this->input->post('alamat'),
            'produk' => $this->input->post('produk'),
            'pemdaftaran' => $this->input->post('pendaftaran'),
            'bank' => $this->input->post('bank')
        ];

        $this->db->insert('regis', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Congratulation! Your account has been created. Please login.</div>');
        redirect('auth');
    }
}


    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been logged out!</div>');
        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}