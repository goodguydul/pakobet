<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_data extends CI_Model{


	public function get_datafaktur($nmr_faktur){
		$this->db->select('*');
        $this->db->from('datafaktur');
        $this->db->where('nmr_faktur',$nmr_faktur);
        $query=$this->db->get();
        
        return $query->result_array();
	}

	

}