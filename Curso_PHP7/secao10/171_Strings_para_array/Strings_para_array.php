<?php
    //explode

    $str = "Testando o explode";

    $fraseArray = explode(" ", $str);
    print_r($fraseArray);
    echo "<br><br>";

    $fraseArray2 = explode(",", $str);
    print_r($fraseArray2);
    echo "<br><br>";

    $frase = "Carro, Avião, Barco, Mota, Bicicleta";
    $fraseArray = explode(",", $frase);
    print_r($fraseArray);
    echo "<br><br>";

    for($i=0; $i < count($fraseArray); $i++){
        echo $fraseArray[$i] ."<br>";
    }