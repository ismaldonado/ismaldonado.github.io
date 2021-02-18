
// añade el valor del botón pulsado y lo muestra en la pantalla de la calculadora
function add(tecla) {
  var valor = document.getElementById("resultado").value;
  var resultado = valor + tecla;
  document.getElementById("resultado").value = resultado;
}

//al pulsar el igual, comprueba que:
  /* si la primeta tecla que se pulsa es igual, muestra un mensaje indicando que antes debe introducirse un valor numérico.
     si se pulsa un operador y después el igual, muestra el mismo mensaje que antes.
     si se introduce una operación de suma o resta en el orden normal (operando-operador-operando=) muestra el resultado de la operación*/
function calcular() {
  var pantalla = document.getElementById("resultado").value;
  if (pantalla == "") {
    var resultado = "Introduce un dígito antes";
    document.getElementById("resultado").value = resultado;
  } else if (
    pantalla == "+" ||
    pantalla == "-" ||
    pantalla == "*" ||
    pantalla == "/"  
  ) {
    var resultado = "Introduce un dígito antes";
    document.getElementById("resultado").value = resultado;
  } else {
    if (pantalla.indexOf("+") > -1) {
      var resultado = eval(pantalla);
    } else if (pantalla.indexOf("-") > -1) {
      var resultado = eval(pantalla);
    } else if (pantalla.indexOf("*") > -1 || pantalla.indexOf("/") > -1) {
      var resultado = "Operación no permitida";
    }
    document.getElementById("resultado").value = resultado;
  }
}

// reinicia la calculadora
function reset() {
  document.getElementById("resultado").value = "";
}
