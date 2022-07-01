<?php
   require_once "templates/header.php";
?>
    <div class="container">
    <?php require_once "templates/backbtn.php"; ?>
        <h1 id="main-title">Edição de contato</h1>

        <form action="<?= $BASE_URL ?>config/process.php" method="post" id="create-form">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $contact['id'] ?>">
           
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Digite o nome"  value="<?= $contact['name']?>" required>
            </div>

            <div class="form-group">
                <label for="phone">Telefone:</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Digite o telefone"  value="<?= $contact['phone'] ?>" required>
            </div>

            <div class="form-group">
                <label for="observations">Observações:</label>
                <textarea type="text" name="observations" id="observations" class="form-control" placeholder="Insira observações" rows="3"></textarea>
            </div>

            <button id="btn_forms" type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
<?php
    require_once "templates/footer.php";
?>