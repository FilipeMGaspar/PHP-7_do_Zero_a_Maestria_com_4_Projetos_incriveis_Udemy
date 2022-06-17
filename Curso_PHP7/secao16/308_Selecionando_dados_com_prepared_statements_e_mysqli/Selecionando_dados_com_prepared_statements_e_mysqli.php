<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    $id = 4;

    $stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");

    $stmt->bind_param("i", $id); // subtitui o ? pelo valor da variavel $id

    $stmt->execute(); // Execução dq query

    $resultado = $stmt->get_result(); //

    $data = $resultado->fetch_all();

    $conn->close();

    print_r($data);