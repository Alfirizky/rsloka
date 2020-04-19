<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class m_user extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        public function registrasi($user){
            return $this->db->insert('user', $user);
        }
    }
?>