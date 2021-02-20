<?php
//Variable 'Nombre', Operador de asignacion, Tipo de variabele (string),  Valor de la variable
    $Nombre = (string) "Oscar";
    $Edad = (int) 30;
    $Altura = (double) 1.71;
    $Profesor = (bool) true;
    $Dirrecion = (array) ["Sahara", "Tierra Desertica", 22, false];
    print_r($Dirrecion);
    echo $Dirrecion;
    var_dump($Dirrecion);
    print_r($Dirrecion);
    
    $parrafo = (string) <<<FIN
        <h1>"Oscar Fonseca" ``</h1>
        <p>'30'</p>
    FIN;

    $parrafo2 = (string) 'hola \'como\' "estas" ';
    print_r($parrafo);
?>