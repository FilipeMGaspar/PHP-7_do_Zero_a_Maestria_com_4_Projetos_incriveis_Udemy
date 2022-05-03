<?php
    // array_reverse

    $arr = [1, 2, 3, 4, 5];

    $arrRev = array_reverse($arr);

    echo "Array Original: <br>";
    print_r($arr);
    echo "<br><br>";

    echo "Array Invertido: <br>";
    print_r($arrRev);
    echo "<br<<br>";

    $nomes = ["Ti Maria" ,"Filipe", "Ana", "Jorge", "Maria", "Zélia", "Cristina"];

    $nomesRev = array_reverse($nomes);

    echo "Array Original: <br>";
    print_r($nomes);
    echo "<br><br>";

    echo "Array Invertido: <br>";
    print_r($nomesRev);
    echo "<br<<br>";