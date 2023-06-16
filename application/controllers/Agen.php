<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agen extends CI_Controller 
{
    public function __construct() {
        parent::__construct();
        is_logged_in();
    }

    public function index()
{
    // Memberikan rules
    $this->form_validation->set_rules('usernameSponsor', 'Username_Sponsor', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required|xss_clean|trim');
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[agen.email]', [
        'is_unique' => 'This email has already been registered'
    ]);
    $this->form_validation->set_rules('no_telp', 'Nomor HP', 'required|integer');
    $this->form_validation->set_rules('nik', 'Nik', 'required|integer');
    $this->form_validation->set_rules('npwp', 'NPWP', 'required|numeric|exact_length[14]');
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
        'matches' => 'Password tidak sama!',
        'min_length' => 'Password terlalu pendek!'
    ]);
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

    if ($this->form_validation->run() == false) {
        $data['title'] = 'Registration';
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('agen/tambah', $data);
        $this->load->view('templates/footer');
    } else {
        $data = [
            'usernameSponsor' => htmlspecialchars($this->input->post('usernameSponsor', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
            'nik' => htmlspecialchars($this->input->post('nik', true)),
            'npwp' => htmlspecialchars($this->input->post('npwp', true)),
            'peringkat' => htmlspecialchars($this->input->post('peringkat', true)),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => 2,
            'is_active' => 1,
            'date_create' => time(),
            'last_login' => time()
        ];

        // Memasukkan data ke dalam tabel 'agen'
        $this->db->insert('agen', $data);

        // Tampilkan pesan sukses atau error
        $data['message'] = 'Congratulations! Your account has been created. Please login.';
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('agen/tambah', $data);
        $this->load->view('templates/footer');
    }
}


    public function list()
    {
        $data['title'] = 'B-Community   | List Agen';
        // Memuat model AgenModel
        $this->load->model('AgenModel');

        // Memanggil metode getAgenList() dari model untuk mendapatkan data agen
        $data['agen'] = $this->AgenModel->getAgenList();

        // Memuat view untuk menampilkan data agen
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('agen/list', $data);
        $this->load->view('templates/footer');
    } 

    public function deleteAgen($id) {
        $this->db->where('id', $id);
        $this->db->delete('agen');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Agen has been deleted!</div>');
        redirect('agen/list');
    }    

        public function update_last_login($agen_id)
    {
        $data = array(
            'last_login' => date('Y-m-d H:i:s') // Menggunakan tanggal dan waktu saat ini
        );

        $this->db->where('agen_id', $agen_id);
        $this->db->update('agen', $data);
        // Setelah proses login berhasil
        $this->AgenModel->update_last_login($agen_id);
    }

    public function sm()
    {
        $data['title'] = 'Angga Web';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pc/sm', $data);
        $this->load->view('templates/footer');
    }
    
    public function jaringan()
    {
        $data['title'] = 'Angga Web';
        // Memuat model AgenModel
        $this->load->model('AgenModel');

        // Memanggil metode getAgenList() dari model untuk mendapatkan data agen
         $data['agen'] = $this->AgenModel->getAgenList();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('agen/jaringan', $data);
        $this->load->view('templates/footer');
    }

    public function pohon()
    {
        $this->load->model('agen_model');
        
        $data['agen'] = $this->agen_model->get_all_agents();

        $data['title'] = 'Angga Web';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('agen/pohon', $data);
        $this->load->view('templates/footer');
    }

    public function get_agents_by_sponsor($sponsor_username) {
        $agents = $this->agen_model->get_agents_by_sponsor($sponsor_username);
        echo json_encode($agents);

        $this->db->where('usernameSponsor', $sponsor_username);
        $query = $this->db->get('agen');
        return $query->result();
    }

    
    
}