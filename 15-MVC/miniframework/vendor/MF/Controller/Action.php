<?php

namespace MF\Controller;

abstract class Action{

	protected $view;


	public function __construct(){
		$this->view = new \stdClass();
	}

	protected function render($view, $layout) {
		$this->view->page = $view;

		if(file_exists( "../App/Views/".$layout.".phtml" ) ){

			//caso a página requisitada exista, ela será exibida
			require_once "../App/Views/".$layout.".phtml";

		}else{

			$this->content();//renderiza apenas a view padrão caso a página requisitada não exixta

		}

		
	}

	protected function content(){//Lógica de renderização 

		$classAtual = get_class($this); // pega  todo o diretório atual, podemos verificar com: echo get_class($this);


		$classAtual = str_replace('App\\Controllers\\', '', $classAtual); //Pega apenas o nome da classe (última palavra n odiretório). Podemos verificar fazendo: echo str_replace('App\\Controllers\\', '', $classAtual);

		//echo str_replace('Controller', '', $classAtual); //Nesse momento irá ser exibido somento o nome do diretório relativo às views do Controller


		$classAtual =  strtolower( str_replace('Controller', '', $classAtual) );

		//echo $classAtual;//Ver resultado final

		require_once "../App/Views/".$classAtual."/".$this->view->page.".phtml";

	}
}	


?>