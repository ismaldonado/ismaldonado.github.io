<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    include "nba_db.php";
    //crear el objeto de conexión 
    $nba = new nba_db();
    //comprobar que llega la vable conferencia
    if (isset($_POST["equipo_local"], $_POST["equipo_visitante"], $_POST["temporada"])) {
        //Ejercicio 1: devuelve el 
        /* $resultado = $nba->devolverPuntosLocal($_POST["equipoLocal"]); ?> */
        $resultado = $nba->devolverResultados($_POST["equipo_local"], $_POST["equipo_visitante"], $_POST["temporada"]); ?>
        <?php if ($resultado != null) { ?>
            <!-- esqueleto info -->
            <table border="1">
                <tr>
                    <th>Equipo Local</th>
                    <th>Equipo Visitante</th>
                    <th>Puntos Local</th>
                    <th>Puntos Visitante</th>
                    <th>Temporada</th>
                </tr>
                <?php
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila['equipo_local'] . "</td>";
                    echo "<td>" . $fila['equipo_visitante'] . "</td>";
                    echo "<td>" . $fila['puntos_local'] . "</td>";
                    echo "<td>" . $fila['puntos_visitante'] . "</td>";
                    echo "<td>" . $fila['temporada'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
    <?php
        } else {
            echo "Fallo en la conexión o problema con los campos";
        }
    } ?>
</body>

</html>