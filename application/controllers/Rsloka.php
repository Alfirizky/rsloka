<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rsloka extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_user');        
		$this->load->library('form_validation'); 
    }

	
	public function index()
	{
		$this->load->view('welcome_rsloka');
	}

	// public function form_registrasi(){
	// 	$this->load->view('register_rsloka');
	// }

	public function registrasi(){

		$this->form_validation->set_rules('nama','Nama barang','required');
		$this->form_validation->set_rules('email','Your Email','required');
		$this->form_validation->set_rules('username','usernama you','required');		
		$this->form_validation->set_rules('password','PSWD','required');
		$this->form_validation->set_rules('jenis_kelamin','JK','required');

		if ( $this->form_validation->run() == FALSE ) {
            
            $this->load->view('v_register_rsloka');
            
        } else {
           
            $this->M_user->registrasi();
            redirect('rsloka');
        }
	}
}
