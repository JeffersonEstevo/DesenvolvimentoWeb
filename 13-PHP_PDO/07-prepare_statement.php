<?php

if( !empty($_POST['usuario']) && !empty($_POST['senha']) ){


    $dsn = 'mysql:host=localhost;dbname=bd';
    $usuario = 'root';
    $senha = '';


    try{

    	$conexao = new PDO($dsn, $usuario , $senha);
/*
        $query = "insert into tb_usuarios(nome, email,senha)values('Jefferson Estevo', 'jefferson@teste.com', '123456')"; 
        $conexao->query($query);

        $query = "insert into tb_usuarios(nome, email,senha)values('Jamilto Damasceno', 'jamilton@teste.com', '123456')"; 
        $conexao->query($query);

        $query = "insert into tb_usuarios(nome, email,senha)values('Jorge Santana', 'jorge@teste.com', '123456')"; 
        $conexao->query($query);
*/  
        $query = 'select * from tb_usuarios where';
        $query .= " email = :usuario ";
        $query .= " AND senha = :senha ";

        //prepare utilizado para proteger contra SQLINJECTION

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(':usuario', $_POST['usuario']);
        $stmt->bindValue(':senha', $_POST['senha']);

        $stmt->execute();

        $usuario = $stmt->fetch();

        echo '<pre>';
        print_r($usuario);
        echo '</pre>';





    }catch(PDOException $e){
    	echo 'Erro: ' .$e->getCode(). ' Mensagem: ' .$e->getMessage();
    	//poderiamos tratar registro erro

    }
}   


?>

<!DOCTYPE html>
<html>
    <head>

       <meta charset="utf-8">
       <title>Login</title>

    </head>

    <body>
        <form method="post" action="07-prepare_statement.php">
            <input type="text" placeholder="usuário" name="usuario">
            <br>
            <input type="password" placeholder="senha" name="senha">
            <br>
            <button type="submit">Entrar</button>
        </form>


    </body>

</html>

<?= 'Aplicação agora está preparada para desconsiderar SQLInjection vinda do formulário no front-end'?>

