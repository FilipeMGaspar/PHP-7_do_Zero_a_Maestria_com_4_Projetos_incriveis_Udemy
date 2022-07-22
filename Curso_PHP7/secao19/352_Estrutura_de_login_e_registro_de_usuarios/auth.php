<?php
    require_once "templates/header.php";
?>

    <div id="main-container" class="container-fluid">
        <div class="col-md-12">
            <div class="row" id="auth-row">
                <div class="col-md-4" id="login-container">
                    <h2>Entrar</h2>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Digite o seu email">
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Digite o seu email">
                        </div>
                    </form>
                </div>

                <div class="col-md-4" id="register-container">
                    <h2>Criar conta</h2>
                </div>
            </div>
        </div>
    </div>

<?php
    require_once "templates/footer.php";
?>