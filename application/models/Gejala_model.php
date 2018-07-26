<?php

class Gejala_model extends CI_Model {

	public function all_gejala(){
		$query=$this->db->get("tb_gejala");
	
		return $query;
	}
	
	public function get_gejala()
	{
		$query = $this->db->query("SELECT * FROM tb_gejala");
		return $query->result_array();
	}

	public function insert_gejala(){
		$id_gejala = $this->input->post('id_gejala');
		$nama = $this->input->post('nama');
		$bobot = $this->input->post('bobot');

		$query = $this->db->query("INSERT INTO tb_gejala (id_gejala, nama, bobot) VALUES ('$id_gejala', '$nama', '$bobot')");
		return $query;
	}

	public function getById($id_gejala){
		return $query = $this->db->query("SELECT * FROM tb_gejala WHERE id_gejala='$id_gejala' ")->row_array();
	}

	public function edit_gejala(){
		$id_gejala = $this->input->post('id_gejala');
		$nama = $this->input->post('nama');
		$bobot = $this->input->post('bobot');

		$query = $this->db->query("UPDATE tb_gejala SET nama='$nama', bobot='$bobot' WHERE id_gejala='$id_gejala' ");
		return $query;
	}

	public function hapus_gejala($id_gejala){
		$query = $this->db->query("DELETE FROM tb_gejala WHERE id_gejala='$id_gejala'");
		return $query;
	}
}

?>