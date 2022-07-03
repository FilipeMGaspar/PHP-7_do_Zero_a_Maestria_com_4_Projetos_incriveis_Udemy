<?php
   require_once "templates/header.php";
?>
   
   <div class="container">
        <?php if(isset($printMsg) && $printMsg != ""): ?>
           <p id="msg"><?= $printMsg ?></p> 
        <?php endif; ?>
        
        <h1 id="main-title">A Minha Agenda</h1>
        
        <?php if(count($contacts) > 0): ?>
            <table class="table" id="contacts-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($contacts as $contact): ?>
                        <tr>
                            <td scope="row" class="col-id"><?= $contact["id"] ?></td>
                            <td scope="row"><?= $contact["name"] ?></td>
                            <td scope="row"><?= $contact["phone"] ?></td>
                            <td class="actions">
                                <a href="<?= $BASE_URL ?>show.php?id=<?= $contact["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                                <a href="<?= $BASE_URL ?>edit.php?id=<?= $contact["id"] ?>"><i class="far fa-edit edit-icon"></i></a>
                                <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p id="empty-list-text">A sua agenda ainda não possui contatos. <a href="<?= $BASE_URL ?>create.php">Adicionar novo contato</a>.</p>    
        <?php endif; ?>
    </div>

<?php
    require_once "templates/footer.php";
?>