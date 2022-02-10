<?php
    $x = 8;

    $y = & $x;

    echo "$x<br><br>";

    echo "$y<br><br>";

    $y = 15;
    echo "Atribuição após ref!";
    echo "$x<br><br>";

    echo "$y<br><br>";

    