<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php
			//string
			$nome = 'Jefferson Estevo';

			//int
			$idade = 27;

			//float
			$peso = 67.5; 

			//boolean true = 1 / false = vazio
			$fumante = true;
		?>


		<h1>Ficha cadastral</h1>
		<br>
		<p>Nome: <?= $nome . ' Feitosa' ?></p>
		<p>Idade: <?= $idade ?></p>
		<p>Peso: <?= $peso ?></p>
		<p>Fumante: <?= $fumante ?></p>

	</body>
</html>