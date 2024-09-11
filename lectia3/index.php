<?php
    use App\text;
    // text();

    function suma(...$array):mixed {
        return array_sum($array);
    }

    var_dump(suma(3.6, 5.12, 6, 7.45));

    #Functie constanta
    $salut = function ($message) {
        var_dump($message);
    };
    $salut('Alina');

    #USE - BIND
    $isAdmin = false;
    $hello = function ($message) use ($isAdmin): string {
        return $isAdmin
                    ? "$message Admin!"
                    : "$message User";
    };
    echo "<br>";
    echo $hello("Salut");

    #Arrow
    $sum = fn($nr1, $nr2): mixed => $nr1 + $nr2; 
    echo "<br>";
    echo $sum(34, 4.6);
?>