<?php

class Login_model extends Model{

	public function __construct(){
		parent::__construct();
	}
	
	public function login(){
		$sql = $this->dbc->prepare("SELECT id FROM users WHERE username = :username AND password = MD5(:password)");
		$sql->execute(array(
			':username' => $_POST['username'],
			':password' => $_POST['password']
		));
	
		$count = $sql->rowCount();
		if($count > 0){
			Session::init();
			Session::set('loggedIn', true);
			header('location: dashboard.php');
		}else{
			header('location: login');
		}
	}
}


?>