<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

    public function getUser(){
      return  $this->db->get('pengguna')->result();
    }

    public function signOut(){
    $this->session->unset_userdata('siteman');
	$this->session->sess_destroy();
	redirect('auth');
    }

}