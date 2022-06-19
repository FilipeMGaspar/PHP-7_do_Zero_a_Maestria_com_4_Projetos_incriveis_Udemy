<?php
    $host = "localhost";
    $db = "cursophp";
    $user = "filipe";
    $pass = "teste123";
    
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

    $nome = "Cadeira Gamer";
    $descricao = "Cadeira gamer usada, fabricada na china";

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);

    $stmt->execute();