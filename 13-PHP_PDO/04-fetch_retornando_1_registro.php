<?php

    $dsn = 'mysql:host=localhost;dbname=bd';
    $usuario = 'root';
    $senha = '';


    try{

    	$conexao = new PDO($dsn, $usuario , $senha);

    	$query = 'select * from tb_usuarios where id = 6';

        $stmt = $conexao->query($query);
        //fetchAll() retorna todos os registros recuperados da consulta



        $usuario = $stmt->fetch(PDO::FETCH_OBJ); //para transformar em Array de Objetos

        echo'<pre>';
        print_r($usuario);
        echo'</pre>';
    	
        echo $usuario->nome;

    }catch(PDOException $e){
    	echo 'Erro: ' .$e->getCode(). ' Mensagem: ' .$e->getMessage();
    	//poderiamos tratar registro erro

    }

   ?>