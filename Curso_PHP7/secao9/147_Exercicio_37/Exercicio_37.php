<?php
/*
*   Crie uma função chamada defineCorCarro
*   Onde há um parâmetro chamado cor, com valor default vermelha
*   Retorne a cor do carro
*   Imprima o retorno tanto com parametro default, como também definindo a cor
*
*/
    function defineCorCarro($cor = "Vermelho"){
        return $cor;
    }

    echo "O carro tem como com o" . defineCorCarro() . "<br><br>";

    echo "O carro tem como com o" . defineCorCarro("Azul") . "<br><br>";
