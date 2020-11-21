<?php

require "./bibliotecas/lib1/lib1.php";
require "./bibliotecas/lib2/lib2.php";

//importações só funcionam para classes e interfaces. Não se aplica para funções e constantes.

//instanciando Cliente de determinado namespace:
use A\Cliente as C1; //"renomeando para C1"
use B\Cliente as C2; //"renomeando para C2"


$c = new C1();
print_r($c);
echo $c->__get('nome'); 

echo '<hr>';

$c = new C2();
print_r($c);
echo $c->__get('nome'); 

?>