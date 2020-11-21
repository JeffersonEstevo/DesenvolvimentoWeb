<?php

namespace App\Controllers;

//os recursos do miframework 
use MF\Controller\Action;
use MF\Model\Container;

//os models
use App\Models\Produto;
use App\Models\Info;



class IndexController extends Action {

	public function index(){

		//$this->view->dados = array('Sofá', 'Cadeira', 'Cama');

		$produto = Container::getModel('Produto');

		//podemos agora aqui, criar métodos para manipular dados no banco de dados:
		$produtos = $produto->getProdutos();

		//caractere @ serve para ignorar mensagens de warning caso apareçam no navegador
		@$this->view->dados = $produtos;


		$this->render('index', 'layout1');
	}

	public function sobreNos(){

		$info = Container::getModel('Info');

		$informacoes = $info->getInfo();

		$this->view->dados =  $informacoes;
		$this->render('sobreNos', 'layout1');
	}

}


?>