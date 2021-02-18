<?php
  include "./modelo/nba.php";

 $dbConnetion =  new nba();

 //distinguimos el tipo de peticion 
 $requestMode = $_SERVER['REQUEST_METHOD']; 
 if($requestMode == "GET") { 
   $result = $dbConnetion->devolverEquipos();
   echo json_encode($result); 
  } elseif ($requestMode == "POST") {
    if (isset($_REQUEST['nombre']) && isset($_REQUEST['ciudad']) && isset($_REQUEST['conferencia']) && isset($_REQUEST['division'])) {
      $result = $dbConnetion->crearEquipo($_REQUEST['nombre'], $_REQUEST['ciudad'], $_REQUEST['conferencia'], $_REQUEST['division']);
      echo json_encode($result);
    } else {
      echo json_encode("Debe introducir todos los parametros");
    }
  } elseif($requestMode == "PUT") { 
    if (isset($_REQUEST['nombre']) && isset($_REQUEST['ciudad']) && isset($_REQUEST['conferencia']) && isset($_REQUEST['division'])) {
      $result = $dbConnetion->modificarEquipo($_REQUEST['nombre'], $_REQUEST['ciudad'], $_REQUEST['conferencia'], $_REQUEST['division']);
      echo json_encode($result);
    } else {
      echo json_encode("Debe introducir todos los parametros");
    }
  } elseif($requestMode == "DELETE") { 
    if (isset($_REQUEST['nombre'])) {
      $result = $dbConnetion->borrarEquipo($_REQUEST['nombre']); 
      echo json_encode($result);
    } else {
      echo json_encode("Debe introducir todos los parametros");
    }
   } else { 
     echo json_encode(["resultado"=>"Fallo"]); 
  }
?>

  