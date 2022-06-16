<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db); // Ligação á base de dados

    $query = "SELECT * FROM itens";

    $resultado = $conn->query($query);

    $conn->close(); // Fecha a ligação á base de dados

    $item = $resultado->fetch_assoc(); // Método para extrair os dados trás apenas um resultado fetch_assoc
    print_r($item);

    echo "<br><hr><br><br>";

    //todos os resultados
    $itens = $resultado->fetch_all(); // trás todos os dados dad tabela itens método fetch_all

    print_r($itens);