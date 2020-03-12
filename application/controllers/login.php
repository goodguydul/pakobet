<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Login extends CI_Controller {
 
    public function index() {

        $this->load->model('m_login');
        if (!$this->session->userdata('username')) {
         
         $page_title['page_title'] = 'Login';
         $valid = $this->form_validation;
         $username = $this->input->post('username');
         $password = $this->input->post('password');
         $valid->set_rules('username','Username','required');
         $valid->set_rules('password','Password','required');
 
         if($valid->run()) {
            $this->simple_login->login($username,$password, base_url('dashboard'), base_url('login'));
         }
         $this->load->view('login/v_header',$page_title);
         $this->load->view('login/v_login');
         $this->load->view('login/v_footer');
           
        } else {
            $username = $this->session->userdata('username');
            $data = $this->m_login->get_role($username);
             
            foreach ($data as $row) {
                $level = $row['level'];
                if ($level == '1'){
                  redirect('home');
                }else if ($level == '2'){
                  redirect('admin');
                }
            }
        }
    }
     public function logout(){
         $this->simple_login->logout();

     }        
 }