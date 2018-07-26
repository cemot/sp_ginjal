<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Gejala_model');
		
	}
	public function index(){
		$data['gejala_data'] = $this->Gejala_model->get_gejala();
		$this->load->view('admin/gejala', $data);
	}

	
	public function create(){
		if (isset($_POST['submit'])){
			$this->Gejala_model->insert_gejala();
			redirect('gejala/index');
		}
		$data['contents']='admin/tambah_gejala';
		$this->load->view('templates/index', $data);
	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Gejala_model->edit_gejala();
			redirect('gejala/index');
		}
		$id = $this->uri->segment(3);
		$data['gejala'] = $this->Gejala_model->getById($id);
		$this->load->view('admin/gejala_edit', $data);

	}

	public function hapus(){
		$id = $this->uri->segment(3);
		$this->Gejala_model->hapus_gejala($id);
		redirect('gejala/index');
	}
}

?>