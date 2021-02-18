<?php
include "db.php";

class nba extends db
{

    function __construct()
    { //De esta forma realizamos la conexion a la base de datos 
        parent::__construct();
    }

    public function devolverEquipos()
    {
        $respuesta = [];
        $resultado = $this->findAll("SELECT * FROM equipos");

        if (!$resultado) {
            echo "Error al devolver los equipos. ";
            return false;
        }

        while ($fila = $resultado->fetch_assoc()) {
            array_push($respuesta, $fila);
        }
        return $respuesta;
    }

    public function crearEquipo($nombre, $ciudad, $conferencia, $division)
    {
        $query = "INSERT INTO equipos (Nombre, Ciudad, Conferencia, Division) VALUES ('" . $nombre . "', '" . $ciudad . "', '" . $conferencia . "', '" . $division . "')";
        $resultado = $this->create($query);

        if (!$resultado) {
            
        }

        $equipoCreado = $this->devolverEquipo($nombre);
        return $equipoCreado;
    }

    public function modificarEquipo($nombre, $ciudad, $conferencia, $division)
    {
        $query = "UPDATE equipos SET Ciudad='" . $ciudad . "', Conferencia='" . $conferencia . "', Division='" . $division . "' WHERE Nombre='" . $nombre . "'";
        $resultado = $this->update($query);

        if (!$resultado) {
            echo "No se ha podido actualizar el registro. ";
            return false;
        }

        $equipoCreado = $this->devolverEquipo($nombre);
        return $equipoCreado;
    }

    public function borrarEquipo($nombre)
    {
        $query = "DELETE FROM equipos WHERE Nombre='" . $nombre . "'";
        $resultado = $this->remove($query);

        if (!$resultado) {
            echo "No se ha podido borrar el registro.";
            return $resultado;
        }
        return $resultado;
    }

    private function devolverEquipo($nombre)
    {
        $respuesta = [];
        $resultado = $this->findByNombre("SELECT * FROM equipos WHERE Nombre='" . $nombre . "'");

        if (!$resultado) {
            echo "No se ha encontrado el registro. ";
            return false;
        }

        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                array_push($respuesta, $fila);
            }
        }

        return $respuesta;
    }
}
