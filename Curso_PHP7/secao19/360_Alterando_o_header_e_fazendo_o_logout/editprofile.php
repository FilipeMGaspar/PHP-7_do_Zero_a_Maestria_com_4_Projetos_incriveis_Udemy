<?php
    require_once "templates/header.php";
    require_once "dao/UserDAO.php";

    $userDao = new UserDAO($conn, $BASE_URL);

    $userData = $userDao->verifyToken(true);
?>

    <div id="main-container" class="container-fluid">
        <h1>Edição de perfil do utilizador</h1>
    </div>

<?php
    require_once "templates/footer.php";
?>