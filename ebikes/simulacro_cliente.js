

//Ejercicio número 1.

function piramide() {
  window.open('tarea1.html');
}

//---------------------------------------------------------------------------------------------------

//Ejercicio número 2. 

let valor = 200;
/* function validar() {
  let x = prompt("Introduce un número entero menor que 100.");
  if (x > 100) {
    alert("El número no es correcto. Usaré el que yo quiera.");

  } else {
    alert("Tu número es correcto");
    valor = x;
  }
} */

//comprueba si el número es correcto y si no, calcula uno aleatorio.
function validar() {
  let x = prompt("Introduce un número entero menor que 100.");
  if (x < 100 && x >= 0) {
    alert("Tu número es correcto");
    valor = x;
  } else {
    valor = Math.floor(Math.random() * 100);
    alert("El número no es correcto. Usaré el que yo quiera: " + valor);
  }
}


//-------------------------------------------------------------------------------------------------------

//Ejercicio número 3.

//Se calcula la fecha actual y se calcula la nueva sumando los días que corresponden al número del ejercicio anterior.
function calcularFecha() {
  let fechaActual = new Date(Date.now());
  fechaActual.setDate(fechaActual.getDate() + parseInt(valor));
  alert(fechaBonita(fechaActual));
}
//Trnasforma los milisegundos a formato día, mes, año.
function fechaBonita(fecha) {
  return fecha.getDate() + "-" + (fecha.getMonth() + 1) + "-" + fecha.getFullYear();
}
