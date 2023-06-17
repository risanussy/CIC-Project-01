<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller 
{
    public function index()
    {
        $data['title'] = 'B-Community | Staff';
        // Memuat model Staff_model
        $this->load->model('staff_model');

        // Memanggil metode get_all_agents() dari model untuk mendapatkan data staff
        $data['staff'] = $this->staff_model->get_all_agents();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('staff/staff', $data);
        $this->load->view('templates/footer');
    }

    public function deleteStaff($id) {
        $this->db->where('id', $id);
        $this->db->delete('staff');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Staff has been deleted!</div>');
        redirect('staff');
    }

    
    public function foam()
    {
        $data['title'] = 'B-community';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('staff/foam', $data);
        $this->load->view('templates/footer');
    }

    public function editData()
    {
        // Mendapatkan data dari form
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $username = $this->input->post('username');
        $no_telp = $this->input->post('no_telp');
        $email = $this->input->post('email');
    
        // Memanggil model dan method editData()
        $this->load->model('staff_model');
        $this->staff_model->editData($id, $name, $username, $no_telp, $email);
    
        // Mengelola upload gambar jika ada
        $upload_image = $_FILES['Gambar']['name'];
    
        if ($upload_image) {
            // Konfigurasi untuk upload Gambar
            $config['upload_path'] = './assets/img/profile/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2048;
    
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('Gambar')) {
                // Jika berhasil diupload, set nama file baru ke database
                $new_image = $this->upload->data('file_name');
                $this->staff_model->updateGambar($id, $new_image);
    
                // Hapus Gambar lama jika ada
                $old_image = $this->staff_model->getGambarById($id);
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/' . $old_image);
                }
    
                // Redirect ke halaman yang diinginkan setelah pengeditan selesai
                redirect('staff');
            } else {
                // Jika gagal diupload, tampilkan pesan error
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('staff');
            }
        } else {
            // Jika tidak ada gambar yang diupload, redirect ke halaman yang diinginkan
            redirect('staff');
        }
    }    

    public function umum()
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
