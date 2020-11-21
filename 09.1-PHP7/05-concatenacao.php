<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php

		$nome = 'Jefferson';
		$cor = 'amarelo';
		$idade = 15;
		$gosto = ' jogar futsal';

		//operador
			
		echo 'Olá '. $nome .', vi que sua cor preferida é ' . $cor .', estou vendo também que vocÊ possui '. $idade .' anos e que gosta de '. $gosto .'.';

		//aspas duplas "" para concatenar
		echo '<br><br>';

		echo "Olá $nome , vi que sua cor preferida é $cor , estou vendo também que vocÊ possui $idade anos e que gosta de $gosto";
		?>

	</body>
</html>