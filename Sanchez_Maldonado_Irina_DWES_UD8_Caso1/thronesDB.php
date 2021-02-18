<!-- Creación de la clase -->

<?php
class Thrones
{
    //atributos para la conexión:
    private $host = "localhost";
    private $usuario = "root";
    private $contraseña = "admin";
    private $BD = "gameofthrones";

    //atributo conector:
    private $conexion;

    //atributo de control de errores
    private $error = false;


    //constructor 

    public function __construct()
    {
        $this->conexion = new mysqli($this->host, $this->usuario, $this->contraseña, $this->BD);
        if ($this->conexion->connect_errno) {
            $this->error = true;
        }
    }

    //función para saber si hay error en la conexión
    function hayError()
    {
        return $this->error;
    }


// función para listar a los actores que participan en la serie
    function listadoActores()
    {
        if ($this->error == false) {
            $resultado = $this->conexion->query("SELECT serie_name, name FROM cast");
            return $resultado;
        } else {
            return null;
        }
    }

// función para imprimir el resulmen de la serie almacenado en la tabla "titles"
    function devolverResumen()
    {
        if ($this->error == false) {
            $resultado = $this->conexion->query("SELECT plot FROM titles");
            return $resultado;
        } else {
            return null;
        }
    }

// función para mostrar los actores de cada episodio
    function listadoActEp($episode)
    {
        if ($this->error == false) {
            $resultado = $this->conexion->query("SELECT name, episode FROM season_ep WHERE episode = '" . $episode . "'");
            return $resultado;
        } else {
            return null;
        }
    }
    
}
?>