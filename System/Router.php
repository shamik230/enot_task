<?php

namespace System;
use Exception;

class Router {
	protected string $baseUrl;
	protected int $baseShift;
	protected array $routes = [];

	public function __construct(string $baseUrl = ''){
		$this->baseUrl = $baseUrl;
		$this->baseShift = strlen($this->baseUrl);
	}

	public function addRoute(string $regExp, string $name, string $method = 'index', array $map = []) : void{
		$this->routes[] = [
			'path' => $regExp,
			'c' => $name,
			'm' => $method,
			'paramsMap' => $map
		];
	}

	public function resolvePath(string $url) : array{
		$relativeUrl = substr($url, $this->baseShift);
		$route = $this->findPath($relativeUrl);
		$controller = new $route['c']();
		return [
			'controller' => $controller,
			'method' => $route['m']
		];
	}

	protected function findPath(string $url) : array{
		$activeRoute = null;

		foreach($this->routes as $route){
			$matches = [];

			if(preg_match($route['path'], $url, $matches)){
				$route['params'] = [];

				foreach($route['paramsMap'] as $i => $key){
					if(isset($matches[$i])){
						$route['params'][$key] = $matches[$i];
					}
				}
				
				$activeRoute = $route;
			}
		}

		if($activeRoute === null){
			throw new Exception('Route not found');
		}

		return $activeRoute;	
	}
}