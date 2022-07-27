<?php
    require_once "globals.php";
    require_once "db.php";
    require_once "models/User.php";
    require_once "dao/UserDAO.php";
   
  

    // Resgata o tipo do furmilário
    $type = filter_input(INPUT_POST, "type"); // Evita inserção de dados maliciosos pelo utilizador

    // Verificação do tipo de formulário
    if($type === "register") {   // Verifica o tipo do formulário ..: Register :.. ou ..: Login :..

        $name = filter_input(INPUT_POST, "name");
        $email = filter_input(INPUT_POST, "email");
        $lastname = filter_input(INPUT_POST, "lastname");
        $password = filter_input(INPUT_POST, "password");
        $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

        // Verificação de dados minimos
        if($name && $lastname && $email && $password) { 

        } else {
            // Enviar uma mensagem de erro de dados em falta
            
        }

    } else if ($type === "login") {   // Verifica o tipo do formulário ..: Register :.. ou ..: Login :..

    }