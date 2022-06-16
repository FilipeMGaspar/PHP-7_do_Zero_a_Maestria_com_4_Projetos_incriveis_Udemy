<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db); // Ligação á base de dados

    $query = "SELECT * FROM itens";

    $resultado = $conn->query($query);

    $itens = $resultado->fetch_assoc(); // Método para extrair os dados 
    print_r($itens);

    $conn->close();