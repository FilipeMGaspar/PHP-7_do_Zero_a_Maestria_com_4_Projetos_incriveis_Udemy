<?php
    //list

    $pessoa = ['Filipe', 29, "Sapateiro", "Mel"];

    print_r($pessoa);

    list($nome, $idade, $profissao, $corDosOlhos) = $pessoa;
    
    echo "<br><br>";

    echo "$nome, $idade, $profissao, $corDosOlhos";