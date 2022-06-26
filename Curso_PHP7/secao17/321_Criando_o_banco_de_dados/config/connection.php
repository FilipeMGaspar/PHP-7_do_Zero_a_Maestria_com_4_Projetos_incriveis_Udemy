<?php
    $hots = "localhost";
    $dbname = "agenda";
    $user = "root";
    $pass = "";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass); // Ligação á base de dados
    }catch (PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
    }