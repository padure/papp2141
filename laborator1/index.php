<?php
    $nr = 0;
    while (true) {
        if($nr % 2 != 0) 
            if($nr > 20) break;
        else 
            echo $nr . "<br>";
        $nr++;  
    }
?>