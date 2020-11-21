<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    
    //gettype() => retorna o tipo da variável
    $valor = 10;    

    echo gettype($valor);

    $valor2 = 10.75;   

     echo '<br>'; 
       
    echo gettype($valor2);

    $valor3 = 'Jefferson';    

      echo '<br>';
    
    echo gettype($valor3);

     echo '<br>';

    $valor4 = true;    
    
    echo gettype($valor4);

      echo '<hr>';
/******************************************/
//OBS.: o tipo float pode ser: float, real, double

        $value = 10;
        $value2 = (float) $value;

        echo $value .' '. gettype($value);
        echo '<br>';
        echo $value2 . ' '. gettype($value2);
        echo '<br>';
        echo '<br>';



         $value3 = 15.45;
        $value4 = (int) $value3;

        echo $value3 .' '. gettype($value3);
        echo '<br>';
        echo $value4 . ' '. gettype($value4) . '  -> float para int, perde-se a parte fracionária';
        echo '<br>';
        echo '<br>';



        $value5 = 10.89;
        $value6 = (string) $value5;

        echo $value5 .' '. gettype($value5);
        echo '<br>';
        echo $value6 . ' '. gettype($value6);
        echo '<br>';
        echo '<br>';




        $value7 = '25.44';
        $value8 = (integer) $value7;

        echo $value7 .' '. gettype($value7);
        echo '<br>';
        echo $value8 . ' '. gettype($value8);
        echo '<br>';
        echo '<br>';




        $value7 = '25.44';
        $value8 = (float) $value7;

        echo $value7 .' '. gettype($value7);
        echo '<br>';
        echo $value8 . ' '. gettype($value8);
        echo '<br>';
        echo '<br>';




        $value7 = '25.44';
        $value8 = (bool) $value7;

        echo $value7 .' '. gettype($value7);
        echo '<br>';
        echo $value8 . ' '. gettype($value8);
        echo '<br>';
        echo '<br>';




    ?>

</body>

</html>