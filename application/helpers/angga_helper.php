<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];

        $userAccess = $ci->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ])->num_rows();

        if ($userAccess < 1) {
            redirect('auth/blocked');
        }
    }
}

function check_access($role_id, $menu_id)
{
   $ci = get_instance();
   
   // Melakukan query ke tabel user_access_menu dengan mengambil baris yang sesuai dengan role_id dan menu_id
   $result = $ci->db->get_where('user_access_menu', ['role_id' => $role_id, 'menu_id' => $menu_id])->result();

   // Jika hasil query tidak kosong, maka mengembalikan string "checked='checked'"
   if (!empty($result)) {
        return "checked='checked'";
   }
}


