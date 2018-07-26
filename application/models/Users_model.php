<?php

class Users_model extends CI_Model {

	
	public function get_users()
	{
		$query = $this->db->query("SELECT * FROM tb_pengunjung");
		return $query->result_array();
	}

	public function insert_user(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jk = $this->input->post('jk');
		$umur = $this->input->post('umur');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$query = $this->db->query("INSERT INTO tb_pengunjung (nama, jk, umur, email, username, password) VALUES ('$nama', '$jk', '$umur', '$email', '$username', '$password')");
		return $query;
	}

	public function getById($id){
		return $query = $this->db->query("SELECT * FROM tb_pengunjung WHERE id='$id' ")->row_array();
	}

	public function edit_user(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jk = $this->input->post('jk');
		$umur = $this->input->post('umur');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$query = $this->db->query("UPDATE tb_pengunjung SET nama='$nama', jk='$jk', umur='$umur', email='$email', username='$username', password='$password' WHERE id='$id' ");
		return $query; 
	}

	public function hapus_user($id){
		$query = $this->db->query("DELETE FROM tb_pengunjung WHERE id='$id'");
		return $query;
	}

}

?>