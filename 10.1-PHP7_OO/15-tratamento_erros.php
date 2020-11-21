<?php
	
	//tenha uma lógica
	try{
		//necessita finalizar com catch ou fnially.

		//tenha uma lógica onde possa ocorrer um potencial erro (exceção).
		echo '<h3> *** try *** </h3>';

		//$sql = 'select * from clientes';
		//mysql_query($sql); //Erro forçado

		if(!file_exists('require_arquivo_a.php')){
			
			//throw new Exception('O arquivo em questão deveria estar disponível as ' . date('d/m/Y H:i:s') .' horas, mas não estava. ');

			throw new Error('O arquivo em questão deveria estar disponível as ' . date('d/m/Y H:i:s') .' horas, mas não estava. ');
			
		}


	}catch(Error $e){ 

		echo '<h3> *** catch Error *** </h3>';
		echo '<p style="color: red">' .$e. '</p>';
		//poderiamos armazenar o ero em banco de dados

	}catch(Exception $e){
	
		echo '<h3> *** catch Exception *** </h3>';
		echo '<p style="color: red">' .$e. '</p>';

	}finally{
		//quando o catch está implementado o finally é opcional
		echo '<h3> *** finally *** </h3>';

	}






/*	

	//tenha uma lógica
	try{
		//tenha uma lógica onde possa ocorrer um potencial erro (exceção)
	}
*/

?>