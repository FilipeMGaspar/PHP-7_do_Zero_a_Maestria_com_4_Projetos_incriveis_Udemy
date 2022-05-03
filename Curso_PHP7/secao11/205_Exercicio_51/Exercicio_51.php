<?php
/**
 *  Crie um array associativo com chaves com o valor de nomes, e valores com uma pontuação
 *  Ordene os dados do maior para o menor
 *  Exiba uma lista, simulando um ranking, em HTML;
 */

 $pontuacao = [
    "Jorge" => 120,
    "Luisa" => 100,
    "Manuel" => 115,
    "Cristina" => 155,
    "Pedro" => 75
 ];

 arsort($pontuacao);