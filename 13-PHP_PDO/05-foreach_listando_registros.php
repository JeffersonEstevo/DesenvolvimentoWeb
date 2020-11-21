<?php

    $dsn = 'mysql:host=localhost;dbname=bd';
    $usuario = 'root';
    $senha = '';


    try{

    	$conexao = new PDO($dsn, $usuario , $senha);

    	$query = 'select * from tb_usuarios';

        //$stmt = $conexao->query($query);

        foreach ($conexao->query($query) as $chave => $valor) {
           print_r($valor);
           echo '<hr>';
        }



      //  $lista_usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC); 

        //echo'<pre>';
        //print_r($lista_usuarios);
        //echo'</pre>';
    /*	
        foreach ($lista_usuarios as $key => $value) {
                echo ($value['nome']);
                echo'<hr>';
        }
    */

    }catch(PDOException $e){
    	echo 'Erro: ' .$e->getCode(). ' Mensagem: ' .$e->getMessage();
    	//poderiamos tratar registro erro

    }

   ?>