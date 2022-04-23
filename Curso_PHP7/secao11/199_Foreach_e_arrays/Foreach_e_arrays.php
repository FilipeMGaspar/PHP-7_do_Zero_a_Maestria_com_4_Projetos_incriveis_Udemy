<?php
    // foreach
        // notação chave => valor
        // foreach($itens as $key => $value){}

        $filipe = [
            "nome" => "Filipe",
            "idade" => 37,
            "profissao" => "Sapateiro"
        ];

        $alexia= [
            "nome" => "Alexia",
            "idade" => 27,
            "profissao" => "Maquinista"
        ];

        foreach($filipe as $caracteristica => $value){
            echo "$caracteristica ..: $value <br>";
        }

        echo "<br>";
        foreach($alexia as $caract => $value){
            echo "$caract ..: $value <br>";
        }