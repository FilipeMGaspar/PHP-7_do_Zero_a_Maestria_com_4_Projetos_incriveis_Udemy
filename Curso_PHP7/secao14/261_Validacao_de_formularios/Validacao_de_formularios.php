<?php
    $validacoes = [];

    if(count($_POST) > 0) {

        if($_POST['nome'] === "") {
            $validacoes[] = "Por favor, preencha o seu nome";
        } 

        if($_POST['email'] === "") {
            $validacoes[] = "Por favor, preencha o e-mail";
        }

        /*if($_POST['senha'] === "" || $_POST['confimSenha'] === "") {
            $validacoes[] = "Os campos de senha devem ser preeenchidos";
        } */
        
        if($_POST['senha'] === $_POST['confimSenha']) {
            $validacao = "As Senhas devem coincidir!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de formulários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if(count($validacoes)): ?>
        <div class="valida">
            <ul>
                <?php foreach($validacoes as $validacao): ?>
                    <li><?=$validacao ?></li>
                <?php endforeach; ?>    
            </ul>
        </div>
    <?php endif; ?>    
    <form action="" method="post">
        <div>
            <input type="text" name="nome" id="nome" placeholder="Digite o seu nome">
        </div>
        <div>
            <input type="email" name="email" id="email" placeholder="Digite o seu email@mail.pt">
        </div>
        <div>
            <input type="password" name="senha" id="senha" placeholder="Digite a sua password">
        </div>
        <div>
            <input type="password" name="confimSenha" id="confimSenha" placeholder="Confirme a sua password">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>