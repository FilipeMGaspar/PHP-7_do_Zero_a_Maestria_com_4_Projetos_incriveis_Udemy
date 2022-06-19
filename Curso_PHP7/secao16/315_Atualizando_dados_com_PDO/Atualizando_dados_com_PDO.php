<?php
    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $pass = "";

    $conn = new PDO("mysql:host0$host;dbname=$db", $user, $pass);

    $id = 5;
    $nome = "Readmi";
    $descricao = "Readmi Note 12 Pro, novo em caixa, com todos os acessórios";


   // $stmt = $conn->prepare("UPDATE itens SET nome=:nome, descricao=:descricao WHERE id=:id");

   $stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);
    $stmt->bindParam(":id", $id);
    
    $stmt->execute();