<?php

class AgenModel extends CI_Model
{
    public function getAgenList()
    {
        // Ambil data agen dari database dan kembalikan sebagai array
        // Anda perlu menyesuaikan query ini sesuai dengan struktur tabel dan kolom di database Anda
        $query = $this->db->get('agen');
        return $query->result_array();
    }

        public function update_last_login($agen_id)
    {
        $data = array(
            'last_login' => date('Y-m-d H:i:s') // Menggunakan tanggal dan waktu saat ini
        );

        $this->db->where('agen_id', $agen_id);
        $this->db->update('agen', $data);
    }

}