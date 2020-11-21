<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php
			
		//false (true/false) - tipo variável boolean

		//null e empty - valores especiais

		$funcionario1 = null;

		$funcionario2 = '';

		$funcionario3 = false;

//valores null
		if(is_null($funcionario1)){
			echo 'Sim, a variável [null] é null';
		}else{
			echo 'Não, a variável [null] não é null';
		}

		echo '<br>';

		if(is_null($funcionario2)){
			echo 'Sim, a variável [empty] é null';
		}else{
			echo 'Não, a variável [empty] não é null';
		}
/*************************************************/
		echo'<hr>';

//valores empty
		if(empty($funcionario1)){
			echo 'Sim, a variável [null] é empty';
		}else{
			echo 'Não, a variável [null] não é empty';
		}

		echo '<br>';

		if(empty($funcionario2)){
			echo 'Sim, a variável [empty] é empty';
		}else{
			echo 'Não, a variável [empty] não é empty';
		}

/**************************************************/
	echo'<hr>';

//valores false
		if(is_null($funcionario3)){
			echo 'Sim, a variável [false] é null';
		}else{
			echo 'Não, a variável [false] não é null';
		}

		echo '<br>';

		if(empty($funcionario3)){
			echo 'Sim, a variável [false] é empty';
		}else{
			echo 'Não, a variável [fase] não é empty';
		}

		?>


	</body>
</html>