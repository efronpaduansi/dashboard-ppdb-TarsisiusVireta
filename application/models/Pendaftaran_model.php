<?php

class Pendaftaran_model extends CI_Model{

    public function getAll(){
        return $this->db->get('pendaftaran')->result_array();
    }

    public function insert($data){
        $this->db->insert('pendaftaran', $data);
    }

    public function do_accept($id, $data){
        $this->db->where('id', $id);
        $this->db->update('pendaftaran', $data);
    }

    public function do_reject($id, $data){
        $this->db->where('id', $id);
        $this->db->update('pendaftaran', $data);
    }

    public function do_delete($id){
        $this->db->where('id', $id);
        $this->db->delete('pendaftaran');
    }
    
}