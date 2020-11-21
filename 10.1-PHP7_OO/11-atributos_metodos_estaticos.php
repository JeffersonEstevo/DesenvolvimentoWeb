<?php

class Exemplo{
    public static $atributo1 = 'Eu sou um atributo estático';
    public $atributo2 = 'Eu sou um atributo nomral';

    public static function metodo1(){
        echo 'Eu sou um método estático';
    }

    public function metodo2(){
        echo 'Eu sou um método normal'; 
    }
}

echo Exemplo::$atributo1;
echo '<br>';
echo Exemplo::metodo1();
echo '<br>';


// echo Exemplo::$atributo2; //gera erro!

echo Exemplo::metodo2(); //funciona, mas não é recomendado



$x = new Exemplo();

// echo $x->atributo1; //gera erro, usar o operador ->

//Em métodos estáticos, também não podemos usar o operador $this



?>