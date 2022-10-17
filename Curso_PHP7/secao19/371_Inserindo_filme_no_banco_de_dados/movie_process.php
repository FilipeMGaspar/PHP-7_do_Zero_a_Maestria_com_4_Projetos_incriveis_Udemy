<?php

    require_once "globals.php";
    require_once "db.php";
    require_once "models/Movie.php";
    require_once "dao/UserDAO.php";
    require_once "dao/MovieDAO.php";
    require_once "models/Message.php";


    $message = new Message($BASE_URL); // Instanciamento do sistema de mensagem passando a base url