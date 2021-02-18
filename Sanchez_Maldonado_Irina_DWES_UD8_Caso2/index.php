<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Datos de la nba</title>
</head>

<body>
  <form action="filtrado.php" id="formulario" method="POST">
    <label for="formulario">Equipo local</label>
      <select name="equipo_local" id="equipo_local">
      <?php include "nba_db.php";
      //se crea objeto de conexion
      $nba_db = new nba_db();
      $equipos = $nba_db->devolverEquipos();////PONER LAS OPCIONES DEL SELECT
      while ($equipo = $equipos->fetch_assoc()) {
        echo "<option value ='" . $equipo["Nombre"] . "'>" . $equipo["Nombre"] . "</option>";
      } ?>
      </select>
    <label for="formulario">Equipo visitante</label>
    <input type="text" id="equipo_visitante" name="equipo_visitante">
    <select name="equipo_visitante" id="equipo_visitante"></select>
    <label for="formulario">Temporada</label>
    <input type="text" id="temporada" name="temporada">
      <input type="submit" value="Filtrar">
  </form>
  </div>
</body>

</html>