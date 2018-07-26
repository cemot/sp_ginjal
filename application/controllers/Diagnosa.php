<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa extends CI_Controller {
	function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
		$this->load->helper(array('url','form'));
		$this->load->library(array());
		$this->load->model(array('Gejala_model','Ruleds_model','Densitas','Penyakit_model'));
  }

	public function index()
	{
	$query=$this->Gejala_model->all_gejala();
	$form= form_open('diagnosa/hitung');
	foreach ($query->result() as $data){
		$form .= form_checkbox($data->id_gejala,'ya', FALSE).$data->nama.'<br>';
	}
	$form .= form_submit('mysubmit', 'Submit');
	$form .= form_close();
	
	$data= array(
	'header'=>'Diagnosa',
	'form'=> $form
	
	);

		// $data['diagnosa_data'] = $this->Diagnosa_model->get_diagnosa();
	$this->load->view('frontend/headerdg',$data);
	$this->load->view('frontend/diagnosa',$data);
	}

	// public function data_user(){
 //    // function ini  diakses oleh pengunjung
 //    	$this->session->userdata('akses')=='2';
 //      	$this->load->view('diagnosa');
 //    }

    public function hitung($m1=null,$m2=null){
	$ip = $_SERVER['REMOTE_ADDR'];
	$this->db->delete('tb_hitungds',array('ip' => $ip));
	$i=0;
	$query=$this->Gejala_model->all_gejala();
	foreach ($query->result() as $data){
	
		if($this->input->post($data->id_gejala)=='ya'){
		$i++;

		$himpunan=null;
			$qpenyakit=$this->Ruleds_model->cek_penyakit($data->id_gejala);
			unset($daftar_penyakit);
			//cari penyakit dari gejala
			//himpunan gejala saat ini
			
			foreach($qpenyakit->result() as $dpenyakit){
				$daftar_penyakit[]= $dpenyakit->id_penyakit;
			}
			$himpunan=json_encode($daftar_penyakit);
		//jika gejala pertama
		if($i==1){
		$bobot=$data->bobot;
			$data=array(
			'id'=>'',
			'M'=>$i,
			'himpunan'=>$himpunan,
			'nilai'=>$bobot,
			'ip' => $ip
			);	
			$this->db->insert('tb_hitungds',$data);
		
			$data2=array(
			'id'=>'',
			'M'=>$i,
			'himpunan'=>'teta',
			'nilai'=>(1-$bobot),
			'ip' => $ip
		);	
		$this->db->insert('tb_hitungds',$data2);
			
		}
		else{
			$m=$i-1;
			$qdensitas=$this->Densitas->all_densitas($m,$ip);
			foreach ($qdensitas->result() as $ddensitas){
			//lakukan hitungan dengan himpunan normal(no teta) 
			//penghitungan m(Z) asli
			//jika himpunan saat ini = teta, maka kombinasi berupa himpunan baru, 
			if($ddensitas->himpunan=='teta'){
			
				$kombinasi=$himpunan;
			}
			else{
				//ambil himpunan lama dan jadikan array
				
				$himpunan_lama= json_decode($ddensitas->himpunan,true);
				//echo "lama/dens=".json_encode($himpunan_lama)."<br>";
				//ambil himpunan baru
				$himpunan_ini= $daftar_penyakit;
				//echo "saat ini=".json_encode($himpunan_ini)."<br>";
				//potongan
				$komb= array_intersect($himpunan_lama,$himpunan_ini);
				//echo "kombinasi=".json_encode($komb)."<br><hr>";
				if(empty($komb)){
					$kombinasi= "null";
				}
				else{
					$kombinasi=json_encode($komb);
				}
			//end of else (non teta)
			}	
			
			//himpunan sekarang*densitas
			$nilai=$data->bobot*$ddensitas->nilai;
			
			$cek1=$this->Densitas->cek_himpunan($i,$kombinasi,$ip);
						
			if($cek1){
				$this->db->set('nilai','nilai+'.$nilai,FALSE);
				$this->db->where(array('M'=>$i,'himpunan' => $kombinasi,'ip'=> $ip));
				$this->db->update('tb_hitungds'); 
				}
			else{
				$this->db->insert('tb_hitungds',array('M'=>$i,'himpunan' => $kombinasi,'nilai' =>$nilai,'ip'=> $ip));
				}
			
			//teta sekarang*densitas
			$nilai2=(1-($data->bobot))*$ddensitas->nilai;
			$cek2=$this->Densitas->cek_himpunan($i,$ddensitas->himpunan,$ip);
			
			if($cek2){
				$this->db->set('nilai','nilai+'.$nilai2,FALSE);
				$this->db->where(array('M'=>$i,'himpunan' => $ddensitas->himpunan,'ip'=> $ip));
				$this->db->update('tb_hitungds'); 
				}
			else{
				$this->db->insert('tb_hitungds',array('M'=>$i,'himpunan' => $ddensitas->himpunan,'nilai' =>$nilai2,'ip'=> $ip));
				}
			
			//foreach densitas
			}
			$cek_null=$this->Densitas->cek_himpunan_null($i,$ip);
			if($cek_null){
				$n_null=$this->Densitas->himpunan_null($i,$ip);
				$this->db->set('nilai','nilai/(1-'.$n_null.')',FALSE);
				$this->db->where(array('M'=>$i,'ip'=> $ip, 'nilai !='=>'null'));
				$this->db->update('tb_hitungds'); 			
				
			}
			
		//end of else m>1
		}
		//end of if ya
		}
	//end of foreach 
	}
	if($i==0){
	$hasil_diagnosa='Tidak ada gejala dipilih, anda baik baik saja';
	$hasil['densitas']=0;
	}else{
	$hasil= $this->densitas->m_max($ip);
	
	$list_penyakit= json_decode($hasil['himpunan']);
	$hasil_diagnosa = '<ul>';
	foreach ($list_penyakit as $hasil_penyakit){
		$data_penyakit=$this->penyakit->detail_penyakit($hasil_penyakit);
		$hasil_diagnosa .= '<li>'.anchor('diagnosa/diagnosa#'.$data_penyakit['nama'],$data_penyakit['nama']).'</li>';
	}
	$hasil_diagnosa .= '</ul>';
	}
	
	
	$data= array(
	'title'=>'Sistem Pakar',
	'hasil'=>$hasil_diagnosa,
	'densitas'=>number_format($hasil['densitas'],2,'.','')
	);
	$this->load->view('frontend/diagnosa', $data);
	$this->load->view('frontend/hasil',$data);
	
	
	//end function hitung
	}
}
