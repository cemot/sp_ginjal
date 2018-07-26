<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
    parent::__construct();
    //validasi jika admin belum login
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
  }

	public function index()
	{
		$data['contents']='admin/dashboard';
		$this->load->view('templates/index', $data);
	}

	function data_admin(){
    // function ini hanya boleh diakses oleh admin
    	$this->session->userdata('akses')=='1';
    	$this->load->view('home');
    }
}
