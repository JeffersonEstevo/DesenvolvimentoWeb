<?php
namespace MyApp\controllers;

Class Home{

	//OBS.: Onde era $container , passou a ser $view, depois que fizemos a instância da Classe Home. E retiramos esse trabalho do próprio Slim

	//protected $container;
	protected $view;

	public function __construct($view){//$container foi trocado por $view, quando passamos a instanciar a Classe Home em index.php linha 250. Para não deixarmos o Slim se encarregar de instaniar a Classe por si só
		//$this->container = $container;
		$this->view = $view;
	}

	public function index($request, $response){
		
		//$view = $this->container->get('View');
		var_dump($this->view); //impressão do Objeto request
		//var_dump($this->container);  //impressão de todo o container
		return $response->write('Teste index');
	}
}



?>