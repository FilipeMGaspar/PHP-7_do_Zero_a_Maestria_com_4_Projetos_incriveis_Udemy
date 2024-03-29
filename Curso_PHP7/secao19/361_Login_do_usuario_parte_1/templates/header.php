<?php
    require_once "globals.php";
    require_once "db.php";
    require_once "models/Message.php";
    require_once "dao/UserDAO.php";

    $message = new Message($BASE_URL); // Instanciamento do sistema de mensagens

    $flassMessage = $message->getMessage(); // Recebe as mensagem a serem apresentadas para o utilizador

    if(!empty($flassMessage["msg"])){ // Verifica se a mensagem não está vazia
        // Limpa a mensagem
        $message->clearMessage(); // Limpa a mensagem apresentada ao utilizador
    }

    $userDao = new UserDAO($conn, $BASE_URL); // Instancia do userDao
    $userData = $userDao->verifyToken(false);

?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieStar - Projeto 3 - Hora de Codar</title>
   
    <!-- Icon -->
    <link rel="shortcut icon" href="<?= $BASE_URL ?>img/moviestar.ico" type="image/x-icon">

    <!-- font-awesome - from cdnjs  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- BootStrap  - from cdnjs  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0-beta1/css/bootstrap.css" integrity="sha512-F5fn88UDJWd0T1GwpnIpbuFuSxCgXNnJhIihkiWeqYUyLt3oPUaYzL774VjL7eGj8ktZCZQS//txAxgokiz1Lw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS do projeto -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">

</head>
<body>
    
    <header>
        
    <nav id="main-navbar" class="navbar navbar-expand-lg">
            <a href="<?= $BASE_URL ?>" class="navbar-brand">
                <img src="<?= $BASE_URL ?>img/logo.svg" alt="MovieStar" id="logo">
                <span id="moviestar-title">MovieStar</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Togglenavigation">
                <i class="fas fa-bars"></i>
            </button>

            <form action="" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
                <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Pesquisar Filmes" aria-label="Search">
                <button class="btn my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                  <?php if($userData): ?>
                        <li class="nav-item">
                            <a href="<?= $BASE_URL ?>newmovie.php" class="nav-link">
                                <i class="far fa-plus-square"></i> Adicionar filme
                            </a>
                        </li>   

                        <li class="nav-item">
                            <a href="<?= $BASE_URL ?>dashboard.php" class="nav-link">Meus Filmes</a>
                        </li>   

                        <li class="nav-item">
                            <a href="<?= $BASE_URL ?>editprofile.php" class="nav-link bold">
                                <?= $userData->name ?>
                            </a>
                        </li>   

                        <li class="nav-item">
                            <a href="<?= $BASE_URL ?>logout.php" class="nav-link">Sair</a>
                        </li>   
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="<?= $BASE_URL ?>auth.php" class="nav-link">Entrar / Registar</a>
                        </li>    
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>

    <?php if(!empty($flassMessage["msg"])): ?>
        
    <div class="msg-container">
        <p class="msg <?= $flassMessage["type"] ?>"><?= $flassMessage["msg"] ?></p>
    </div>
    <?php endif; ?>    
