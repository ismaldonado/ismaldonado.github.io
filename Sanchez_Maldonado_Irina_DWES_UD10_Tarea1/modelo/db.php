<?php
class db
{
    //Atributos necesarios para la conexion
    private $host = "localhost";
    private $user = "root";
    private $pass = "admin";
    private $db_name = "clubbasket";

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

    public function findAll($query)
    {
        if ($this->error == false) {
            $resultado = $this->mysqli->query($query);
            return $resultado;
        } else {
            return null;
        }
    }

    public function create($query)
    {
        if ($this->error == false) {
            $resultado = $this->mysqli->query($query);
            return $resultado;
        } else {
            return null;
        }
    }

    public function update($query)
    {
        if ($this->error == false) {
            $resultado = $this->mysqli->query($query);
            return $resultado;
        } else {
            return null;
        }
    }

    public function remove($query)
    {
        if ($this->error == false) {
            $resultado = $this->mysqli->query($query);
            return $resultado;
        } else {
            return null;
        }
    }
}
?>
