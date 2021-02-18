var formulario = document.getElementById('formulario');
    nombre = formulario.nombre;
    apellido = formulario.apellido;
    email = formulario.email;
    fecha = formulario.fecha;
    color = formulario.color;
    error = document.getElementById('error');

function validarNombre(e){
	if (nombre.value == '' || nombre.value == null){
		error.style.display = 'block';
		error.innerHTML += '<li>Por favor completa el nombre</li>';
        console.log('Por favor completa el nombre');
        e.preventDefault();
		} else {
			error.style.display = 'none';
		}
    }

    function validarApellido(e){
        if (apellido.value == '' || apellido.value == null){
            error.style.display = 'block';
            error.innerHTML += '<li>Por favor introduce el apellido</li>';
            console.log('Por favor completa el apellido');
            e.preventDefault();
            } else {
                error.style.display = 'none';
            }
        }