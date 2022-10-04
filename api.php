<?php
    // Glosario de PHP
    // Camel-case
    // Extructura basica de los lenguajes de programacion
    // Que es un seudo-Lenguaje programacion / un lengaje de programacion
    // codigo limpio / codigo sucio
    // Variables
    // Maeras de escribir las variables en PHP
    // 7 tipos de datos primitivos en PHP
    // Declarar de Variable / Inicializacion de Variable
    // Punto y coma
    // palabras reservadas del sistema
    // Que son los operadores
    // Items en las coleciones de datos PHP
    // echo / var_dump / print_r  


    header('Access-Control-Allow-Origin: *');

    $nombreCompleto = "Miguel Angel Castro Escamilla";
    $edad = 24;
    $altura = 1.63;
    $soyProfesor = true;
    $pasaTiempo = ["Cocinar", "Programar", "Leer", "Trotar"];
    $dirrecion = new stdClass();
    $dirrecion->principal = "Calle 11b";
    $dirrecion->secundaria = "Avenida 11a";
    
    echo($nombreCompleto);
    echo("<br>");
    echo($edad);
    echo("<br>");
    echo($altura);
    echo("<br>");
    var_dump($soyProfesor);
    var_dump($pasaTiempo);
    var_dump($dirrecion);
    echo "<br>Soy el servidor ".$_SERVER["HTTP_HOST"];

?>