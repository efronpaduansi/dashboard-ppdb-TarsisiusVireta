<?php


class Jawaban_model extends CI_Model{

    public function insert($data)
    {
        $this->db->insert('jawaban_soal', $data);
    }

}