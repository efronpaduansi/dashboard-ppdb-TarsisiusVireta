<?php

class Siswa_model extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('pendaftaran');
        $this->db->where('status', 'Diterima');
        return $this->db->get()->result_array();
    }

    // public function insert($data){
    //     $this->db->insert('siswa', $data);
    // }

    // public function delete($nis){
    //     $this->db->where('nis', $nis);
    //     $this->db->delete('siswa');
    // }
    
}