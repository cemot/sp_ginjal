<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
	}

	function index(){
		$this->load->view('frontend/index');
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_admin=$this->Login_model->auth_admin($username,$password);

        if($cek_admin->num_rows() > 0){ //jika Login sebagai admin
						$data=$cek_admin->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['level']=='1'){ //Akses admin
		            $this->session->set_userdata('akses','1');
		            $this->session->set_userdata('ses_id',$data['id']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('home');

		         }
        }else{ //jika Login sebagai user
					$cek_user=$this->Login_model->auth_user($username,$password);
					if($cek_user->num_rows() > 0){
							$data=$cek_user->row_array();
        			$this->session->set_userdata('masuk',TRUE);
							$this->session->set_userdata('akses','2');
							$this->session->set_userdata('ses_id',$data['id']);
							$this->session->set_userdata('ses_nama',$data['nama']);
							redirect('diagnosa');
					}else{  // jika username dan password tidak ditemukan atau salah
							$url=base_url();
							echo $this->session->set_flashdata('msg','Username Atau Password Salah');
							redirect($url);
					}
        }

    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }

}
