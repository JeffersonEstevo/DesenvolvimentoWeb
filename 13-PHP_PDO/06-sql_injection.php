<?php

if( !empty($_POST['usuario']) && !empty($_POST['senha']) ){


    $dsn = 'mysql:host=localhost;dbname=bd';
    $usuario = 'root';
    $senha = '';


    try{

    	$conexao = new PDO($dsn, $usuario , $senha);


        //query
        $query = "select * from tb_usuarios where ";
        $query .= " email = '{$_POST['usuario']}' ";
        $query .= " AND senha = '{$_POST['senha']}' ";

        echo $query;

       $stmt = $conexao->query($query);
       $usuario = $stmt->fetch();
       echo "<hr>";

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
        <form method="post" action="06-sql_injection.php">
            <input type="text" placeholder="usuário" name="usuario">
            <br>
            <input type="password" placeholder="senha" name="senha">
            <br>
            <button type="submit">Entrar</button>
        </form>


    </body>

</html>

<?php

    echo 'O sql injection ocorre assim:';
    echo '<br>';
    echo 'Colocamos um endereco valido de login';
    echo '<br>';
    echo 'Agora modifica o type do input para text na ferramenta de desenvovedor';
    echo '<br>';
    echo 'Na sequencia, no campo senha adicionamos:';
    echo '<br>';
    echo "123456'; delete from tb_usuarios where 'a' = 'a";



?>