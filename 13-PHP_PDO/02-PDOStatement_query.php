<?php

    $dsn = 'mysql:host=localhost;dbname=db';
    $usuario = 'root';
    $senha = '';


    try{

    	$conexao = new PDO($dsn, $usuario , $senha);

    	$query = 'select * from tb_usuarios';

        $stmt = $conexao->query($query);
        //fetchAll() retorna todos os registros recuperados da consulta
        $lista = $stmt->fetchAll();

        echo'<pre>';
        print_r($lista);
        echo'</pre>';
    	

        //exemplo de acesso
        //o fetchAll retorna os dados tanto com o nome da tabela no banco de dados como seu respectivo índice
        echo $lista[0]['nome'];

    }catch(PDOException $e){
    	echo 'Erro: ' .$e->getCode(). ' Mensagem: ' .$e->getMessage();
    	//poderiamos tratar registro erro

    }

   ?>