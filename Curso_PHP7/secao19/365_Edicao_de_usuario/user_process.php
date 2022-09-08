<?php

require_once "globals.php";
require_once "db.php";
require_once "models/User.php";
require_once "dao/UserDAO.php";
require_once "models/Message.php";


$message = new Message($BASE_URL); // Instanciamento do sistema de mensagem passando a base url

$userDao = new UserDAO($conn, $BASE_URL); // Instacia do UserDAO

// Resgata o tipo do formulário
$type = filter_input(INPUT_POST, "type"); // Evita inserção de dados maliciosos pelo utilizador

//Atualização do utilizador
if($type === "update") {
    

  //atualizar a password
} else if($type === "changepassword") { 

}