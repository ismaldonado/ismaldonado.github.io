<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos2.css">
    <title>Listado de actores</title>
</head>

<body>

    <?php
    include "thronesDB.php";
    //se crea el objeto de la conexión
    $trono = new Thrones();
    //mostrar la lista de actores
    $resultado = $trono->listadoActores();
    ?>
    <div class="tabla">
    <table border="1">
        <tr>
            <th>Personaje</th>
            <th>Actor</th>
        </tr>

        <?php
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $fila['serie_name'] . "</td>";
            echo "<td>" . $fila['name'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    </div>
</body>

</html>