<?php

$x = 10;

echo "<br>Escopo  Global  $x";

function teste(){
    $x = 5;

    echo "<br><br>Escopo Local $x <br><br>";
}

teste();

echo "Escopo  Global $x <br><br>";

teste();

function testando(){

    $x = "Escopo Local!";

    echo "$x <br><br>";
}

testando();

teste();

echo "Escopo  Global $x <br><br>";