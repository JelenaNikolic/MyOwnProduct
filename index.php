<?php


if(isset($_GET['url'])){
	$url = $_GET['url'];	
}else{
	$url = "index";
}

//echo $url;

require 'controllers/routes.php';

$urls = array('neki/prvi/url','neki/dugi/url','neki/lep/konj');

$route = new Routes();

$route->index($urls);



?>