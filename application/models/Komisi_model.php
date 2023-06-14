<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Komisi_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `demobc`.*, `agent`.`username` 
                  FROM `agent` JOIN `demobc` ON `agent`.`username_id`=`demobc`.`id`";

        return $this->db->query($query)->result_array();          
    }
}
