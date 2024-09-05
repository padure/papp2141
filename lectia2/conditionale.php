<?php
    //If
    $an = '2024';
    if( $an > 0 )
        echo "Era noastra";

    if($an < 0){
        echo "Pana la era noastra";
        echo "Esti prea batran!";
    }

    if ( $an == 2024 ){
        echo "Anul curent";
    } else {
        echo "Alt an!";
    }

    $color = "red";

    switch ($color) {
        case 'blue':
            echo "Color Blue";
            break;
        case 'red':
            echo "Color Red";
            break;
        case 'black':
            echo "Color Black";
            break;
        default:
            echo "No color";
            break;
    }

    // if else
    if ($color == "blue") {
        echo "Blue";
    } else if ($color == "red") {
        echo "Red";
    } else if ($color == "black") {
        echo "Black";
    } else {
        echo "No color";
    }
    
    // Ternar
    $age = 15;
    
    $majorat = $age >= 18 ? true : false;
    
?>