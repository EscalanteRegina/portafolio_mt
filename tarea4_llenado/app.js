function registrar(){
  var nombre = document.getElementById("nombre").value.trim();
  var correo = document.getElementById("correo").value.trim();
  var interesesSel = document.querySelectorAll('input[name="interes"]:checked');
  var generoEl = document.querySelector('input[name="genero"]:checked');
  var fechaHora = document.getElementById("fechaHora").value;
  var color = document.getElementById("color").value;
  var nivel = document.getElementById("nivel").value;


  if (nombre === "") { alert("Nombre vacío. Debe llenar el campo."); return; }
  if (correo === "") { alert("Correo vacío. Debe llenar el campo."); return; }
  if (interesesSel.length === 0) { alert("Seleccione al menos un interés (checkbox)."); return; }
  if (!generoEl) { alert("Seleccione un género (radio)."); return; }
  if (fechaHora === "") { alert("Fecha y hora vacías. Debe llenar el campo."); return; }
  if (color === "") { alert("Color vacío. Debe seleccionar un color."); return; }
  if (nivel === "") { alert("Nivel vacío. Debe seleccionar un valor en el rango."); return; }

  var intereses = "";
  for (var i = 0; i < interesesSel.length; i++) {
    intereses += interesesSel[i].value;
    if (i < interesesSel.length - 1) intereses += ", ";
}

  var genero = generoEl ? generoEl.value : "";

  var fila = "<tr>"
    + "<td>" + nombre + "</td>"
    + "<td>" + correo + "</td>"
    + "<td>" + intereses + "</td>"
    + "<td>" + genero + "</td>"
    + "<td>" + fechaHora + "</td>"
    + "<td>" + color + "</td>"
    + "<td>" + nivel + "</td>"
    + "</tr>";

  document.getElementById("cuerpo").innerHTML += fila;

  document.getElementById("formulario").reset();
}
