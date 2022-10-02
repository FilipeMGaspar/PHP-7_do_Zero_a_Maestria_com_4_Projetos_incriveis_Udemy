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
        
    </div>

<?php
    require_once "templates/footer.php";
?>