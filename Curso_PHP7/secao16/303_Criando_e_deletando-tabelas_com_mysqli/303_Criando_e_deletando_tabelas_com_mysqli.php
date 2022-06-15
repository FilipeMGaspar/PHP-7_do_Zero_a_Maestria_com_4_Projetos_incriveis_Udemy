<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db); // Ligação á base de dados
    
    /*
    $sqlQuery = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))"; // Criação da tabela teste com as colunas nome e sobrenome

    $conn->query($sqlQuery); // Execução da query
    */

    $sqlQuery = "DROP TABLE teste"; // Remoção da tabela teste

    $conn->query($sqlQuery); // Execução da query

    $conn->close(); // Fecha a ligação á base de dados