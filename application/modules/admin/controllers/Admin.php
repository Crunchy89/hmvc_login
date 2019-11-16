<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

    public function __construct(){
        if(!$this->session->userdata('siteman')){
            redirect('auth');
        }
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('admin_model');
	}

public function index(){
    $data['title']='Dashboard';
    admin_page('dashboard',$data);
}

public function user(){
    $data['title']='Users Menu';
    $data['user']=$this->admin_model->getUser();
    admin_page('user',$data);
}

public function form_tambah_user(){
    $data['title']='Tambah User';
    admin_page('form_tambah',$data);
}

public function logout(){
    $this->admin_model->signOut();
}

}