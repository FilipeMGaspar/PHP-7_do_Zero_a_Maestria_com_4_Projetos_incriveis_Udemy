<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>255. Formulários com GET</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="processamento.php" method="get">
        <div>    
            <input type="text" name="nome" placeholder="Preencha o seu nome">
        </div>
        <div>    
            <input type="number" name="idade" placeholder="Digite a sua idade">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>
