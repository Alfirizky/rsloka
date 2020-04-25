<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_user extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        public function registrasi(){
            $user = [
				'nama' => $this->input->post('nama',true),
				'email' => $this->input->post('email',true),
				'username' => $this->input->post('username',true),
				'password' => $this->input->post('password',true),
				'jenis_kelamin' => $this->input->post('jenis_kelamin')
            ];

            $this->db->insert('user', $user);

        }
    }
?>
