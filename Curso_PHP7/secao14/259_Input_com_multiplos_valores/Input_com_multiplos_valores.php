<?php
    if(isset($_POST['ingredientes'])) {
        $ingredientes = $_POST['ingredientes'];
        print_r($ingredientes);
        echo "<br><br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input com múltiplos valores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="Input_com_multiplos_valores.php" method="post">
        <div>
            <input type="checkbox" name="ingredientes[]" id="ingredientes" value="Tomate"> Tomate
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" id="ingredientes" value="Abóbora"> Abóbora
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" id="ingredientes" value="Feijão"> Feijão
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" id="ingredientes" value="Alface"> Alface
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" id="ingredientes" value="Cebola"> Cebola
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>