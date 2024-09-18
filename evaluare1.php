<?php
    $carti = [
        [
            'titlu' => "asdasdasd",
            'autor' => 'asdasdasd',
            'pret' => 258
        ],
        [
            'titlu' => "asdasdasd",
            'autor' => 'asdasdasd',
            'pret' => 258
        ],
        [
            'titlu' => "asdasdasd",
            'autor' => 'asdasdasd',
            'pret' => 258
        ],
        [
            'titlu' => "Titlu 2",
            'autor' => 'asdasdasd',
            'pret' => 258
        ],
    ];    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: black;
            color: white;
            margin: 0;
        }
    </style>
</head>
<body>
    <h3>Lista cartilor</h3>
    <?php foreach($carti as $carte): ?>
        <div class="carte">
            <p>Titlu: [<?= $carte['titlu'] ?>]</p>
            <p>Autor: [<?= $carte['autor'] ?>]</p>
            <p>Pret: [<?= $carte['pret'] ?>]</p>
        </div>
    <?php endforeach; ?>
    <h3>Lista cartilor dupa filtrare</h3>
    <?php
        $valoare = "Titlu 2";
        $listaCartiFiltrata = array_filter($carti, function($carte) use($valoare){
            return $carte['titlu'] == $valoare;
        });
    ?>
    <?php foreach($listaCartiFiltrata as $carte): ?>
        <div class="carte">
            <p>Titlu: [<?= $carte['titlu'] ?>]</p>
            <p>Autor: [<?= $carte['autor'] ?>]</p>
            <p>Pret: [<?= $carte['pret'] ?>]</p>
        </div>
    <?php endforeach; ?>
</body>
</html>