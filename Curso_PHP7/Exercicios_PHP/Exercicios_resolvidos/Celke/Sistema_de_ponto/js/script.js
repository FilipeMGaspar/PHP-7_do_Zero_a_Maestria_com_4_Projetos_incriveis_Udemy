var apHorario = document.querySelector("#horario");

function atualizarHorario() {
   var data = new Date().toLocaleString("pt-Pt", {
        timeZone: "Europe/Lisbon"
   });

   var formatarData = data.replace(", ", " - ");
   apHorario.innerHTML = formatarData;
}

setInterval(atualizarHoratio, 1000);