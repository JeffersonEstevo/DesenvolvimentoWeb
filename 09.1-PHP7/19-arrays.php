<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php
		
		//sequenciais (numéricos)
		$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');

		//podemos iniciar o array assim também:
		//$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

		//inclusão de indíce no array dinamicamente
		$lista_frutas[] = 'Abacate';

		//para debugar arrays podemos usar var_dump($array);  ou print_r($array);
		var_dump($lista_frutas);
		echo'<hr>';
		print_r($lista_frutas);
		echo'<hr>';

		//para imprimir os arrays formatados utilizamos a tag <pre></pre>
		echo '<pre>';
			var_dump($lista_frutas);
		echo'</pre>';
		echo '<hr>';
		echo '<pre>';
			print_r($lista_frutas);
		echo'</pre>';
		echo '<hr>';

		/*****************/
		echo $lista_frutas[4];
		echo '<hr><hr>';
/***************************************************/

		//associativos	(índice => valor)
		$frutas = array(
		'a' => 'Banana', 
		'b' => 'Maçã', 
		'c' => 'Morango', 
		'd' => 'Uva');

		//podemos iniciar o array assim também:
		/*$frutas = [
		'a' => 'Banana', 
		'b' => 'Maçã', 
		'c' => 'Morango', 
		'd' => 'Uva'];	
		*/

		//inserindo item no array associativo
		$frutas['w'] = 'Abacaxi';

		echo '<pre>';
			var_dump($frutas);
		echo'</pre>';

		
		echo $frutas['w'];
		
		echo '<br>';

		echo $frutas['c'];


		?>

	</body>
</html>