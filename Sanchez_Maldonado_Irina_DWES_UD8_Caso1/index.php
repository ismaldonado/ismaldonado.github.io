<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>

<body>
    <div class="bloque">
        <div class="caja">
            <div class="h1">
                <h1>Juego de Tronos</h1>
            </div>
            <button type="button" class="btn btn-dark"><a href="actores.php">Actores de Juego de Tronos</a></button>
            <div class="formulario">
                <form action="actoresTemp.php" id="formulario" method="POST">
                    <label for="formulario">Selecciona el capítulo para ver los actores participantes: </label>
                    <span>
                        <select name="episode" id="episode">
                            <?php for ($i = 1; $i <= 10; $i++) {
                                echo "<option value ='" . $i . "'>Capítulo " . $i . "</option>";
                            } ?>
                        </select>
                    </span>
                    <input type="submit" value="Enviar"  class="btn btn-dark">
                </form>
            </div>
            <div class="resumen">
                <p>Resumen:</p>
                <?php
                include "thronesDB.php";
                //se crea objeto de conexion
                $trono2 = new Thrones();
                $resultado2 = $trono2->devolverResumen();
                while ($fila = $resultado2->fetch_assoc()) {
                    echo $fila['plot'];
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>