const API_KEY = '0ee0270051725bcbb12ffc57d8b3c260';

function getWeatherByCityName(name) {
    if (name) {
        var request = new XMLHttpRequest();
        request.open('GET', 'http://api.openweathermap.org/data/2.5/weather?q=' + name + '&appid=' + API_KEY, true);
        request.onreadystatechange = function(aEvt) {
            if (request.readyState == 4) {
                if (request.status == 200) {
                    var response = JSON.parse(request.responseText);
                    if (response) {
                        showData(response.main.temp, response.main.humidity, response.wind.speed, response.visibility, response.main.feels_like);
                    }
                } else {
                    console.log("Error loading page\n");
                }
            }
        };
        request.send(null);
    }
}

function showData(temperatura, humedad, viento, visibilidad, sensacion_termica) {
    document.getElementById('temperatura').innerHTML = "Temperatura: " + temperatura + " ºF";
    document.getElementById('humedad').innerHTML = "Humedad: " + humedad + " g/m3";
    document.getElementById('viento').innerHTML = "Velocidad viento: " + viento+ " kms/h";
    document.getElementById('visibilidad').innerHTML = "Visibilidad: " + visibilidad;
    document.getElementById('sensacion_termica').innerHTML = "Sensación térmica: " + sensacion_termica+ " ºF";
    document.getElementById('datos').style.visibility = 'visible';
}