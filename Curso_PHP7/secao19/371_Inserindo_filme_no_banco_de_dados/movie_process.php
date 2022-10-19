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

        // Receber os dados dos inputs
        $title = filter_input(INPUT_POST, "title");
        $description = filter_input(INPUT_POST, "description");
        $trailer = filter_input(INPUT_POST, "trailer");
        $category = filter_input(INPUT_POST, "category");
        $length = filter_input(INPUT_POST, "length");

        $movie = new Movie();

        // Validação minima de dados, no caso necessita do título da categoria e da descrição
        if(!empty($title) && !empty($description) && !empty($category)) {

            $movie->title = $title;
            $movie->description = $description;
            $movie->trailer = $trailer;
            $movie->category = $category;
            $movie->length = $length;

            // upload da imagem do filme
            if (isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])) {
                
                $image = $_FILES["image"];
                $imageTypes = ["image/jpeg", "image/jpg", "image/png"];
                $jpgArray = ["image/jpeg", "image/jpg"];

                // Verificação do tipo da imagem
                if(in_array($image["type"], $imageTypes)) {

                    // 

                } else {
                    $message->setMessage("Tipo de imagem inválido! Tipos permitidos jpg ou png!", "error", "back");
                }

            } 

        } else {
            $message->setMessage("As informações de Titulo, Categoria e Descrição devem estar preenchidas! ", "error", "back");
        }
        
    } else {
        $message->setMessage("Informações inválidas!", "error", "index.php");
    }