<?php
    $host = "localhost";
    $user = "filipe";
    $pass = "teste123";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    $nome = "Suporte de Microfone";
    $descricao = "O suporte é novo e foi fabricado na china";

    // prepared statements
    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)"); //  ? ? é o bindparam 

    $stmt->bind_param("ss", $nome, $descricao); // "ss" String String, vai subtituir os ? ? da linha anterior  s = String, i = integer, d = double

    $stmt->execute(); // Execução 

    $conn->close();
