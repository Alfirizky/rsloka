<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rsloka extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_user');
	}
	
	public function index()
	{
		$this->load->view('welcome_rsloka');
	}

	public function form_registrasi(){
		$this->load->view('register_rsloka');
	}

	public function registrasi(){
		$user = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
		);

		$this->m_user->registrasi($user);
	}
}
