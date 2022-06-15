<?php
    $host = "localhost";
    $user = "filipe";
    $pass = "teste123";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db); // conexão/ligação á base de dados

    $sqlQuery = "SELECT * From itens"; // Query / busca a ser efectuada na base da dados na tabela itens

    $resultado = $conn->query($sqlQuery); // Execução da query/Busca na base de dados

    print_r($resultado);

    $conn->close();