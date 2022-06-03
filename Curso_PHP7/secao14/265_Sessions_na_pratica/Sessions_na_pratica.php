<?php    
    session_start();

    //print_r($_SESSION);

    $_SESSION['nome'] = "Filipe";
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions na prática</title>
</head>
<body>
    <h1>Olá Session!</h1>
    <p><a href="paginaSession.php">Entrar</a></p>
</body>
</html>