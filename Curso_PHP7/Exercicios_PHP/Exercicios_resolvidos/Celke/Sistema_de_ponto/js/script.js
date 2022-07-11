var apHorario = document.getElementById("horario")

function atualizarHorario () {
   var data = new Date().toLocaleString("pt-pt", {
        timeZone: "Europe/Lisbon"
   })

   var formatarData = data.replace(", ", " - ")
   apHorario.innerHTML = formatarData
}

setInterval(atualizarHoratio, 1000)