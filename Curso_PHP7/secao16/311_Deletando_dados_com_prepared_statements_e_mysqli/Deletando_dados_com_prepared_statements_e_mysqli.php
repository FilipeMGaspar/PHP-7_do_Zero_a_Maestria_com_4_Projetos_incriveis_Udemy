<?php
    $host = "localhost";
    $user = "filipe";
    $pass = "teste123";
    $db = "cursophp";

    $conn = new mysqli ($host, $user, $pass, $db);

    $id = 4;

    $stmt = $conn->prepare("DELETE FROM itens WHERE id = ?");

    $stmt->bind_param("i", $id);

    $stmt->excute();

    $conn->close();