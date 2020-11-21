<?php

    $dsn = 'mysql:host=localhost;dbname=db';
    $usuario = 'root';
    $senha = '';


    try{

    	$conexao = new PDO($dsn, $usuario , $senha);
/*
    	$query = '
    		create table tb_usuarios(
    			id int not null primary key auto_increment,
    			nome varchar(50) not null,
    			email varchar(100) not null,
    			senha varchar(32) not null


    		)
    	';

    	$retorno = $conexao->exec($query);
    	//exec() retorna numero de linhas modificadas ou afetadas, nesse caso aqui como é DDL retorna = 0
    	echo $retorno;
*/
    	$query = '
    		insert into tb_usuarios(
    			nome, email, senha
    		)values(
    			"Jefferson Estevo", "jefferson@teste.com", "123456"
    		)

    	';

    	$retorno = $conexao->exec($query);
    	echo $retorno;



    }catch(PDOException $e){
    	echo 'Erro: ' .$e->getCode(). ' Mensagem: ' .$e->getMessage();
    	//poderiamos tratar registro erro

    }

   ?>