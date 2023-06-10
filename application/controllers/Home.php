<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Angga Web';
        $this->load->view('home/index', $data);
        // echo 'home';
    }
} 