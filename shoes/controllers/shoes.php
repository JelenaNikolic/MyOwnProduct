<?php

class Shoes{
	
	public function __construct(){
		//echo "List of all products";
	}
	
	public function index($param = false, $param2 = false){
		echo "Lista proizvoda. <br />";
		if($param){
			echo "Parametri: ".$param." ".$param2;
		}
	}
	
	public function edit($id){
		echo "Edit proizvoda sa id-jem ". $id;
	}
	
	public function add(){
		echo "Ovde dodajemo proizvode.";
	}
}



?>