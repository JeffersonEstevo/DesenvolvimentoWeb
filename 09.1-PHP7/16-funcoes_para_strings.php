<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>
		<?php
			//FUNÇÕES NATIVAS PARA MANIPULAR STRINGS EM PHP
		
		/*Transforma todos os caracteres da string em minúsculos ->  strtolower($texto)
		*/

		/*Transforma todos os caracteres da string em maiúsculos ->  strtoupper($texto)
		*/

		/*Transforma o primeiro caractere da string em maiúsculo ->  ucfirst($texto)
		*/

		/*Conta a quantidade de caracteres de uma string -> strlen($texto)
		*/

		/*Substitui uma cadeia de caracteres para outra dentro de uma string-> strlen($texto) ->  str_replace(<procura por>, <substitui por>, $texto)
		*/

		/*Retorna parte de uma string -> substr($texto, <posição inicial>, <qtde caracteres>)
		*/

		$texto = 'Curso Completo de PHP'.'<br>';

		echo $texto;
		echo strtolower($texto).'<hr>';
		
		echo $texto;	
		echo strtoupper($texto).'<hr>';

		echo $texto;
		echo ucfirst($texto).'<hr>';

		echo $texto;
		echo strlen($texto).'<hr>';

		echo $texto;
		echo str_replace('PHP', 'JavaScript', $texto).'<hr>';

		echo $texto;
		echo substr($texto, 6, 8).'<hr>';

		echo $texto;
		echo substr($texto, 0, 14) . ' ...' . '<hr>' ;




		?>

	</body>
</html>