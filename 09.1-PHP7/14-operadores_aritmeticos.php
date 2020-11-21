<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>
		<?php
		
		$num1 = 13;
		$num2 = 4;

		echo "A soma entre $num1 e $num2 é: " . ($num1 + $num2);
		echo "<br>";
		echo "A subtração entre $num1 e $num2 é: " . ($num1 - $num2);
		echo "<br>";
		echo "A multiplicação entre $num1 e $num2 é: " . ($num1 * $num2);
		echo "<br>";
		echo "A divisão entre $num1 e $num2 é: " . ($num1 / $num2);
		echo "<br>";
		echo "O módulo da divisão entre $num1 e $num2 é: " . ($num1 % $num2);
		echo "<br>";
		echo "<br>";

		$x = 10;

		//operadores de atribuicao, já com aritméticos: +=, -=, *=, /=, %=
		//EX.: operador +=
		$x += 5;

		echo $x . " Com operador +=";
		echo "<br>";
		echo "<br>";

		//operadores de incremento/decremento ++$a, $a++, --$a, $a--
		//Ex.:

		echo "<h3>Pós-incremento: </h3>";
		$a = 7;

		echo "O valor contido em a é: $a <br>";
		echo 'O valor contido em a após o incremento é: ' . $a++ . '<br>';
		echo "O valor atualizado de a é: $a <br>";

		echo "<h3>Pré-incremento: </h3>";
		$a = 7;

		echo "O valor contido em a é: $a <br>";
		echo 'O valor contido em a, pré-incremento é: ' . ++$a . '<br>';
		echo "O valor atualizado de a é: $a <br>";

		echo "<h3>Pós-decremento: </h3>";
		$a = 7;

		echo "O valor contido em a é: $a <br>";
		echo 'O valor contido em a após o decremento é: ' . $a-- . '<br>';
		echo "O valor atualizado de a é: $a <br>";

		echo "<h3>Pré-decremento: </h3>";
		$a = 7;

		echo "O valor contido em a é: $a <br>";
		echo 'O valor contido em a, pré-decremento é: ' . --$a . '<br>';
		echo "O valor atualizado de a é: $a <br>";


		?>

	</body>
</html>