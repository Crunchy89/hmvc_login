<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
    }

    public function index(){
        $data['title'] = "Profile";
        admin_page('index',$data);
    }
}