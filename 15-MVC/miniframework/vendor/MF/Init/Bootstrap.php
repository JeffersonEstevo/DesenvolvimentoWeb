<?php

namespace MF\Init;


//Classe abstrata é uma classe como as outras, porém que não pode ser instanciada. Ela pode somente ser herdada.
abstract class Bootstrap{
	private $routes;

	//método abstrato initRoute
	//Quando herdado em uma classe filha deverá ser implementado na classe filha
	abstract protected function initRoutes();

	public function __construct(){
			$this->initRoutes();
			$this->run($this->getUrl());
	}

	public function getRoutes(){
			return $this->routes;
	}

	public function setRoutes(array $routes){
		$this->routes = $routes;
	}

	protected function run($url){
			//echo '*******'.$url.'*********';
			foreach ($this->getRoutes() as $key => $route) {
				//print_r($route);
				if($url == $route['route']){
					$class = "App\\Controllers\\".ucfirst($route['controller']); // ucfirst coloca a primeira letra em uppercase para que o nome do atributo fique como o nome da classe IndexXontroller, antes estava como indexController

					$controller = new $class;	//instância de uma classe onde o nome e namespace foram iformados dinamicamente
					//é análogo a fazermos: new App\Controllers\IndexController;

					$action = $route['action'];

					$controller->$action(); // os parênteses servem para de fato executar a ação

				}
			}
		}


		protected function getUrl(){
			return parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );
		}

}


?>