<?php
    //explode

    $str = "Testando o explode";

    $fraseArray = explode(" ", $str);

    print_r($fraseArray);
    echo "<br><br>";

    $fraseArray2 = explode(",", $str);

    print_r($fraseArray2);
    echo "<br><br>";