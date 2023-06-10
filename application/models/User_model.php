<?php
class User_model extends CI_Model {
    public function registerUser($data) {
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }

    public function getUserById($userId) {
        $this->db->where('id', $userId);
        return $this->db->get('users')->row();
    }

    public function getUsersBySponsorId($sponsorId) {
        $this->db->where('sponsor_id', $sponsorId);
        return $this->db->get('users')->result();
    }

    // Fungsi lainnya...
}
