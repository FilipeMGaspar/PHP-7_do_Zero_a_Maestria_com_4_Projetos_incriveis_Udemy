<?php

$x = 10;

echo "<br>Escopo  Global  $x";

function teste(){
    $x = 5;

    echo "<br> Escopo Local $x <br><br>";
}

teste();

echo "<br><br>$x <br><br>";