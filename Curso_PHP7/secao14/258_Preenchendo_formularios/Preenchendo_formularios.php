<?php
    $usuario = [
        'nome' => "Filipe",
        'idade' => 37,
        'profissao' => "Sapateiro"
    ];

    if($usuario){
        $nome = $usuario['nome'];
        $idade = $usuario['idade'];
        $profissao = $usuario['profissao'];
    }
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preenchendo formulários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="">
        <div>
            <input type="text" name="nome" placeholder="Digite o seu nome" value="<?=$nome ?>">
        </div>
        <div>
            <input type="number" min=0 step=1 placholder=0 value="<?=$idade ?>">
        </div>
        <div>
            <input type="text">
        </div>
    </form>
</body>
</html>