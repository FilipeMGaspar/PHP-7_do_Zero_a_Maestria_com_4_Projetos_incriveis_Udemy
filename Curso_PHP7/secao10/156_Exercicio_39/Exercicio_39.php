<?php
/*
*   Crie uma função que receba características de algum objeto como argumanto (carro, sofa, cafeteira), em array associativo;
*
*   O array deve conter nome => preço
*
*   retorne apenas os itens que custam mais que R$ 10
*
*   Imprima o retorno
*/ 

    function carateristasobjetos($nome, $preço){
        $arrayObjetos = array("$nome" => $preço);
        return $arrayObjetos;
    }

    $arr = carateristasobjetos("carro", 2500);

    var_dump($arr);
    