<?php

class Controller{
	
	public function __construct(){
		$this->view = new View();	
	}
	
	public function loadModel($name){
	
		$model_path = 'models/'.$name."_model.php";
		
		if(file_exists($model_path)){
			require $model_path;
			$model_name = $name."_model";
			$this->model = new $model_name();
		}
	}
}



?>