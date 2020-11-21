<?php

	session_start();

	//estamos trabalhando na montagem do texto.
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);

	//usando a função implode('#', $_POST); também daria para fazer o exemplo, desafio feito nesta aula.

	$texto = $_SESSION['id'] . '#' . $titulo . '#' .  $categoria . '#' . $descricao . PHP_EOL;
	//PHP_EOL constante para quebra de linha


	$arquivo = fopen('../../app_hekp_desk/arquivo.hd', 'a');// 'a' abre o arquivo para escrita

	fwrite($arquivo, $texto);//escrever no arquivo o texto capturado

	fclose($arquivo);// fechar o arquivo

	//echo $texto;

	header('Location: abrir_chamado.php');
	


?>