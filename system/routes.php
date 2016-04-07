<?php

namespace routes;

class Routes {
	
	public function __construct()
	{
	
	}
	
	public function index($urls, $url)
	{
		if(in_array($url, $urls)){ //ukoliko se string nalazi u url-u
			echo array_search($url, $urls); // na kojem mestu u okviru niza url-a se on nalazi
		}else{
			echo "Error 404<br />";
		}
	}
	
}
?>