<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agen extends CI_Controller 
{

    public function index()
    {
        $data['title'] = 'Angga Web';
        // $data['user'] = $this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('agen/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function list()
    {
        $data['title'] = 'Angga Web';
        // $data['user'] = $this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('agen/list', $data);
        $this->load->view('templates/footer');
    }
}