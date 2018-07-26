<?php

class Nilaicf_model extends CI_Model {

	
	public function get_nilaicf()
	{
		$query = $this->db->query("SELECT * FROM tb_bobotcf");
		return $query->result_array();
	}

	public function insert_nilaicf(){
		$kd_gejala = $this->input->post('kd_gejala');
		$kd_penyakit = $this->input->post('kd_penyakit');
		$md = $this->input->post('md');
		$mb = $this->input->post('mb');

		$query = $this->db->query("INSERT INTO tb_bobotcf (kd_gejala, kd_penyakit, md, mb) VALUES ('$kd_gejala', '$kd_penyakit', '$md', '$mb')");
		return $query;
	}

	public function getById($id){
		return $query = $this->db->query("SELECT * FROM tb_bobotcf WHERE id='$id' ")->row_array();
	}

	public function edit_nilaicf(){
		$id = $this->input->post('id');
		$kd_gejala = $this->input->post('kd_gejala');
		$kd_penyakit = $this->input->post('kd_penyakit');
		$md = $this->input->post('md');
		$mb = $this->input->post('mb');

		$query = $this->db->query("UPDATE tb_bobotcf SET kd_gejala='$kd_gejala', kd_penyakit='$kd_penyakit', md='$md', mb='$mb' WHERE id='$id' ");
		return $query;
	}

}
?>