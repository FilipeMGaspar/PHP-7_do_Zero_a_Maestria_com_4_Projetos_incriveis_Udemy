<?php
    require_once "globals.php";
    require_once "db.php";
    require_once "models/User.php";
    require_once "dao/UserDAO.php";
   
    // Verifica o tipo do formulário ..: Register :.. ou ..: Login :..

    // REgata o tipo do furmilário
    $type = filter_input(INPUT_POST, "type"); // Evita inserção de dados maliciosos pelo utilizador

    // Verificação do tipo de formulário
    if($type === "register") {
        
    }   