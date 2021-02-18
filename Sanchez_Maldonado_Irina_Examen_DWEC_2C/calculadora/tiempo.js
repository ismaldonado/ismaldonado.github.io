const API_KEY = "0ee0270051725bcbb12ffc57d8b3c260";
const BASE_PATH = "http://api.openweathermap.org/data/2.5";

var weather = {};

function getWeatherByCityName(name) {
  if (name) {
    var request = new XMLHttpRequest();
    request.open(
      "GET",
      BASE_PATH + "/weather?q=" + name + "&appid=" + API_KEY,
      true
    );
    request.onreadystatechange = function () {
      if (request.readyState == 4) {
        if (request.status == 200) {
          var response = JSON.parse(request.responseText);
          if (response) {
            showData(
              response.main.temp,
              response.main.humidity,
              response.wind.speed,
              response.visibility,
              response.main.feels_like
            );
          }
        } else {
          console.log("Error loading page\n");
        }
      }
    };
    request.send(null);
  }
}

function getWeatherByCityId(id) {
  if (id) {
    var request = new XMLHttpRequest();
    request.open(
      "GET",
      BASE_PATH + "/weather?id=" + id + "&appid=" + API_KEY,
      true
    );
    request.onreadystatechange = function () {
      if (request.readyState == 4) {
        if (request.status == 200) {
          var response = JSON.parse(request.responseText);
          if (response) {
            weather = {
              temperatura: response.main.temp,
              humedad: response.main.humidity,
              viento: response.wind.speed,
              visibilidad: response.visibility,
              sensacion_termica: response.main.feels_like,
            };
            showData();
          }
        } else {
          console.log("Error loading page\n");
        }
      }
    };
    request.send(null);
  }
}

function showData() {
    console.log(weather);
  document.getElementById("temperatura").innerHTML =
    "Temperatura: " + weather.temperatura + " ºF";
  document.getElementById("humedad").innerHTML =
    "Humedad: " + weather.humedad + " g/m3";
  document.getElementById("viento").innerHTML =
    "Velocidad viento: " + weather.viento + " kms/h";
  document.getElementById("visibilidad").innerHTML =
    "Visibilidad: " + weather.visibilidad+ " m";
  document.getElementById("sensacion_termica").innerHTML =
    "Sensación térmica: " + weather.sensacion_termica + " ºF";
    document.getElementById("datos").style.visibility = "visible";
}
