<?php
   require_once "templates/header.php";
?>
    <div class="container">
    <?php require_once "templates/backbtn.php"; ?>
        <h1 id="main-title">Adicionar novo contato</h1>

        <form action="<?= $BASE_URL ?>config/process.php" method="post">
            <input type="hidden" name="type" value="create">
           
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Digite o seu nome" require>
            </div>

            <button type="submit" class="btn btn-primary">Adicionar</button>
        </form>
    </div>
<?php
    require_once "templates/footer.php";
?>