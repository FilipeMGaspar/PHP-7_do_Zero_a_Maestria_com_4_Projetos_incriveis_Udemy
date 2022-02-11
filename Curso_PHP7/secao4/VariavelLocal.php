<?php

$x = 10;

echo "<br>Escopo  Global  $x";

function teste(){
    $x = 5;

    echo "<br><br>Escopo Local $x <br><br>";
}

teste();

echo "$x <br><br>";