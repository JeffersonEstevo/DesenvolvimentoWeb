<?php

	session_start();//necessário quando se inicia uma sessão para ter acesso à super global

/*
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';


	//remover índices do array de sessão
	//unset() remove indíces de qualquer array (podemos escolher quais índices remover). Tbm remove um índice apenas se ele existir, não dá erro, caso ele não exista.
	
	unset($_SESSION['x']);

	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';

	//destruir a variável de sessão
	//session_destroy() destrói a sessão por completa, removendo todos os índices da super global


	session_destroy();//sessão será totalmente destruída
	//forçar um redirecionamento

	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>';
*/
	session_destroy();
	header('Location: index.php');
?>