<?php

class Ruleds_model extends CI_Model {

	public function cek_penyakit($gejala){
		$query=$this->db->get_where('tb_ruleds', array('id_penyakit'=>$gejala));
		return $query;
	}
	
	public function get_ruleds()
	{
		$query = $this->db->query("SELECT * FROM tb_ruleds");
		return $query->result_array();
	}

	public function insert_ruleds(){
		$id_gejala = $this->input->post('id_gejala');
		$id_penyakit = $this->input->post('id_penyakit');

		$query = $this->db->query("INSERT INTO tb_ruleds (id_gejala, id_penyakit) VALUES ('$id_gejala', '$id_penyakit')");
		return $query;
	}

	public function getById($id){
		return $query = $this->db->query("SELECT * FROM tb_ruleds WHERE id='$id' ")->row_array();
	}

	public function edit_ruleds(){
		$id = $this->input->post('id');
		$id_gejala = $this->input->post('id_gejala');
		$id_penyakit = $this->input->post('id_penyakit');

		$query = $this->db->query("UPDATE tb_ruleds SET id_gejala='$id_gejala', id_penyakit='$id_penyakit' WHERE id='$id' ");
		return $query;
	}

	public function hapus_ruleds($id){
		$query = $this->db->query("DELETE FROM tb_ruleds WHERE id='$id'");
		return $query;
	}

}
?>