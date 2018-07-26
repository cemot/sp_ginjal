<?php

class Diagnosa_model extends CI_Model {

	
	public function get_diagnosa()
	{
		$query = $this->db->query("SELECT * FROM tb_pengunjung");
		return $query->result_array();
	}
}