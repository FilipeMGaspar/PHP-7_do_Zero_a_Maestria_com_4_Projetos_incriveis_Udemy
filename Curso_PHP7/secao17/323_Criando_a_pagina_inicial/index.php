<?php
   require_once "templates/header.php";
?>
   
   <div class="container">
        <?php if(isset($printMsg) && $printMsg != ""): ?>
           <p id="msg"><?= $printMsg ?></p> 
        <?php endif; ?>
        
        <h1 id="main-title">A Minha Agenda</h1>
        
        <?php if(count($contacts) > 0): ?>
            <p>Tem contatos</p>
        <?php else: ?>
            <p id="empty-list-text">A sua agenda ainda não possui contatos. <a href="<?= $BASE_URL ?>create.php"></a></p>    
        <?php endif; ?>
    </div>

<?php
    require_once "templates/footer.php";
?>