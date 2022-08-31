<?php
    require_once "templates/header.php";
    require_once "models/User.php";
    require_once "dao/UserDAO.php";

    $user = new User();
    $userDao = new UserDAO($conn, $BASE_URL);

    $userData = $userDao->verifyToken(true);

    $fullName = $user->getFullName($userData);

    if($userData->image == "") {
        $userData->image = "user.png";
    }
?>

    <div id="main-container" class="container-fluid edit-profile-page">
        <div class="col-md-12">
            <form action="<?= $BASE_URL ?>user_process.php" method="post" enctype="multipart/form-data">
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

                        <input type="submit" class="btn card-btn" value="Modificar">
                    </div>

                    <div class="col-md-4">
                        <div id="profile-image-container" style="background-image: url('<?= $BASE_URL ?>img/users/<?= $userData->image ?>');"></div>

                        <div class="form-group">
                            <label for="image">Foto:</label>
                            <input type="file" name="image" class="form-control-file">
                        </div>

                        <div class="form-group">
                            <label for="bio">Sobre mim:</label>
                            <textarea class="form-control" name="bio" id="bio" rows="5" placeholder="Curiosidades, hobbies, onde trabalho... "><?= $userData->bio ?></textarea>
                        </div>
                    </div>
                </div>
            </form>

            <div class="row" id="change-password-container">
                <div class="col-md-4">
                    <h2>Alteração da Password:</h2>
                    <p class="page-description">Digite a nova password, confirme para alterar.</p>
                    
                    <form action="<?= $BASE_URL ?>user_process.php" method="post">
                        <input type="hidden" name="type" value="changepassword">

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Digite a nova password">
                        </div>

                        <div class="form-group">
                            <label for="confirmpassword">Confirme a Password:</label>
                            <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Confirme a password">
                        </div>

                        <input type="submit" class="btn card-btn" value="Alterar Password">
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
    require_once "templates/footer.php";
?>