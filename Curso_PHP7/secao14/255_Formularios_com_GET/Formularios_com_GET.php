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
            <label for="nome">Nome: </label>   
            <input type="text" name="nome" placeholder="Preencha o seu nome">
        </div>
        <div>   
            <label for="idade">Idade: </label> 
            <input type="number" name="idade" placeholder="0" size="3" min="0"> Anos
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>
