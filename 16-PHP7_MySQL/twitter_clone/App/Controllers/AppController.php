<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class AppController extends Action {

	public function timeline(){

		session_start();

/*
			echo 'Chegamos até aqui';

			echo'<pre>';
			print_r($_SESSION);
			echo'</pre>';
*/	
			$this->validaAutenticacao();

			//recuperação dos tweets:
			$tweet = Container::getModel('Tweet');

			//setando id de usuário para que ele veja apenas os tweets relacionados a ele próprio (isso é feito na query lá eem Tweet.php)
			$tweet->__set('id_usuario', $_SESSION['id']); //id do usuário autenticado
/*
			$tweets = $tweet->getAll();

			echo'<pre>';
			print_r($tweets);
			echo'</pre>';
			
			//criando índice tweets dinâmico
			$this->view->tweets = $tweets; 	

*/


			//variáveis de paginação de tweets:
			$total_registros_pagina = 10; //limit
			//$deslocamento = 0;  //offset
			

			//caso a gente queira 5 tweets por página basta alterar o valor da variável acima : $total_registros_pagina = 5
			//assim, podemos mostrar quantos conteúdos quisermos por página, apenas fazendo essa modificação e os links para as páginas são criados dinamicamente ao final  d apágina

			$pagina = 1;
			//(1 - 1)* 10



			$pagina = isset($_GET['pagina'])  ? $_GET['pagina'] : 1 ; //caso acessemos diretamente na url timeline a página será definida como 1, porque não existe nenhum índice definido na url pela superglobal $_GET
			$deslocamento = ($pagina - 1) * $total_registros_pagina; // deslocamento dinâmico de página a cada 10 tweets



			//passando para página 2:
			//$total_registros_pagina = 10; //limit
			//$deslocamento = 10; //offset
			//$pagina = 2;
			//(2 - 1)* 10

			//passando para página 3:
			//$total_registros_pagina = 10; //limit
			//$deslocamento = 20; //offset
			//$pagina = 3;
			//(3 - 1)* 10

			//$tweets = $tweet->getAll();
		//	echo "<br><br><br>Página: $pagina Total de registros por página: $total_registros_pagina | Deslocamento: $deslocamento";
			$tweets = $tweet->getPorPagina($total_registros_pagina, $deslocamento);
			$total_tweets = $tweet->getTotalRegistros();
			//print_r($total_tweets['total']);
			$this->view->total_de_paginas = ceil($total_tweets['total'] / $total_registros_pagina); 

			$this->view->pagina_ativa = $pagina;


			
			//criando índice tweets dinâmico
			$this->view->tweets = $tweets; 	


			//instância do modelo usuário, para mostrar nº tweets, quantos seguindores e quantos estou seguindo:
			$usuario = Container::getModel('Usuario');
			$usuario->__set('id', $_SESSION['id']);

			$this->view->info_usuario = $usuario->getInfoUsuario();
			$this->view->total_tweets = $usuario->getTotalTweets();
			$this->view->total_seguindo = $usuario->getTotalSeguindo();
			$this->view->total_seguidores = $usuario->getTotalSeguidores();



			$this->render('timeline');
	}	


	public function tweet(){

/*		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
*/			
			$this->validaAutenticacao();

			$tweet = Container::getModel('Tweet');

			//atribuindo valor $_POST ao tweet:
			$tweet->__set('tweet', $_POST['tweet']);
			$tweet->__set('id_usuario', $_SESSION['id']);

			$tweet->salvar();

			header('Location: /timeline');
	}


	public function validaAutenticacao(){

		session_start();

		//protegendo acesso direto:
		if(!isset($_SESSION['id']) || $_SESSION['id'] == '' || !isset($_SESSION['nome']) || $_SESSION['nome'] == ''){

			header('Location: /?login=erro');
		}

	}

	public function quemSeguir(){

		$this->validaAutenticacao();

/*para ter certeza de quem está logado
		echo '<br><br><br><br><pre>';
		print_r($_SESSION);
		echo '</pre>';
*/

/* $_GET -> recebe o nome digitado no input da página quemSeguir.phtml
		echo '<br><br><br><br><br><br><br><br>';
		echo '<pre>';
		print_r($_GET);
		echo '</pre>';
*/
		//echo '<br><br><br><br><br><br><br><br>';
		
		$pesquisarPor = isset($_GET['pesquisarPor']) ? $_GET['pesquisarPor'] : '';

		//echo 'pesquisando por:' .$pesquisarPor;

		$usuarios = array();

		if($pesquisarPor != ''){

			//fazendo isntância do modelo Usuário
			$usuario = Container::getModel('Usuario');
			$usuario->__set('nome', $pesquisarPor );
			$usuario->__set('id', $_SESSION['id']);// usado para fazer com que um usuário não siga ele mesmo
			$usuarios = $usuario->getAll();

		/*	
			echo '<pre>';   
			print_r($usuarios);
			echo '</pre>';
		*/

		}

		$this->view->usuarios = $usuarios;
		
		$this->render('quemSeguir');
	}


	public function acao(){

		$this->validaAutenticacao();

		/*	echo '<pre>';   
			print_r($_GET);
			echo '</pre>';
		*/

		$acao = isset($_GET['acao']) ? $_GET['acao'] : '';
		$id_usuario_seguindo = isset($_GET['id_usuario']) ? $_GET['id_usuario'] : '';  //id do usuario que a pessoa quer seguir


		$usuario = Container::getModel('Usuario');
		$usuario->__set('id', $_SESSION['id']);

		if($acao == 'seguir'){

			$usuario->seguirUsuario($id_usuario_seguindo);

		}else if($acao == 'deixar_de_seguir'){

			$usuario->deixarSeguirUsuario($id_usuario_seguindo);
		}

		header('Location: /quem_seguir');
	}



}


 ?>