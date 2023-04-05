<?php

class Pendaftaran_model extends CI_Model{

    public function getAll(){
        return $this->db->get('pendaftaran')->result_array();
    }

    public function getEmail(){
        //ambil data email
        $this->db->select('email');
        $this->db->from('pendaftaran');
        return $this->db->get()->result_array();
    }

    public function getByStatus(){
        $this->db->select('*');
        $this->db->from('pendaftaran');
        $this->db->where('status', 'Menunggu Verifikasi');
        return $this->db->get()->result_array();
    }
    //Fungsi untuk melihat status pendaftaran oleh siswa dari android
    public function getByStatusByNumber($no_pendaftaran){
        $this->db->select('pendaftaran.*, jurusan.nama_jurusan');
        $this->db->from('pendaftaran');
        //join ke tabel jurusan
        $this->db->join('jurusan', 'jurusan.id = pendaftaran.jurusan_id');
        $this->db->where('no_pendaftaran', $no_pendaftaran);
        return $this->db->get()->result_array();
    }

    public function insert($data){
        $this->db->insert('pendaftaran', $data);
    }

    public function do_accept($no_pendaftaran, $data){
        $this->db->where('no_pendaftaran', $no_pendaftaran);
        $this->db->update('pendaftaran', $data);
    }

    public function do_reject($no_pendaftaran, $data){
        $this->db->where('no_pendaftaran', $no_pendaftaran);
        $this->db->update('pendaftaran', $data);
    }

    public function do_delete($no_pendaftaran){
        $this->db->where('no_pend$no_pendaftaran', $no_pendaftaran);
        $this->db->delete('pendaftaran');
    }
    
}