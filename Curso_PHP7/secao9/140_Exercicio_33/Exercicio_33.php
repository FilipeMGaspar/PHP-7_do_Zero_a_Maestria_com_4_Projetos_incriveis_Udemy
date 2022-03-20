<?php
/*
*   Crie uma função
*   Ela deve receber um parâmetro nome e idade
*   Imprima "Olá eu sou o NOME e tenho X anos";
*/

function apresentarPessoa($nome, $idade){
    if(is_string($nome) && is_int($idade)){
        echo "<br>Olá o meu nome é $nome e tenho $idade anos! <br>";
    }else {
        echo "<br> ERRO [1024] - Nome ou a idade não foram definidos!<br>";
    }
    
}

apresentarPessoa("Julia", 39);
apresentarPessoa("Manuel", 19);
apresentarPessoa("Lucas", 37);
apresentarPessoa(40, "Maria");