
var contador = 0;
var ciudades = new Array(2643743, 3173435, 2267057, 2988507, 3117735);

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


function tiempo() {
  var ciudadId = document.getElementById("resultado").value;
  var esFormatoInvalido = isNaN(ciudadId);

  if (this.ciudades.indexOf(parseInt(ciudadId)) > -1 && contador < 3) {
    getWeatherByCityId(parseInt(ciudadId));
    this.contador++;
  } else if (esFormatoInvalido) {
    document.getElementById("resultado").value = "Formato no válido";
  } else {
    alert("Codigo no valido. Inserte una de las ciudades listadas.");
  }
  if (this.contador == 3) {
    alert("Al hacer click en Aceptar la ventana se cerrará en 5 segundos!!");
    setTimeout(() => {
      window.close();
    }, 5000);
  }
}

// reinicia la calculadora
function reset() {
  document.getElementById("resultado").value = "";
}
