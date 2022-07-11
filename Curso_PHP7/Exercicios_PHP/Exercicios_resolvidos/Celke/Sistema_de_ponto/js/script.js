var apHorario = document.querySelector("#horario")

function atualizarHoratio () {
   new Date().toLocaleDateString("pt-pt", {
        timeZone: "Europe/Lisbon"
   })
}

setInterval(atualizarHoratio, 1000)