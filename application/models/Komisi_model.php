<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Komisi_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT bc_komisi.*, agen.username, agen.nama
        FROM bc_komisi
        JOIN agen ON bc_komisi.id_agen = agen.id
        ";

        return $this->db->query($query)->result_array();          
    }
}
