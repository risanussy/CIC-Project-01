<?php
class Agen_model extends CI_Model {
    public function get_all_agents() {
        $query = $this->db->get('regis');
        return $query->result();
    }
}
