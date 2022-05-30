<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários com POST</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <form action="cadastro.php" method="post">
        <div>
            <input type="text" name="marca" placeholder = "Marca do Carro">
        </div>
        <div>
            <input type="number" name="preco" placeholder="0.00€" min=0  step="0.01" size=7> €
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="Teto panorâmico">
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="Ar condicionado">
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="Jantes Liga Leve">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>    
</body>
</html>