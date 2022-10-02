<?php
    require_once "templates/header.php";

    // Verificação de inicio de sessão pelo utilizador
    require_once "models/User.php";
    require_once "dao/UserDAO.php";

    $user = new User();
    $userDao = new UserDAO($conn, $BASE_URL);

    $userData = $userDao->verifyToken(true);
?>

    <div id="main-container" class="container-fluid">
        <div class="offset-md-4 col-md-4 new-movie-container">
            <h1 class="page-title">Adicionar Filme</h1>
            <p class="page-description">Pode adicionar uma critica e partilha-la com o mundo!</p>
            <form action="<?= $BASE_URL ?>movie_process.php" id="add-movie-form" method="POST" enctype="multipart/form-data">
                
            </form>
        </div>
    </div>

<?php
    require_once "templates/footer.php";
?>