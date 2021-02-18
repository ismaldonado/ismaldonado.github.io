<?php
include "db.php";

class clubbasquet extends db
{

    function __construct() { 
        parent::__construct(); 
    }


    public function devolverJugador()
    {
        $respuesta = [];
        $resultado = $this->findAll("SELECT * FROM equipo");

        if (!$resultado) {
            echo "no se ha podido devolver la información. ";
            return false;
        }

        while($fila = $resultado->fetch_assoc()) {
            array_push($respuesta, $fila);
        }
        return $respuesta;
    }

    public function crearJugador($nombreJugador, $posicion, $numero, $edad)
    {
        $query = "INSERT INTO equipo (nombreJugador, posicion, numero, edad) VALUES ('".$nombreJugador."', '".$posicion."', '".$numero."', '".$edad."')";
        $resultado = $this->create($query);

        if (!$resultado) {
            echo "no se ha podido crear el registro. ";
            return false;
        }

        return true;
    }

    public function modificarJugador($id, $nombreJugador, $posicion, $numero, $edad)
    {
        $query = "update equipo set nombreJugador='".$nombreJugador."', posicion='".$posicion."', numero='".$numero."', edad='".$edad."' where id=".$id;
        $resultado = $this->update($query);

        if (!$resultado) {
            echo "no se ha podido actualizar el registro. "; 
            return false;
        }
        return true;
    }

    public function borrarJugador($id)
    {
        $query = "DELETE FROM equipo WHERE id=".$id;
        $resultado = $this->remove($query);

        if (!$resultado) {
            echo "no se ha podido borrar el registro. "; 
            return false;
        }
        return true;
    }
}
?>
