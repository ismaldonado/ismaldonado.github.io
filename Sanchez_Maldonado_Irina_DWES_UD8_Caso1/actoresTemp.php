<?php
include "thronesDB.php";
//Crear el objeto de conexion
$trono = new Thrones();
//Comprobar que llega la variable conferencia
if (isset($_POST["episode"])) {
    //Recuoperar los equipos y sus conferencias
    $resultado = $trono->listadoActEp($_POST["episode"]);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos.css">
        <title>Document</title>
    </head>

    <body>
        <div class="tabla">
            <table border="1">
                <tr>
                    <th>Nombre</th>
                    <th>Capítulo</th>
                </tr>
                <?php
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila["name"] . "</td>";
                    echo "<td>" . $fila["episode"] . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </body>

    </html>
<?php
}
?>