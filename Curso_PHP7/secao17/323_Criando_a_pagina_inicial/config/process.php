<?php
    session_start(); // inicio da sesão

    require_once("connection.php");
    require_once("url.php");

    /*Seleção de todos os dados da tabela contacts */

    $query = "SELECT * FROM contacts";

    $stmt = $conn->prepare($query); // prepare da query a base de dados

    $stmt->execute(); // Execução da query na base de dados

    $contacts = $stmt->fetchAll(); // Recolha de todos os dados vindos do select