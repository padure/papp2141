<?php
    $colors = ['red', 'black', 'blue'];
    $curs = [
        'nume' => 'C# Avansat',
        'mentor' => 'John Doe',
        'pret' => 9000
    ];
    // Search
    $res = in_array('redd', $colors);
    echo $res;
    echo "<pre>";
    var_dump(array_keys($curs));    
    echo "</pre>";
    echo "<pre>";
    var_dump(array_values($curs));    
    echo "</pre>";
    ksort($curs);
    echo "<pre>";
    var_dump($curs);    
    echo "</pre>";
    krsort($curs);
    echo "<pre>";
    var_dump($curs);    
    echo "</pre>";
    asort($curs);
    echo "<pre>";
    var_dump($curs);    
    echo "</pre>";
    arsort($curs);
    echo "<pre>";
    var_dump($curs);    
    echo "</pre>";
?>