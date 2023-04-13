<?php


class BankSoal_model extends CI_Model{

    public function getSoal()
    {
        return $this->db->get('bank_soal')->result_array();
    }

    public function getSoalById($soal_id)
    {
        $this->db->where('id', $soal_id);
        return $this->db->get('bank_soal')->row_array();
    }

    public function insert($data)
    {
        $this->db->insert('bank_soal', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('bank_soal');
    }
    
}