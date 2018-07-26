<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Penyakit_model');
		
	}
	public function index(){
		$data['penyakit_data'] = $this->Penyakit_model->get_penyakit();
		$this->load->view('admin/penyakit', $data);
	}

	public function create(){
		if (isset($_POST['submit'])){
			$this->Penyakit_model->insert_penyakit();
			redirect('penyakit/index');
		}
		$data['contents']='admin/tambah_penyakit';
		$this->load->view('templates/index', $data);
	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Penyakit_model->edit_penyakit();
			redirect('penyakit/index');
		}
		$id = $this->uri->segment(3);
		$data['penyakit'] = $this->Penyakit_model->getById($id);
		$this->load->view('admin/penyakit_edit', $data);

	}

	public function hapus(){
		$id = $this->uri->segment(3);
		$this->Penyakit_model->hapus_penyakit($id);
		redirect('penyakit/index');
	}
}
?>