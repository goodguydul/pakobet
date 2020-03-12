<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->check_login();
		$data 	= 	['page_title' => "Dashboard - Administrator",
					'username'	=> $this->session->userdata('username'),
					'userlevel' => "Verifikator"
					];

		$this->load->view('admin/v_header',$data);
		$this->load->view('admin/v_content',$data);
		$this->load->view('admin/v_footer');

	}

	private function check_login(){
		$query = $this->m_login->ceklogin();
		if (!is_null($query->result_array())) {
			foreach ($query->result_array() as $row) { 
		        $level = $row['level'];
			    if ($level != '2'){
			        redirect(site_url('login/logout'));
			    }
	    	}
		}
		if(is_null($this->session->userdata('username'))){
			redirect(site_url('login'));
		}
	     
	}
}
?>
