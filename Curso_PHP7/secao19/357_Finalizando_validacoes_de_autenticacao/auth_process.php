<?php
    require_once "globals.php";
    require_once "db.php";
    require_once "models/User.php";
    require_once "dao/UserDAO.php";
    require_once "models/Message.php";
  

    $message = new Message($BASE_URL); // Instanciamento do sistema de mensagem passando a base url

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
            // Verificação de senhas, se as mesmas são iguais
            if($password === $confirmpassword) {
                
                // verificar se o e-mail já está registado na base de dados
                

            } else {
                  // Enviar uma mensagem de erro por senhas diferentes
                $message->setMessage("As passwords não são iguais", "error", "back");
            }
        } else {
            // Enviar uma mensagem de erro de dados em falta
            $message->setMessage("Por favor preencha todos os campos", "error", "back");
        }

    } else if ($type === "login") {   // Verifica o tipo do formulário ..: Register :.. ou ..: Login :..

    }