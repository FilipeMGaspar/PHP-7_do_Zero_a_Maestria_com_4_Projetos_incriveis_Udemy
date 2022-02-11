<?php

$x = 10;

echo "<br>Escopo  Global  $x";

function teste(){
    $x = 5;

    echo "<br> Escopo Local $x <br><br>";
}

echo "<br><br>$x <br><br>";