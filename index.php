<?php

if(isset($_GET['url'])){
	$url = rtrim($_GET['url'],'/');	
}else{
	//$url = "shoes";
}

//echo $url;
use routes\Routes;

/*load loader*/
require_once 'system/loader.php';

//ovo izvlacimo iz npr application_routes.php gde su definisane sve rute i odgovarajuci controlleri i modeli
$urls = array('neki/prvi/url','neki/drugi/url','lep/konj','shoes/woman','shoes/woman/summer','shoes','shoes/edit/1', 'shoes/add');

//$route = new Routes($url, $urls);
$route = new Routes();

$route->index($urls, $url);

?>