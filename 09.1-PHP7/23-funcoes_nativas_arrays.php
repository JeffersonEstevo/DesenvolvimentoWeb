<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php
		//FUNÇÕES NATIVAS PARA MANIPULAÇÃO DE ARRAYS

		/*is_array(array)
		 => verifica se o parâmetro é um array
		*/

		/*array_keys(array)
		 => Retorna todas as chaves de um array
		*/

		/*sort(array)
		 => Ordena um array e reajusta seus índices
		*/

		 /*asort(array)
		 => Ordena um array preservando seus índices
		*/

		 /*count(array)
		 => Conta a quantidade de elementos de um array
		*/

		 /*array_merge(array)
		 => Funde um ou mias arrays
		*/

		 /*explode(array)
		 => Divide uma string baseada em um delimitador
		*/

		 /*implode(array)
		 => Junta elementos de um array em uma string
		*/


		 $array = array();
		 $retorno = is_array($array);

		 if($retorno){
		 	echo 'Sim, é um array';
		 }else{
		 	echo 'Não, não é um array';	
		 }

/*****************************************************/
		echo'<hr>';

		 $array2 = [1 => 'a', 7 => 'b', 18 => 'c'];
		 echo '<pre>';
		 	print_r($array2);
		 echo '</pre>';

		 $chaves_array = array_keys($array2);
		  echo '<pre>';
		 	print_r($chaves_array);
		  echo '</pre>';
/***************************************************/
		echo'<hr>';

		//sort => ORDENA MAS ATRIBUI NOVOS ÍNDICES PARA OS ELEMENTOS

	$array3 = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook');

		  echo '<pre>';
		 	print_r($array3);
		  echo '</pre>';

		  sort($array3); // true ou false para tentatva de ordenação do array

		  echo '<pre>';
		 	print_r($array3);
		  echo '</pre>';
/**************************************************/
		echo'<hr>';

		//ssort => ORDENA MASPRESERVA OS ÍNDICES DOS ELEMENTOS

		$array4 = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook');

		  echo '<pre>';
		 	print_r($array4);
		  echo '</pre>';

		  asort($array4); // true ou false para tentatva de ordenação do array

		  echo '<pre>';
		 	print_r($array4);
		  echo '</pre>';
/**************************************************/
		echo'<hr>';
		

		$array5 = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook');

		  echo '<pre>';
		 	print_r($array5);
		 	echo 'Nº de elementos: '. count($array5);
		  echo '</pre>';
/***************************************************/
		echo'<hr>';

		$vetor1 = ['osx', 'windows'];
		$vetor2 = array('linux');
		$vetor3 = ['solaris'];

		$novo_vetor = array_merge($vetor1, $vetor2, $vetor3);

		echo '<pre>';
		 	print_r($novo_vetor);
		echo '</pre>';
/*************************************************/
		echo'<hr>';

		$string = '26/04/2018';
		$array_retorno =  explode('/', $string);

		 echo '<pre>';
		  	echo $string;
		  	echo'<br>';
		 	print_r($array_retorno);
		 	echo'<br>';
		 	echo $array_retorno[2]. '-' .$array_retorno[1]. '-' .$array_retorno[0];
		  echo '</pre>';
/*************************************************/
		echo'<hr>';	

		$x = ['a', 'b', 'x', 'y'];
		$string_retorno = implode('=>', $x);
		echo $string_retorno;



		?>
	

	</body>
</html>