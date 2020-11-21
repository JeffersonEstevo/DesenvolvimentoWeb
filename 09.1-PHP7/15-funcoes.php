<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>
		<?php
			//função void, pois não possui retorno
			function exibirBoasVindas(){
				echo "Olá, seja bem-vindo(a) ao PHP! <br>";
			}

			exibirBoasVindas();
			exibirBoasVindas();

			//função com retorno (return)
			function calcularAreaTerreno($largura, $comprimento){
				//poderiamos omitir a terceira variável auxiliar ($area)
				$area = $largura * $comprimento;
				 return $area;
			}	

			//echo calcularAreaTerreno(15, 25);

			//ou ainda podemos passar o retorno da função para uma variável

			$resultado = calcularAreaTerreno(15, 25);
			echo $resultado;
		?>

	</body>
</html>