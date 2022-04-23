<?php
    /**
     *  Crie um array associativo com nomes e idades
     *  Imprima estes dados em uma tabela de Html
     *  Dica: utilize as tags do elemento table
    */

    $pessoas = [
        "Matheus" => 29,
        "Alexia" => 25,
        "Filipe" => 37,
        "Maria" => 12
    ];
    
    echo "<table>";
    echo "<tr><th>Nome<th>Idade";
    foreach($joao as $nome => $idade){
        echo "<tr><td>$nome<td>$idade";
    }
    echo "<table>";