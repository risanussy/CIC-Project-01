<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flip extends CI_Controller
{
    // public function __construct() {
    //     parent::__construct();
    //     is_logged_in();
    // }
    
    public function index()
    {
        $data['title'] = 'B-community';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('flip/transaksi', $data);
        $this->load->view('templates/footer');
    }

    public function inquery()
    {
        $data['title'] = 'B-community';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('flip/inquery', $data);
        $this->load->view('templates/footer');
    }

    public function history()
    {
        $data['title'] = 'B-community';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('flip/history', $data);
        $this->load->view('templates/footer');
    }

    //komisi Controller
    public function komisi()
    {
        $data['title'] = 'B-community';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('komisi/komisi', $data);
        $this->load->view('templates/footer');
    }

    public function statement()
    {
        $data['title'] = 'B-community';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('komisi/statement', $data);
        $this->load->view('templates/footer');
    }

    public function wallet()
    {
        $data['title'] = 'B-community';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('komisi/wallet', $data);
        $this->load->view('templates/footer');
    }

    public function withdraw()
    {
        $data['title'] = 'B-community';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('komisi/withdraw', $data);
        $this->load->view('templates/footer');
    }
    
    //laporan Controller

    public function regis()
    {       
        $data['title'] = 'B-community | Regis';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('flip/regis', $data);
        $this->load->view('templates/footer');
    }

    public function omset()
    {
        $data['title'] = 'B-community';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('flip/omset', $data);
        $this->load->view('templates/footer');
    }

    public function personal()
    {
        $data['title'] = 'B-community';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('flip/personal_omsite', $data);
        $this->load->view('templates/footer');
    }

    public function point_member()
    {
        $data['title'] = 'B-community';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('flip/point_member', $data);
        $this->load->view('templates/footer');
    }

    public function reward()
    {
        $data['title'] = 'B-community';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('flip/reward', $data);
        $this->load->view('templates/footer');
    }

    public function bonus()
    {
        $data['title'] = 'B-community';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('flip/bonus_owner', $data);
        $this->load->view('templates/footer');
    }
}