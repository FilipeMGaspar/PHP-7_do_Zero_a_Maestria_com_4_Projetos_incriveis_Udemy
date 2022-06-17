<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    $id = 11;

    $stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");

    $stmt->bind_param("i", $id);

    $stmt->execute();

    $conn->close();