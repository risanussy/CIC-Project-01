<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flip extends CI_Controller {
    public function index()
    {
        $data['title'] = 'Angga Web';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('flip/transaksi', $data);
        $this->load->view('templates/footer');
    }

    public function inquery()
    {
        $data['title'] = 'Angga Web';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('flip/inquery', $data);
        $this->load->view('templates/footer');
    }

    public function history()
    {
        $data['title'] = 'Angga Web';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('flip/history', $data);
        $this->load->view('templates/footer');
    }
}