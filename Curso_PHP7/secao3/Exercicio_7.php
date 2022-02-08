<?php

$pessoa =[
'nome' => 'Lucas',
'idade' => 15,
'Nacionalidade' => "Francesa",
"Nif" => 12301230
];

echo "<br>";
echo "O Sr. " . $pessoa['nome'] . " de nacionalidade " . $pessoa['Nacionalidade'] . " com o número de contribuinte " . $pessoa['Nif'] . " é ";

if($pessoa['idade'] >= 18){
    echo " maior de idade!";
}else{
    echo " menor de idade!";
}