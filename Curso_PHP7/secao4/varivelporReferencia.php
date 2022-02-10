<?php
    $x = 8;

    $y = & $x;

    echo "$x<br><br>";

    echo "$y<br><br>";

    $y = 15;
    echo "Atribuição após ref!<br><br>";
    echo "$x<br><br>";

    echo "$y<br><br>";

    echo "Atribuição após ref2!<br><br>";

    $x = 20;
    echo "$x<br><br>";

    echo "$y<br><br>";