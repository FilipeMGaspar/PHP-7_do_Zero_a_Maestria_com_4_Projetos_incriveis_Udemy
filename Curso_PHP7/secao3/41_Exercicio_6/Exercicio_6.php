<?php

/*
crie um arquivo PHP
Crie um array com caraterísticas de um carro
Imprima duas caraterísticas
*/

$carro = [
    'Marca' => "Volkswagen", 
    'Modelo' => "Golf",
    'Combustivel' => 'Diesel', 
    'Motor' => 1.9,
    'Cvs' => 130,
    'TetoPanoramico' => true
    ];

echo "<br><br>";
echo "Marca: ".       $carro['Marca'] . "<br>";
echo "Modelo: ".      $carro['Modelo'] . "<br>";
echo "Combustivel: ". $carro['Combustivel'] . "<br>";
echo "Motor: ".       $carro['Motor'] ." TDI de " . $carro['Cvs'] ." Cavalos";
