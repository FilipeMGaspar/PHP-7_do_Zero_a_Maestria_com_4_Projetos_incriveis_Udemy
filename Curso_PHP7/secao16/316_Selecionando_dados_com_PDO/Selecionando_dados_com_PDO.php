<?php
    $host = "localhost";
    $db = "cursophp";
    $user = "filipe";
    $pass = "teste123";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $id = 5;

    $stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    $data = $stmt->fetch(PDO::FETCH_ASSOC); // Recebe apenas a primeira linha

    print_r($data);