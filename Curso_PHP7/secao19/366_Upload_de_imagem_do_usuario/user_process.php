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

    //Resgata dados do utilizador
    $userData = $userDao->verifyToken();
    
    //Recebe dados do formulário através do Post
    $name = filter_input(INPUT_POST, "name");
    $lastname = filter_input(INPUT_POST, "lastname");
    $email = filter_input(INPUT_POST, "email");
    $bio = filter_input(INPUT_POST, "bio");

    // Criação de um novo objeto de utilizador
    $user = new User();

    // Preencher os dados do utilizador
    $userData->name = $name;
    $userData->lastname = $lastname;
    $userData->email = $email;
    $userData->bio = $bio;

    // Upload da imagem
    if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])){

        $image = $_FILES["image"];
        $imageTypes = ["image/jpeg", "image/jpg", "image/png"];

        //Verificar o tipo de imagem
        if(in_array($image["type"], $imageTypes)) {

        }
    }

    $userDao->update($userData);

  //atualizar a password
} else if($type === "changepassword") { 

} else {
    $message->setMessage("informações inválidas!", "error", "");
}