<?php
    /*
    * Na frase "Cadê o meu queijo? Ele estava aqui em cima"
    *
    * Resgare apenas a palavra queijo
    */

    $frase = "Cadê o meu queijo? Ele estava aqui em cima";
    $queijo = substr($frase, 11, 7);
    $estava = substr($frase,23 ,7);

    echo $queijo . "<br>";
    echo $estava . "<br>";