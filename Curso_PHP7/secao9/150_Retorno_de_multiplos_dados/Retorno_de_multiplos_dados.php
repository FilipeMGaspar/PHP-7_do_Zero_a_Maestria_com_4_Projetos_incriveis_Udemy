<?php

    function alteraDados($nome, $idade){
        $nome = "Sr(a). $nome";
        $idade = "$idade anos";

        return [$nome, $idade];
    }

    $dados = alteraDados("Lucas", 37);

    print_r($dados);

    echo "<br><br>";

    echo "Olá $dados[1], você tem $dados[1]";