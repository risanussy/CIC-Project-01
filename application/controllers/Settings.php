<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller 
{

    public function index()
    {
        $data['title'] = 'B-community';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('settings/umum', $data);
        $this->load->view('templates/footer');
    }

    public function notifikasi()
    {
        $data['title'] = 'B-community';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('settings/notifikasi', $data);
        $this->load->view('templates/footer');
    }

    public function withdraw2()
    {
        $data['title'] = 'B-community';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('settings/withdraw2', $data);
        $this->load->view('templates/footer');
    }
}
    
