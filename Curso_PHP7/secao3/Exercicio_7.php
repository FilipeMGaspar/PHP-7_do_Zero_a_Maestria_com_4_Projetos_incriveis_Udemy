<?php

$pessoa =[
'nome' => 'Lucas',
'idade' => 25,
'Nacionalidade' => "Francesa",
"Nif" => 12301230
];

echo "<br>";
echo "O Sr. " . $pessoa['nome'] . " de nacionalidade " . $pessoa['Nacionalidade'] . " com o Nr. de Contribuinte " . $pessoa['Nif'] . " é ";

if($pessoa['idade'] >= 18){
    echo " Maior de idade!";
}else{
    echo " Menor de idade!";
}