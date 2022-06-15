<?php
    $host = "localhost";
    $user = "filipe";
    $pass = "teste123";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    $sqlQuery = "SELECT * From itens";

    $resultado = $conn->query($sqlQuery);

    print_r($resultado);

    $conn->close();