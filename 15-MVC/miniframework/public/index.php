<?php
//Diretiva ini_set();  permite setar valor no php.ini 
//Caso apareça algum erro na tela podemos, omitir esses erros utiliznado:
//ini_set('error_reporting', 'E_STRICT');
//No caso aqui, não será necessário pois corrigimos todos os erros, mas caso venhamos precisar, fica como dica de utilização


require_once "../vendor/autoload.php";

$route = new \App\Route;
/*
echo 'Isso está funcionando!';
echo '<hr>';
print_r($route->getUrl());
echo '<hr>';
echo'<pre>';
print_r($route->getRoutes());
echo'</pre>';
*/

?>