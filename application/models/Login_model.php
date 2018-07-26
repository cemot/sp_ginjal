<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	
	public function auth_admin($username, $password)
	{
		$query=$this->db->query("SELECT * FROM tb_user WHERE username='$username' AND password=MD5('$password') LIMIT 1");
		return $query;
	}

	//cek username dan password user
	function auth_user($username,$password){
		$query=$this->db->query("SELECT * FROM tb_pengunjung WHERE username='$username' AND password=MD5('$password') LIMIT 1");
		return $query;
	}

}