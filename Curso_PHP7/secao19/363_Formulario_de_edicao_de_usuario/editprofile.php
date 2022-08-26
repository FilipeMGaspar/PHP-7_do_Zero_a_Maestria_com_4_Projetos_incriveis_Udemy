<?php
    require_once "templates/header.php";
    require_once "models/User.php";
    require_once "dao/UserDAO.php";

    $user = new User();
    $userDao = new UserDAO($conn, $BASE_URL);

    $userData = $userDao->verifyToken(true);

    $fullName = $user->getFullName($userData);
?>

    <div id="main-container" class="container-fluid">
        <div class="col-md-12">
            <form action="<?= $BASE_URL ?>user_process.php" method="post">
                <input type="hidden" name="type" value="update">
                <div class="row">
                    <div class="col-md-4">
                        <h1><?= $fullName ?></h1>
                        <p class="page-description">Formulário de alteração de dados:</p>
                        <div class="form-group">
                            <label for="name">Nome:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Digite o seu nome" value="<?= $userData->name ?>">
                        </div>

                        <div class="form-group">
                            <label for="lastname">Sobrenome:</label>
                            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Digite o seu sobrenome" value="<?= $userData->lastname ?>">
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" id="email" class="form-control disabled" placeholder="Endereço de E-mail" value="<?= $userData->email ?>" readonly>
                        </div>
                        <input type="submit" class="btn form-btn" value="Modificar">
                    </div>

                    <div class="col-md-4">
                        <div id="profile-image-container" style="background-image: url('');"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php
    require_once "templates/footer.php";
?>