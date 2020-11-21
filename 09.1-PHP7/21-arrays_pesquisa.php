<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php
		//FUNÇÕES NATIVAS DO PHP PARA PESQUISA EM ARRAYS

		//in_array() -> retorona true(1) ou false(vazio) para a existência do que está sendo procurado

		//array_search() -> retorna o índice do valor pesquisado, caso ele exista. se não existe o valor, retorna null		

		$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

		echo'<pre>';
			print_r($lista_frutas);
		echo'</pre>';

		$existe = in_array('Uva', $lista_frutas);
		//true -> texto = 
		//false -> text0 = vazio
		if($existe){
			echo 'Sim, o valor pesquisado existe no array';
		}else{
			echo 'Não, o valor pesquisado não existe no array';
		}
		echo '<hr>';





		$existe2 = array_search('Morango', $lista_frutas);

		if($existe2 != null){
			echo 'Sim, o valor pesquisado existe no array';
		}else{
			echo 'Não, o valor pesquisado não existe no array';
		}

/*****************************************************/
	
	echo '<br><br>';
	echo '<hr>';
	$lista_coisas = [
		'frutas' => $lista_frutas,
		'pessoas' => ['João', 'Maria']
	];

		echo'<pre>';
			print_r($lista_coisas);
		echo'</pre>';

		echo in_array('Uva', $lista_coisas['frutas']);





		?>

	</body>
</html>