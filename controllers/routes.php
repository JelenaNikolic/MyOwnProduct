<?php

class Routes {
	
	public function __construct()
	{
	
	}
	
	public function index($urls)
	{
		$i = 0;  //ovo ce mi biti brojac da znam u kojem po redu url-u se nalazi string
		foreach($urls as $url){
			//echo $url."<br />";
			$url = explode("/",$url);
			$string = 'konj';  //string koji se proverava da li se nalazi u nekom od url-ova iz niza
			
			if(in_array($string, $url)){ //ukoliko se string nalazi u url-u
				echo $i."<br />"; //u kojem po redu url-u se nalazi string
				echo array_search($string, $url)."<br />"; // na kojem mestu u okviru url-a se on nalazi
			}
			/*else{
				echo "Error 404<br />";
			}*/
			$i++;
		}
	}
	
}
?>