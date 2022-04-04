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

    function objetosAcimaDeDez($arrayObjetos){
        $arrayDezMais = [];

        foreach ($arrayObjetos as $objecto){
            if($objecto > 10){
               array_push($arrayDezMais, $objecto);
            }
        }

        return $arrayDezMais;
    }

   
    $arr = array(
        "carro" => 11250.99,
        "sofa" => 899,85,
        "cafeteira" => 9.99,
        "borracha" => 0.89
    );

   $novoArray = objetosAcimaDeDez($arr);

   var_dump($novoArray);