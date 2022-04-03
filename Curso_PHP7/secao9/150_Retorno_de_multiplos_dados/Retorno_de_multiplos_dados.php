<?php

    function alteraDados($nome, $idade){
        $nome = "Sr(a). $nome";
        $idade = "$idade anos";

        return [$nome, $idade];
    }

    