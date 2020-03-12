<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->check_login();


		$data 	= 	['page_title' => "Dashboard - Operator",
					'username'	=> $this->session->userdata('username'),
					'userlevel' => "Operator"
					];

		$this->load->view('home/v_header',$data);
		$this->load->view('home/v_content',$data);
		$this->load->view('home/v_footer');

	}

	public function listFaktur(){

		$this->check_login();


		$data 	= 	['page_title' => "Daftar Faktur - Operator",
					'username'	=> $this->session->userdata('username'),
					'userlevel' => "Operator"
					];

		$this->load->view('home/v_header',$data);
		$this->load->view('home/v_daftarfaktur',$data);
		$this->load->view('home/v_footer');
	}

	public function inputFaktur(){
		$this->check_login();


		$data 	= 	['page_title' => "Input Faktur - Operator",
					'username'	=> $this->session->userdata('username'),
					'userlevel' => "Operator"
					];

		$this->load->view('home/v_header',$data);
		$this->load->view('home/v_inputfaktur',$data);
		$this->load->view('home/v_footer');

	}

	public function cetakFaktur(){
		$this->check_login();


		$data 	= 	['page_title' => "Cetak Faktur - Operator",
					'username'	=> $this->session->userdata('username'),
					'userlevel' => "Operator"
					];

		$this->load->view('home/v_header',$data);
		$this->load->view('home/v_cetakfaktur',$data);
		$this->load->view('home/v_footer');

	}

	public function suratJalan(){
		$this->check_login();


		$data 	= 	['page_title' => "Data Surat Jalan - Operator",
					'username'	=> $this->session->userdata('username'),
					'userlevel' => "Operator"
					];

		$this->load->view('home/v_header',$data);
		$this->load->view('home/v_datasuratjalan',$data);
		$this->load->view('home/v_footer');

	}

	public function uploadDataSamsat(){
		$this->check_login();


		$data 	= 	['page_title' => "Upload Data Samsat - Operator",
					'username'	=> $this->session->userdata('username'),
					'userlevel' => "Operator"
					];

		$this->load->view('home/v_header',$data);
		$this->load->view('home/v_uploaddatasamsat',$data);
		$this->load->view('home/v_footer');

	}

	public function cariDataFaktur(){
		$this->check_login();

		if(isset($_POST["nmr_faktur"]))
		{
			$dataz = $this->m_data->get_datafaktur($_POST["nmr_faktur"]);
			if (isset($dataz[0])) {
				echo json_encode($dataz[0]);
			}
		 	else{
		 		echo "null";
		 	}
		}else{

			echo "cari apa kak?";
		}
	}

	private function check_login(){
		$query = $this->m_login->ceklogin();
		if (!is_null($query->result_array())) {
			foreach ($query->result_array() as $row) { 
		        $level = $row['level'];
			    if ($level != '1'){
			        redirect(site_url('login/logout'));
			    }
	    	}
		}
		if(is_null($this->session->userdata('username'))){
			redirect(site_url('login'));
		}
	     
	}
}
