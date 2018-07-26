<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Users_model');
		
	}
	public function index(){
		$data['users_data'] = $this->Users_model->get_users();
		$this->load->view('admin/users', $data);
	}

	public function create(){
		if (isset($_POST['submit'])){
			$this->Users_model->insert_user();
			redirect('users/index');
		}
		$data['contents']='admin/tambah_user';
		$this->load->view('templates/index', $data);
	}

	public function insert(){
		if (isset($_POST['submit'])){
			$this->Users_model->insert_user();
			redirect('dashboard/#contact');
		}
	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Users_model->edit_user();
			redirect('users/index');
		}
		$id = $this->uri->segment(3);
		$data['user'] = $this->Users_model->getById($id);
		$this->load->view('admin/user_edit', $data);

	}

	public function hapus(){
		$id = $this->uri->segment(3);
		$this->Users_model->hapus_user($id);
		redirect('users/index');
	}
}
?>