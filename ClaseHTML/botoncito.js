function imprimir() {
  var valor = document.getElementById("lista");
  var opcion = valor.options[valor.selectedIndex].value;
  //alert("PRUEBA "+opcion);
  document.getElementById("resultado").innerHTML = opcion;
}
