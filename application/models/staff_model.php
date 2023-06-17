<?php
class Staff_model extends CI_Model {
    public function get_all_agents() {
        $query = $this->db->get('staff');
        return $query->result();
    }

    public function editData($id, $name, $username, $no_telp, $email, $Gambar, $is_active, $date_create) {
        $data = array(
            'name' => $name,
            'username' => $username,
            'no_telp' => $no_telp,
            'email' => $email,
            'Gambar' => $Gambar,
            'is_active' => $is_active,
            'date_create' => $date_create
        );
    
        $this->db->where('id', $id);
        $this->db->update('staff', $data);
    }

    public function getGambarById($id)
    {
        $this->db->select('Gambar');
        $this->db->where('id', $id);
        $query = $this->db->get('staff');
        $row = $query->row();

        if ($query->num_rows() > 0) {
            return $row->Gambar;
        } else {
            return false;
        }
    }

    public function updateGambar($id, $Gambar)
    {
        $data = array(
            'Gambar' => $Gambar
        );

        $this->db->where('id', $id);
        $this->db->update('staff', $data);
    }
}
