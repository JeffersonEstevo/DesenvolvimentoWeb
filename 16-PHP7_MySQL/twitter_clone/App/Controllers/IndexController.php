<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action {

	public function index() {

		//caso autenticação dê errado (lá em AuthControler):
		$this->view->login = isset($_GET['login']) ? $_GET['login'] : '';

		$this->render('index');
	}

	public function inscreverse() {

		$this->view->usuario = array(
				'nome' => '',
				'email' => '',
				'senha' => '',
			);

		$this->view->erroCadastro = false;

		$this->render('inscreverse');
	}

	public function registrar() {
/*
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
*/		
		//receber os dados do formulário 
		//instância de novo usuário	
		$usuario = Container::getModel('Usuario');

		$usuario->__set('nome', $_POST['nome'] );
		$usuario->__set('email', $_POST['email'] );
		$usuario->__set('senha', md5($_POST['senha'] ) );

/*
		echo '<pre>';
		print_r($usuario);
		echo '</pre>';
*/		

		if($usuario->validarCadastro() && count($usuario->getUsuarioPorEmail()) == 0 ){
/*
			echo '<pre>';
			print_r( count( $usuario->getUsuarioPorEmail() ) );
			echo '</pre>';
*/
				$usuario->salvar();

				$this->render('cadastro');
			
		}else{

			//fazer com que os dados digitados no formulário não sejam apagados em caso de erro
			$this->view->usuario = array(
				'nome' => $_POST['nome'],
				'email' => $_POST['email'],
				'senha' => $_POST['senha'],
			);

			//view está disponível, pois extendemos Action
			$this->view->erroCadastro = true;

			$this->render('inscreverse');

		}

	}
}


?>