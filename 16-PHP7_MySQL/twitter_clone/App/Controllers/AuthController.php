<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class AuthController extends Action {

	public function autenticar(){
		/*
		echo 'chegamos até aqui';

		echo'<pre>';
		print_r($_POST);
		echo'</pre>';
		*/

		$usuario = Container::getModel('Usuario');

		$usuario->__set('email', $_POST['email']);
		$usuario->__set('senha', md5($_POST['senha']) );

/*usuário ainda não possui id nem nome atribuído:
		echo'<pre>';
		print_r($usuario);
		echo'</pre>';
*/

		$retorno = $usuario->autenticar();
		
		/*
		echo'<pre>';
		print_r($retorno);
		echo'</pre>';
		*/

/*usuário já recebeu id e nome preenchidos se o usuário for válido:
		echo'<pre>';
		print_r($usuario);
		echo'</pre>';
*/		

		if($usuario->__get('id') != '' && $usuario->__get('nome') != ''){

			session_start();

			$_SESSION['id'] = $usuario->__get('id');
			$_SESSION['nome'] = $usuario->__get('nome');

			header('Location: /timeline');



		}else{
			//echo 'Erro na autenticação.';
			header('Location: /?login=erro');
		}
	}

	public function sair(){

		session_start();
		session_destroy();
		header('Location: /');
	}
}


?>