<?php

namespace App\core;


class Router
{



	public $routes = [
		'GET' => [],

		'POST' => []
	];


	public static function load($file)

	{

		$router = new static;

		require $file;

		return $router;


	}

	// public function define($routes){
	// 	$this->routes = $routes;
	// }

	public function get($uri, $controller){
		$this->routes['GET'][$uri] = $controller;
	}

	public function post($uri, $controller){
		$this->routes['POST'][$uri] = $controller;
	}

	public function direct($uri, $requestType){


		// die(var_dump($uri, $requestType));

		if(array_key_exists($uri, $this->routes[$requestType])){
			// return $this->routes[$requestType][$uri];


			return $this->callAction(

				...explode('@', $this->routes[$requestType][$uri])

				);
		}
		// var_dump($_POST);

		throw new Exception('No route define for this URL');
	}
	protected function callAction($controller, $action){
		
		$controller = "App\\Controllers\\{$controller}";

		$controller = new $controller;

		if (! method_exists($controller, $action) ){

			throw new Exception(

					"{$controller} does not respond to the {$action} action."

				);
		}

		return $controller -> $action();

	}
}