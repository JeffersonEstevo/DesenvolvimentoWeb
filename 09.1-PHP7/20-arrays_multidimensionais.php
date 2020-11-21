<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php
		
		$lista_coisas = [];

		/* Atenção! pois nesse caso seria feita uma sobreposição de Maçã para Banana, por causa do índice repetido
		NÃO PODEMOS CRIAR ASSIM

		$lista_coisas['frutas'] = 'Banana';
		$lista_coisas['frutas'] = 'Maçã';
		*/


		/*Dessa forma criamos o array interno padrão com índices numércios de 0 -> n

		$lista_coisas['frutas'] = array'Banana', 'Maçã', 'Morango', 'Uva');
		*/

		//forçando a criação do array interno com índices de 1 -> n
		$lista_coisas['frutas'] = array(1 => 'Banana', 2 => 'Maçã', 3 => 'Morango', 4 => 'Uva');


		$lista_coisas['pessoas'] = [1 => 'João', 2 =>  'José', 3 => 'Maria'];


		echo '<pre>';
		print_r($lista_coisas);
		echo '</pre>';

		echo '<hr>';

		//para recuperar o valor de Morango:
		echo $lista_coisas['frutas'][3];

		echo '<hr>';
		
		//para recuperar o valor de José:
		echo $lista_coisas['pessoas'][2];


		?>

	</body>
</html>