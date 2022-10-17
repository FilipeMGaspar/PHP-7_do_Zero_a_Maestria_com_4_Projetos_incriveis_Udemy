<?php

    require_once "globals.php";
    require_once "db.php";
    require_once "models/Movie.php";
    require_once "dao/UserDAO.php";
    require_once "dao/MovieDAO.php";
    require_once "models/Message.php";


    $message = new Message($BASE_URL); // Instanciamento do sistema de mensagem passando a base url

    $userDao = new UserDAO($conn, $BASE_URL);

    // Resgata o tipo do formulário
    $type = filter_input(INPUT_POST, "type"); // Evita inserção de dados maliciosos pelo utilizador


    //Resgata dados do utilizador
    $userData = $userDao->verifyToken();

    if($type === "create") {

        
    } else {
        $message->setMessage("Informações inválidas!", "error", "index.php");
    }