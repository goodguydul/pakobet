<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_login extends CI_Model{


	public function get_role($username){
		$this->db->select('*');
        $this->db->from('users');
        $this->db->where('username',$username);
        $query=$this->db->get();
        
        return $query->result_array();
	}

	function cekuser($username)
    {
        $this->db->select('level');
        $this->db->from('users');
        $this->db->where('username',$username);

        $query = $this->db->get();

        return $query->result();
    }
    
    function ceklogin(){
        $username = $this->session->userdata('username');
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username',$username);
        return $query=$this->db->get();
    }


}