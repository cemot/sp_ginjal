<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilaicf extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Nilaicf_model');
		
	}
	public function index(){
		$data['nilaicf_data'] = $this->Nilaicf_model->get_nilaicf();
		$this->load->view('admin/nilaicf', $data);
	}

	public function create(){
		if (isset($_POST['submit'])){
			$this->Nilaicf_model->insert_nilaicf();
			redirect('nilaicf/index');
		}
		$data['contents']='admin/tambah_nilaicf';
		$this->load->view('templates/index', $data);
	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Nilaicf_model->edit_nilaicf();
			redirect('nilaicf/index');
		}
		$id = $this->uri->segment(3);
		$data['nilaicf'] = $this->Nilaicf_model->getById($id);
		$this->load->view('admin/nilaicf_edit', $data);

	}
}
?>