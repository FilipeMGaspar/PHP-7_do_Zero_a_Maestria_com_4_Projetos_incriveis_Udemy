<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de ponto para cadastrar horário de entrada e saída - Celke</title>
</head>
<body>
    <h2>Registar ponto</h2>

    <br>
    <p id="horario"><?php echo date("d/m/Y H:i:s"); ?></p>

    <a href="registar_ponto.php">Registar</a>

  <script >
        var apHorario = document.getElementById("horario")

        function atualizarHorario () {
        var data = new Date().toLocaleString("pt-PT", {
                timeZone: "Europe/Lisbon"
        })

        var formatarData = data.replace(", ", " - ")
        apHorario.innerHTML = formatarData
        }

        setInterval(atualizarHoratio, 1000)
  </script>
</body>
</html>