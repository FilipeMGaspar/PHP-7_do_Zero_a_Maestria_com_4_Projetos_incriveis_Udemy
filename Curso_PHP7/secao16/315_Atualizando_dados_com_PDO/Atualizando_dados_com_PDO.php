<?php
    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $pass = "";

    $conn = new PDO("mysql:host0$host;dbname=$db", $user, $pass);

    $id = 5;
    $nome = "Smartphone Xiaomi";
    $descricao = "Xiaomi Note 12 pro";

    $stmt = $conn->prepare("UPDATE itnes SET nome = ':nome', descricao = ':descricao' WHERE id=:id");

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);
    $stmt->bindParam(":id", $id);

    $stmt->execute();