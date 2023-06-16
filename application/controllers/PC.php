<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PC extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'B-community';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pc/index', $data);
        $this->load->view('templates/footer');
    }
}