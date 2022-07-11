var apHorario = document.querySelector("#horario")

function atualizarHoratio () {
  var data = new Date().toLocaleDateString("pt-pt", {
        timeZone: "Europe/Lisbon"
   })

   let formatarData = data.replace(", ", " - ")
   apHorario.innerHTML = formatarData
}

setInterval(atualizarHoratio, 1000)