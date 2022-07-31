<?php
    require_once "globals.php";
    require_once "db.php";
    require_once "models/User.php";
    require_once "dao/UserDAO.php";
    require_once "models/Message.php";
  

    $message = new Message($BASE_URL); // Instanciamento do sistema de mensagem passando a base url

    $userDao = new UserDAO($conn, $BASE_URL); // Instacia do UserDAO

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
                echo " !!! Passagen de E-MAIL ..:  $email <br><br>";
                echo "TESTE ..: " . $userDao->findByEmail($email) . "<br><br>";
                
                // verificar se o e-mail já está registado na base de dados
                echo "!!!! **** Ligação á bd ..: ";
                print_r($conn->$dbname);
                echo "<br><br>";
                echo "userDAO ..:  ";
                print_r($userDao);
                echo "<br><br>";
                if($userDao->findByEmail($email) !== false) {
                    echo "Nenhum utilizador foi encontrado! Falta terminar de implemetar....";
                } else {
                    // Enviar uma mensagem de erro email já registado na base de dados
                    $message->setMessage("Utilizador já resgistado. Teste um E-mail diferente.", "error", "back");
                }

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