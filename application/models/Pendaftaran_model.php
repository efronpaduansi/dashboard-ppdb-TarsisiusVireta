<?php

class Pendaftaran_model extends CI_Model{

    public function getAll(){
        return $this->db->get('pendaftaran')->result_array();
    }
    public function insert($data){
        $this->db->insert('pendaftaran', $data);
    }
    
}