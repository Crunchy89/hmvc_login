<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('auth_model');
	}

	public function index()
	{
		$model = $this->auth_model;
        $validation = $this->form_validation;
        $validation->set_rules($model->log_rules());
		if ($validation->run()) {
			$model->signIn();
		} else {
			$data['title']="Login Page";
			$data['css']="login";
			auth_page('login',$data);
		}
	}
    
    public function register()
	{
		$model = $this->auth_model;
        $validation = $this->form_validation;
        $validation->set_rules($model->reg_rules());
		if ($validation->run()){
		$model->save();
		} else {
			$data['title']="Register Page";
			$data['css']="register";
			auth_page('register',$data);
		}

		
	}
}