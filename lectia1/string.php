<?php 
    $text = "Totam ut unde aut. Est nam vero ullam. Et laboriosam est voluptas blanditiis. Et eius maxime magnam incidunt in est. Voluptatum perferendis magni perferendis eveniet a sed fugit.";
    $text2 = "   test     ";
    
    echo strlen($text) . "</br>";
    echo trim($text2) . "</br>";
    echo ltrim($text2) . "</br>";
    echo rtrim($text2) . "</br>";
    echo str_word_count($text) . "</br>";
    echo strrev($text) . "</br>";
    echo strrev($text) . "</br>";
    echo strtolower($text) . "</br>";
    echo strtoupper($text) . "</br>";
    echo substr($text, 8) . "</br>";
    echo str_replace("Totam", "PHP", $text) . "</br>";
?>