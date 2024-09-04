<?php
    //Declaratie
    $a = 5;
    //Aritmetici
    # + - * / %
    //Atribuire
    # += 
    # -= 
    # /= 
    # *= 
    # %=
    //Incrementare Dec ...
    # ++, --
    // Verificare
    is_float($a);
    is_integer($a);
    is_numeric($a);
    // Functii numerice
    echo abs(-15) . "</br>";
    echo pow(2, 4) . "</br>";
    echo sqrt(16) . "</br>";
    echo max(2, 3) . "</br>";
    echo min(2, 3) . "</br>";
    echo round(2.3) . "</br>";
    echo round(2.6) . "</br>";
    echo floor(2.6) . "</br>";
    echo ceil(2.4) . "</br>";

    define('PORT', 9292);
    const HOST_NAME = 'localhost';

    echo PHP_INT_MIN . "</br>";
    echo PHP_INT_MAX;
?>