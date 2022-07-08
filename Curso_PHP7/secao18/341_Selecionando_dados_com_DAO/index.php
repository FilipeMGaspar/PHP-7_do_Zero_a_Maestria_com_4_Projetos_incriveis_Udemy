<?php
    require_once "db.php";

?>

<h1>Insira um carro:</h1>
<form action="process.php" method="post">
    <div>
        <label for="brand">Marca: </label>
        <input type="text" name="brand" placeholder="Marca do carro">
    </div>

    <div>
        <label for="km">Kilometragem: </label>
        <input type="text" name="km" placeholder="Insira a Kilometragem">
    </div>

    <div>
        <label for="color">Cor: </label>
        <input type="text" name="color" placeholder="Cor do carro">
    </div>

    <input type="submit" value="guardar">
</form>