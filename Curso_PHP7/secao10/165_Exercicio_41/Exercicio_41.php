<?php
    /**
     * Transforme a string "este item está em promoção"
     * Em "este item está em Promoção"
     * Obs: você pode separar as strings, mas não pode escrever em caixa alta ou baixa manualmente, só com funções
     * 
     */

    header('Content-Type: text/html; charset=UTF-8');

    $frase = "este item esta em promocao";
    
    echo ucfirst($frase) . "<br>";