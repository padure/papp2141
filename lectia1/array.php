<?php declare(strict_types=1);
    // $orase = array('Cahul', 'Cantemir', 'Leova');
    // Iterativ
    $orase = ['Cahul', 'Cantemir', 'Leova'];
    // Asociativ
    $user = [
        "nume" => "John Doe",
        "email" => "jd@gmail.com",
        "age" => 48,
        "abilitati" => [
            "HTML", "CSS", "JS", "C#"
        ],
    ];
    echo $orase[1] . "<br>";
    echo $user['age'] . "<br>";
    echo $user['abilitati'][0] . "<br>";
    echo count($orase) . "<br>";
    var_dump(isset($orase[2]));
    echo "<br>";
    $orase[] = "Hancesti";
    array_push($orase, "Ialoveni");
    array_unshift($orase, "Chisinau");
    var_dump($orase);
    echo "<br>";
    array_pop($user);
    array_shift($user);
    var_dump($user);
    echo "<br>";
    
    $text = "omnis et impedit";
    $res = explode(" ", $text);
    var_dump($res);
    echo "<br>";
    array_pop($res);
    $text_modificat = implode("-", $res);
    var_dump($text_modificat);
    echo "<br>";

    $search = array_search("Cahul", $orase);
    var_dump($search);
    echo "<br>";

    $new_array = array_merge($orase, $res);
    var_dump($new_array);
    echo "<br>";
    # ??
    echo $user['password'] ?? $user['age'] ?? "no password" ;
?>