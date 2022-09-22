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
                if($userDao->findByEmail($email) === false) {
                    
                    $user = new User();

                    //Criação de token e senha
                    $userToken = $user->generateToken(); // Token 
                    $finalpassword = $user->generatePassword($password); // Senha encriptada

                    //Criação do utilizador
                    $user->name = $name;
                    $user->email = $email;
                    $user->lastname = $lastname;
                    $user->password = $finalpassword;
                    $user->token = $userToken;

                    //Autenticar o utilizador
                    $auth = true;

                    $userDao->create($user, $auth); // Criação do utilizador utilizado o userDAO
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
        
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");

        // Tentativa de autenticar o utilizador
        if($userDao->authenticateUser($email, $password)) {

            $message->setMessage("Seja bem-vindo! ", "success", "editprofile.php");

        } else { // Redireciona o utilizador no caso de não conseguir autenticação
            $message->setMessage("Utilisador e/ou password, estão incorrectos! ", "error", "back");
        }
    } else {
        $message->setMessage("informações inválidas!", "error", "index.php");
    }