<?php
  include "./modelo/clubbasquet.php";

 $dbConnetion =  new clubbasquet();

 //distinguimos el tipo de peticion 
 $requestMode = $_SERVER['REQUEST_METHOD']; 
 if($requestMode == "GET") { 
   $result = $dbConnetion->devolverJugador();
   echo json_encode($result); 
  } elseif($requestMode == "POST") { 
    $result = $dbConnetion->crearJugador($_REQUEST['nombreJugador'], $_REQUEST['posicion'], $_REQUEST['numero'], $_REQUEST['edad']);
    echo json_encode($result); 
  } elseif($requestMode == "PUT") { 
    $result = $dbConnetion->modificarJugador($_REQUEST['id'], $_REQUEST['nombreJugador'], $_REQUEST['posicion'], $_REQUEST['numero'], $_REQUEST['edad']); 
    echo json_encode($result); 
  } elseif($requestMode == "DELETE") {  
    $result = $dbConnetion->borrarJugador($_REQUEST['id']); 
    echo json_encode($result);
   } else { 
     echo json_encode(["resultado"=>"Fallo"]); 
  }
?>