<?php
    if(isset($_FILES)){
        print_r($_FILES);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de arquivos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="Upload_de_arquivos.php" method="post" enctype="multipart/form-data">
        <div>
            <input type="file">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>