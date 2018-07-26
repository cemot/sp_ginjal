<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruleds extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Ruleds_model');
		
	}
	public function index(){
		$data['ruleds_data'] = $this->Ruleds_model->get_ruleds();
		$this->load->view('admin/ruleds', $data);
	}

	public function create(){
		if (isset($_POST['submit'])){
			$this->Ruleds_model->insert_ruleds();
			redirect('ruleds/index');
		}
		$data['contents']='admin/tambah_ruleds';
		$this->load->view('templates/index', $data);
	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Ruleds_model->edit_ruleds();
			redirect('ruleds/index');
		}
		$id = $this->uri->segment(3);
		$data['ruleds'] = $this->Ruleds_model->getById($id);
		$this->load->view('admin/ruleds_edit', $data);

	}

	public function hapus(){
		$id = $this->uri->segment(3);
		$this->Ruleds_model->hapus_ruleds($id);
		redirect('ruleds/index');
	}
}
?>