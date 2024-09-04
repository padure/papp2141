<?php
    # Scalare
    // bool
    // int
    // float | double
    // string
    # Compuse
    // array
    // object
    // callable
    // iterable
    # Speciale
    // null
    // resource
    $numar = 25;
    $text = "20a24";
    echo "Numar: " . $numar . "-" .gettype($numar) ."</br>";
    echo "Text: " . $text . "-" . gettype($text) ."</br>";
?>
<?php
    #Conversii
    $an = (int) $text;
    echo gettype($an). $an . "<br>";
?>
<?php
    $numere = [1, 2, 3, 4, 5, 6];
    print_r($numere);
    echo "<pre>";
    var_dump($numere);
    echo "</pre>";
    echo "Test test";
?>

<?php
    function sum(int $nr1, int $nr2):int{
        return $nr1 + $nr2;
    }
?>