<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>
		<?php
		//FUNÇÕES NATIVAS PARA MANIPULAR DATAS

		/*
		date(fomrato) => Recuperar a data atual
		*/


		/*
		date_default_timezone_get(timezone) => Recuperar a timezone default da aplicação
		*/

		/*
		date_default_timezone_set(timezone) => Atualizar o timezone default da aplicação
		*/

		/*
		strtotime(data) = > Transformar datas textuais em segundos
		*/


		echo date('d');
		echo '<br>';

		echo date('D');
		echo '<br>';

		echo date('j');
		echo '<br>';


		// dia/mês/ano horas:minutos
		// a partir o sistema operacional
		echo date('d/m/Y H:i');
		echo '<br>';


		//para saber o timezone da aplicação
		echo date_default_timezone_get();
		echo '<br>';



		//para setar o timezone forçadamente caso esteja diferente
		date_default_timezone_set('America/Sao_Paulo');
		echo date('d/m/Y H:i');
		echo '<br>';
		echo '<hr>';

/****************************************************/

	$data_inicial = '2018-04-24';
	$data_final =  '2018-05-15';

	//timestamp
	//01/01/1970  --  2018-04-24

	$time_inicial = strtotime($data_inicial);
	$time_final = strtotime($data_final);


	echo $data_inicial . ' - ' . $time_inicial;
	echo '<br>';
	echo $data_final . ' - ' . $time_final;


	$diferenca_times = $time_final - $time_inicial; 

	//se o resultado for absoluto podemos usar  a função abs()
	//$diferenca_times = abs($time_inicial - $time_final); 



	echo '<br>';
	echo 'A diferença de segundos entre a data inicial e a data final é: ' . $diferenca_times;

	$segundos_existem_dia = 24 * 60 * 60;

	echo '<br>';
	echo 'Um dia possui ' . $segundos_existem_dia .' segundos';

	echo '<br>';

	$diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;

	echo 'A diferença em dias é: ' . $diferenca_de_dias_entre_as_datas. ' dias';

		?>

	</body>
</html>