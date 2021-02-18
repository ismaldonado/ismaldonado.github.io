<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- inicio ejercicio 1 -->
    <!-- <form action="filtrado2.php" id="filtrado2" method="POST">
        <label for="filtrado2.php">Equipo Local: </label>
        <input type="text" name="equipo_local">
        <input type="submit" value="Filtrar">
    </form> -->
    <!-- fin ejercicio 1-->

    <!-- inicio ampliación 1 -->
    <!-- <form action="filtrado2.php" id="filtrado2" method="POST">
        <label for="equipo_local">Equipo Local: </label>
        <input type="text" name="equipo_local">
        <br>
        <br>
        <label for="equipo_visitante">Equipo Visitante</label>
        <input type="text" name="equipo_visitante">
        <br>
        <br>
        <label for="temporada">Temporada</label>
        <input type="text" name="temporada">
        <br><br>
        <input type="submit" value="Filtrar">
    </form> -->
    <!-- fin ampliación 1 -->

    <!-- inicio ampliación 2 -->
    <form action="filtrado2.php" id="filtrado2" method="POST">
        <label for="equipo_local">Equipo Local: </label>
        <span>
            <select name="equipo_local" id="equipo_local">
                <?php include 'nba_db.php';
                // Creamos una instancia de la clase nba_db, para llamar a sus métodos.
                $nba = new nba_db();
                $resultados = $nba->devolverEquipos();
                while ($datos = $resultados->fetch_assoc()) {
                    echo "<option value='" . $datos['Nombre'] . "'>" . $datos['Nombre'] . "</option>";
                }

                ?>
            </select>
        </span>
        <br>
        <br>
        <label for="equipo_visitante">Equipo Visitante</label>
        <span>
            <select name="equipo_visitante" id="equipo_visitante">
                <?php
                $resultados = $nba->devolverEquipos();
                while ($datos = $resultados->fetch_assoc()) {
                    echo "<option value='" . $datos['Nombre'] . "'>" . $datos['Nombre'] . "</option>";
                }

                ?>
            </select>
        </span>
        <br>
        <br>
        <label for="temporada">Temporada</label>
        <span>
            <select name="temporada" id="temporada">
                <?php
                $resultados = $nba->devolverTemporadas();
                while ($datos = $resultados->fetch_assoc()) {
                    echo "<option value='" . $datos['temporada'] . "'>" . $datos['temporada'] . "</option>";
                }

                ?>
            </select>
        </span>
        <br><br>
        <input type="submit" value="Filtrar">
    </form>
    <!-- fin ampliación 2 -->
</body>

</html>