<?php
/*
*   Crie uma função que recebe um array de itens de supermercado
*   Retorne este array em forma de string, separado em virgulas
*
*/

    function itensSuperMercado($arrayItens){
        $ItenSuperString = implode(", " , $arrayItens)
        return $ItenSuperString;
    }

    $arr = ["Pão", "Leite", "Açucar", "Arroz"];

    echo  itensSuperMercado($arr) . "<br>";