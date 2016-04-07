<?php

namespace routes;

class Routes {
	
	public function __construct()
	{
	
	}
	
	public function index($urls, $url)
	{
		if(in_array($url, $urls)){ //da li mi ovo uopste treba ili ne?
			echo array_search($url, $urls); // na kojem mestu u okviru niza url-ova se nalazi trazeni string (url)
		}else{
			echo "Error 404<br />";
		}
	}
	
}
?>