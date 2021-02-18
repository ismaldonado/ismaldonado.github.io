<!-- se  crea la clase  que guarda los atributos y cosas que permiten conectar con la bd -->

<?php
class nba_db
{
    //Atributos necesarios para la conexion
    private $host = "localhost";
    private $user = "root";
    private $pass = "admin";
    private $db_name = "nba_db";

    //Conector a la base de datos
    private $mysqli;
    private $error = false;

    public function __construct() //indica cómo será el objeto y qué atributos tiene
    {
        $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
        if ($this->mysqli->connect_errno) {
            $this->error = true; //si da error devuelve true
        }
    }

    //ejercicio 1
    public function devolverPuntosLocal($equipo_local)
    {
        if ($this->error == false) {
            $resultado = $this->mysqli->query("SELECT equipo_local, puntos_local FROM partidos WHERE equipo_local = '" . $equipo_local . "'");
            return $resultado;
        } else {
            return null;
        }
    }


    // Ampliación 1
    public function devolverResultados($equipo_local, $equipo_visitante, $temporada)
    {
        if ($this->error == false && !empty($equipo_local) && !empty($equipo_visitante) && !empty($temporada)) {
            $resultado = $this->mysqli->query(
                "SELECT * FROM partidos 
                    where equipo_local = '" . $equipo_local . "' 
                        AND equipo_visitante = '" . $equipo_visitante . "'
                        AND temporada = '" . $temporada . "'"
            );
            return $resultado; //y devuelve el resultado
        } else {
            return null;
        }
    }

    // Ampliación 2
    public function devolverEquipos()
    {
        if ($this->error == false) {
            $resultado = $this->mysqli->query("SELECT Nombre FROM equipos;");
            return $resultado; //y devuelve el resultado
        } else {
            return null;
        }
    }

    public function devolverTemporadas()
    {
        if ($this->error == false) {
            $resultado = $this->mysqli->query("SELECT DISTINCT temporada FROM partidos;");
            return $resultado; //y devuelve el resultado
        } else {
            return null;
        }
    }
}
?>