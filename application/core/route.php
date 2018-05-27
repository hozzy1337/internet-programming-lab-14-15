<?php
class Route
{
	static function start()
	{
		// default controller-action
		$controller_name = 'Main';
		$action_name = 'index';		
		$routes = explode('/', $_SERVER['REQUEST_URI']);
		
		// get controller name
		if ( !empty($routes[1]) )
		{	
			$controller_name = $routes[1];
		}		
		// get action name
		if ( !empty($routes[2]) )
		{
			$action_name = $routes[2];
		}
		// prefixes
		$model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.$controller_name;
		$action_name = 'action_'.$action_name;
		// add models file
		$model_file = strtolower($model_name).'.php';
		$model_path = "application/models/".$model_file;
		if(file_exists($model_path))
		{
			include "application/models/".$model_file;
		}
		// add controller file
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "application/controllers/".$controller_file;
		if(file_exists($controller_path))
		{
			include "application/controllers/".$controller_file;
		}
		else
		{
			//if path is wrong - redirect to 'not found' page
			 echo '<script>window.location.href = "http://php-lab-4:8080/404";</script>';
		}		
		// create controller-action
		$controller = new $controller_name;
		$action = $action_name;
		
		if(method_exists($controller, $action))
		{
			// call action
			$controller->$action();
		}
		else
		{
			 echo '<script>window.location.href = "http://php-lab-4:8080/404";</script>';
		}
	
	}   
}
