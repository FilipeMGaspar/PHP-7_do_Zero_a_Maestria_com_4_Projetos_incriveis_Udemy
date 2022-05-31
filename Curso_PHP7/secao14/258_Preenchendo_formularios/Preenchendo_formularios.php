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
</head>
<body>
    <form action="">
        <div>
            <input type="text" name="nome" placeholder="Digite o seu nome">
        </div>
    </form>
</body>
</html>