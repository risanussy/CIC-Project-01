<?php

class Regis_model extends CI_Model {
  
  public function insertData($data) {
    // Simpan data ke dalam tabel "regis"
    $this->db->insert('regis', $data);
    
    // Periksa apakah data berhasil disimpan atau tidak
    if ($this->db->affected_rows() > 0) {
      return true; // Data berhasil disimpan
    } else {
      return false; // Data gagal disimpan
    }
  }
  
}
