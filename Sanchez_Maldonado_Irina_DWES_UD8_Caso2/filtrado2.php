<?php
    include "nba_db.php";
    //crear el objeto de conexión 
    $nba = new nba_db();
//-----------Ejercicio 1: devolver los puntos del equipo local introducido---------
    //comprobar que llega la vable equipo_local
    if (isset($_POST["equipo_local"])) {
        $resultado = $nba->devolverPuntosLocal($_POST["equipo_local"]);
         if ($resultado != null) { ?>
            <!-- esqueleto info -->
            <table border="1">
                <tr>
                    <th>Equipo Local</th>
                    <th>Puntos Local</th>
                </tr>
                <?php
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila['equipo_local'] . "</td>";
                    echo "<td>" . $fila['puntos_local'] . "</td>";
                    echo "<tr>";
                }
                ?>
            </table>
            <?php
        } else {
            echo "Fallo en la conexión o problema con los campos";
        }
    } 
?>
<!-- Fin del ejercicio 1 -->

<!-- Ampliación 1 y 2 -->
<?php
    if (isset($_POST["equipo_local"], $_POST["equipo_visitante"], $_POST["temporada"])) {
        $resultado = $nba->devolverResultados($_POST["equipo_local"], $_POST["equipo_visitante"], $_POST["temporada"]);
         if ($resultado != null) { ?>
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
    } 
?>




