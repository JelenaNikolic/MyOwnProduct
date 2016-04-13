<?php

namespace routes;

class Routes {
	
	public function __construct()
	{
	
	}
	
	public function index($urls, $url)
	{
		if(in_array($url, $urls)){ //da li mi ovo uopste treba ili ne?
			$url = explode('/',$url);
			$number_of_arguments = count($url);
			//echo $number_of_arguments;
			
			$controller = $url[0];
			
			//echo array_search($url, $urls); // na kojem mestu u okviru niza url-ova se nalazi trazeni string (url)
			
			switch($number_of_arguments){
				case 1:                        //slucaj 'myownproduct/shoes' gde se listaju sve cipele, muske, zenske, decije, za sva godisnja doba
					require $controller.'/controllers/'.$controller.'.php';
					$application = new $controller();
					break;
				case 2:
					if($url[1] == "add"){      // slucaj 'myownproduct/shoes/add' gde se dodaju nove cipele (muske, zenske, decije)
						$method = $url[1];
						
						$path = $controller.'/controllers/'.$controller.'.php';
						
						if(file_exists($path)){
							require $path;
						}
						
						$application = new $controller();
						$application->$method();
					}else{                     // slucaj 'myownproduct/shoes/woman' gde se listaju sve zenske/muske/decije cipele - za sva godisnja doba
						$param = $url[1];
						require $controller.'/controllers/'.$controller.'.php';
						$application = new $controller($param);
					}
					break;
				case 3:
					if($url[1] == "edit"){  // slucaj 'myownproduct/shoes/edit/id' gde se edituju cipele (muske, zenske, decije)
						$method = $url[1];
						$param = $url[2];
						
						$path = $controller.'/controllers/'.$controller.'.php';
						
						if(file_exists($path)){
							require $path;
						}
						
						$application = new $controller();
						$application->$method($param);
					}else{                // slucaj 'myownproduct/shoes/woman/spring' gde se listaju sve zenske prolecne cipele
						$param1 = $url[1];
						$param2 = $url[2];
						require $controller.'/controllers/'.$controller.'.php';
						$application = new $controller($param1, $param2);
					}
					break;
				default:
					echo "Error 404";
			}
			
		}else{
			echo "Error 404<br />";  //ili vec neki error sada sam stavila samo ovo
		}
	}
}
?>