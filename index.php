<?php


if(isset($_GET['url'])){
	$url = $_GET['url'];	
}else{
	$url = "index";
}

//echo $url;
use routes\Routes;

/*load loader*/
require_once 'system/loader.php';

$urls = array('neki/prvi/url','neki/drugi/url','lep/konj');

$route = new Routes();

$route->index($urls, $url);

//Routes\index($urls, $url);



?>