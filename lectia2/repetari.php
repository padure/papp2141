<?php
    $conditie = 27;
    while ($conditie >= 10) {
        
        $conditie--;
    }
    
    $a = 1;
    do {
        $a ++;
    } while ($a <= 10);

    for ($i=0; $i <= 10 ; $i++) { 
        echo $i . "<br>";
    }

    $data = [2, 3, 4, 5, 6, 7];

    foreach ($data as $value) {
        echo $value . "<br>";
    }

    $oras = [
        'nume' => 'Cahul',
        'populatie' => 30000,
        'suprafata' => 12500,
    ];

    foreach ($oras as $key => $value) {
        echo $key . " => " . $value;
    }
?>