<?php

$x = 10;

echo "<br>Escopo  Global  $x";

function teste(){
    $x = 5;

    echo "<br><br>Escopo Local $x função teste <br><br>";
}

teste();

echo "Escopo  Global $x <br><br>";

teste();

function testando(){

    $x = "Escopo Local! Função testando";

    echo "$x <br><br>";
}

testando();

teste();

echo "Escopo  Global $x <br><br>";