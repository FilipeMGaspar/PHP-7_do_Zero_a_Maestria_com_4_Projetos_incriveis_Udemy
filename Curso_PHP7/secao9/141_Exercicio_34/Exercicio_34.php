<?php
    /*
    *   Crie uma função que verifique se um número é par ou ímpar
    *   Se for par imprima uma mensagem
    *   Se for ímpar imprima uma mensagem 
    */

    function parOUimpar($num){
        if($num %2 === 0){
            $resultado = "PAR";
        }else{
            $resultado = "ÍMPAR";
        }
        echo "<br>O número $num é <strong>$resultado</strong> <br>";
    }

    parOUimpar(26);
    parOUimpar(101);
