<?php

class Kelas_model extends CI_Model{

	public function get_all_data()
	{
		return $this->db->get('kelas');
	}
	
	//membuat kode kelas otomatis
    public function createKode()
    {
        $this->db->select('RIGHT(kelas.kd_kelas,3) as kode_kelas', FALSE);
        $this->db->order_by('kd_kelas','DESC');    
        $this->db->limit(1);
        
        $query = $this->db->get('kelas');
        if($query->num_rows() <> 0){      
             $data = $query->row();
             $kode = intval($data->kode_kelas) + 1; 
        }
        else{      
             $kode = 1;  
        }
        $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
        $kodetampil = "KLS".$batas;
        return $kodetampil;
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
