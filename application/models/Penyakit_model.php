<?php

class Penyakit_model extends CI_Model {

	public function get_penyakit()
	{

		//perhatikan baik2 kalau coding,,jangan ada spasi kayak tadi
		$query=$this->db->query("select * from tbl_penyakit");
		return $query->result_array();
	}

	public function insert_penyakit(){
		$kd_penyakit= $this->input->post('kd_penyakit');
		$nm_penyakit= $this->input->post('nm_penyakit');
	
		$query = $this->db->query(" INSERT INTO tbl_penyakit (kd_penyakit, nm_penyakit)
									VALUES
									('$kd_penyakit','$nm_penyakit') ");
		
		return $query;
	}

	
}