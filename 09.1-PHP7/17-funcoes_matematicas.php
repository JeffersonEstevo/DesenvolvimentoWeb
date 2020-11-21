<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>
		<?php
			//FUNÇÕES NATIVAS PARA TAREFAS MATEMÁTICAS EM PHP

			/*
			ceil($numero) ->  Arredonda o valor para cima
			*/

			/*
			floor($numero) ->  Arredonda o valor para baixo
			*/

			/*
			round($numero) ->  Arredonda o valor com base nas casas decimais
			*/

			/*
			sqrt($numero) ->  Retorna a raiz quadrada 
			*/


			/*rand() - Gera um número aleatório 0 até randmax(maior valor que o sistema operacional suporta)
				getrandmax() -> retorna o valor máximo que o sistema operacional suporta

			*/


			$num = 9.9999;
			echo $num.'<br>';

			echo 'número arredondado para cima: '. ceil($num).'<br>';

			echo 'número arredondado para baixo: '.floor($num).'<br>';

			echo 'número arredondado pelo primeiro valor significativo após a vírgula: '.round($num).'<br>';

			echo 'raíz quadrada do número: '. sqrt($num).'<br>';

			echo 'valor aleatório: '.rand().' => O sistema operacional suporta até o valor: ' . getrandmax() . '<br>';

			echo 'valor aleatório entre [10 - 20]: '.rand(10, 20).'<br>';


			




		?>

	</body>
</html>