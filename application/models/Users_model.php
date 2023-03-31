<?php

class Users_model extends CI_Model{

    public function get_all_data()
    {
        return $this->db->get('users')->result_array();
    }

}