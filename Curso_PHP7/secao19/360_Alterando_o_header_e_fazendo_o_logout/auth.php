<?php
    require_once "templates/header.php";
?>
    <!-- Formulário de LogIn -->
    <div id="main-container" class="container-fluid">
        <div class="col-md-12">
            <div class="row" id="auth-row">
                <div class="col-md-4" id="login-container">
                    <h2>Entrar</h2>
                    <form action="" method="post">
                        <input type="hidden" name="type" value="login">
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Digite o seu email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Digite a sua password" require>
                        </div>

                        <input type="submit" value="Entrar" class="btn card-btn">
                    </form>
                </div>

                <!-- Formulário de Registo -->
                <div class="col-md-4" id="register-container">
                    <h2>Criar conta</h2>
                    <form action="<?= $BASE_URL ?>auth_process.php" method="post">
                        <input type="hidden" name="type" value="register">

                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Digite o seu email" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Nome:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Digite o seu nome" required>
                        </div>

                        <div class="form-group">
                            <label for="lastname">Sobrenome:</label>
                            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Digite o seu sobrenome" required>
                        </div>

                        
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Digite a sua password" require>
                        </div>

                        <div class="form-group">
                            <label for="confirmpassword">Confirme a Password:</label>
                            <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Confirme a sua password" require>
                        </div>

                        <input type="submit" value="Registar" class="btn card-btn">
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
    require_once "templates/footer.php";
?>