<?php

class Login extends Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	function index(){
		$this->view->render('login');
	}
	
	function login(){
		$this->model->run();
	}
}

?>