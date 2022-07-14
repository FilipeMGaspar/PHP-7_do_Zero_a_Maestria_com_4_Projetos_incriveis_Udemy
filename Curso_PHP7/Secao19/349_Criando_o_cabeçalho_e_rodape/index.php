<?php
    require_once "globals.php";
    require_once "db.php"
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
                    <li class="nav-item">
                        <a href="<?= $BASE_URL ?>auth.php" class="nav-link">Entrar / Registar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div id="main-container" class="container-fluid">
        <h1>Corpo do site</h1>
    </div>

    <footer id="footer">
        <div class="social-container">
            <ul>
                <li>
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </li>
            </ul>
        </div>
    </footer>

    <!-- JavaScript BootStrap  - from cdnjs  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0-beta1/js/bootstrap.js" integrity="sha512-kZzIlRPOhobf+l/HSLHKu5E6UVe34lDZKtQzNEMHRNdctaVhwIPVruz1ahHqtMUTuYxJaSmVIZyWjV7jlfpAyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>