<?php

class Jurusan_model extends CI_Model{


    //autogenerate kode jurusan
    public function createKode()
    {
        $this->db->select('RIGHT(jurusan.kd_jurusan,3) as kode_jurusan', FALSE);
        $this->db->order_by('kd_jurusan','DESC');    
        $this->db->limit(1);
        
        $query = $this->db->get('jurusan');
        if($query->num_rows() <> 0){      
             $data = $query->row();
             $kode = intval($data->kode_jurusan) + 1; 
        }
        else{      
             $kode = 1;  
        }
        $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
        $kodetampil = "J22".$batas;
        return $kodetampil;
    }

    public function get_all_data()
	{
		return $this->db->get('jurusan');
	}

    public function input_data($table, $data)
	{
		$this->db->insert($table, $data);
	}

    public function delete($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

   public function update_data($table, $data, $where)
   {
        $this->db->where($where);
        $this->db->update($table, $data);
   }

}