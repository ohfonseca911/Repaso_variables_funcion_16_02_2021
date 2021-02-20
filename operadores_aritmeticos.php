<?php
    // Suma entre variables (Operador de Suma)
    $num1 = (int) 2;
    $num2 = (int) 5; 

    //Significado
    $res = (int) ($num1+$num2);
    print_r($res); 

    // Abreviado
    $num1 += $num2;
    print_r($num1); 
   
    // Resta entre variables (Operador de Resta)
    $num1 = (int) 20;
    $num2 = (int) 3; 

    // Significado
    $res = (int) $num1 - $num2;
    print_r($res); 

    //Abreviado
    $num1 -= $num2;
    print_r($num1); 

    // Multiplicacion entre variables (Operador de Multiplicacion)
    $num1 = (int) 5; 
    $num2 = (int) 5;
 
    // Significado
    $res = (int) $num1 * $num2;
    print_r($res); 

    // Abreviado
    $num1 *= $num2;
    print_r ($num1);

    // Divicion entre variables (Operador de Divicion)
    $num1 = (int) 5;
    $num2 = (int) 5;

    // Significado
    $res = (int) $num1 / $num2;
    print_r($res);

    // Abreviado
    $num1 /= $num2;
    print_r($num1);    

    // Resto(Modulo) entre variables (Operador de Resto(Modulo))
    $num1 = (int) 49;
    $num2 = (int) 5;

    // Significado
    $res = (int) $num1 % $num2;
    print_r($res); 

    //Abreviado
    $num1 %= $num2;
    print_r($num1);
 
    // Negacion(Diferente) entre variables (Operador de Negacion(Diferente)
    $num1 = (int) 10;
    $num2 = (int) 5; 
    $res = (int) $num1!=$num2;
    var_dump($res); 

    // Pos_Incremento entre variables (Operador de Pos_Incremento)
    $num1 =(int) 0;
    $num2 = (int) $num1++;
    print_r( $num2);

    // Pos_Decremento entre variables (Operador de Pos_Decremento)
    $num1 = (int) 10;
    $res = $num1--;
    $res = $num1--;
    $res = $num1--;
    $res = $num1--;
    print_r($res); 

    // Pre_Decremento entre variables (Operador de Pre_Decremento)
    $num1 = (int) 10;
    $res = --$num1;
    $res = --$num1;
    $res = --$num1;
    $res = --$num1;
    print_r($res); 
?>