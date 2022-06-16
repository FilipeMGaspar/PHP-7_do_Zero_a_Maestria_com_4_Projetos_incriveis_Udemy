<?php
    $host = "localhost";
    $user = "filipe";
    $pass = "dGVzdGUxMjM=";
    $db = "cursophp";

    $conn = new mysqli($host, $user, base64_decode($pass), $db);

    $tabela = "itens";
    $nome = "Recarga A4 100g Linhas";
    $descricao = "Recarga de folhas de linhas, A4 pautada, 100g 7mm entre linhas";

    //Inserir dados noma tabela
    $query = "INSERT INTO $tabela (nome, descricao) VALUES ($nome, $descricao)";

   // $query = "INSERT INTO itens (nome, descricao) Values ('Caneta verde 0.5', 'Caneta verde 0.5 de ponta fina bic')";

    $conn->close();