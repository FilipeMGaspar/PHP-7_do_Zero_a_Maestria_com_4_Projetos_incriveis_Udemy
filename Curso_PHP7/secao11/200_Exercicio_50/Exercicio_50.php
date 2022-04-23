<?php
    /**
     *  Crie um array associativo com nomes e idades
     *  Imprima estes dados em uma tabela de Html
     *  Dica: utilize as tags do elemento table
    */

    $joao = [
        "Nome"=>"João",
        "Idade"=>42   
    ];

    $luisa = [
        "Nome" => "Luisa",
        "Idade" => 50   
    ];
    
    echo "<table>";
    echo "<tr><td>Nome<td>Idade";
    foreach($joao as $caract){
        echo "<tr><td>$caract<td>";
    }
    echo "<table>";