<?php

class Penyakit_model extends CI_Model {
	
	public function detail_penyakit($id){
		$qpenyakit=$this->db->get_where('tb_penyakit', array('id_penyakit'=>$id));
		foreach ($qpenyakit->result() as $dpenyakit){
			$data['id']=$dpenyakit->id_penyakit;
			$data['nama']=$dpenyakit->penyakit;
			$data['solusi']=$dpenyakit->solusi;
		}
		return $data;
	}

	public function get_penyakit()
	{
		$query = $this->db->query("SELECT * FROM tb_penyakit");
		return $query->result_array();
	}

	public function insert_penyakit(){
		$id_penyakit = $this->input->post('id_penyakit');
		$nama = $this->input->post('nama');
		$solusi = $this->input->post('solusi');

		$query = $this->db->query("INSERT INTO tb_penyakit (id_penyakit, nama, solusi) VALUES ('$id_penyakit', '$nama', '$solusi')");
		return $query;
	}

	public function getById($id_penyakit){
		return $query = $this->db->query("SELECT * FROM tb_penyakit WHERE id_penyakit='$id_penyakit' ")->row_array();
	}

	public function edit_penyakit(){
		$id_penyakit = $this->input->post('id_penyakit');
		$nama = $this->input->post('nama');
		$solusi = $this->input->post('solusi');

		$query = $this->db->query("UPDATE tb_penyakit SET id_penyakit='$id_penyakit', nama='$nama', solusi='$solusi' WHERE id_penyakit='$id_penyakit' ");
		return $query; 
	}

	public function hapus_penyakit($id_penyakit){
		$query = $this->db->query("DELETE FROM tb_penyakit WHERE id_penyakit='$id_penyakit'");
		return $query;
	}
}
?>