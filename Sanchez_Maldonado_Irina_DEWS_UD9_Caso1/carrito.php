<?php
$productos = array();
$html = '';


if (isset($_GET['vaciar'])) {
    unset($_COOKIE['productos']);
}

if (isset($_COOKIE['productos'])) {
    $productos = unserialize($_COOKIE['productos']);
}

//si las vables están declaradas
if (isset($_GET['nombre']) && isset($_POST['cantidad'])) {
    $ultimaPosicion = count($productos);
    $yaHay = false;

    // si el carro está vacío, se añade el producto al array
    if ($productos == []) {
        $productos[$ultimaPosicion]['nombre'] = $_GET['nombre'];
        $productos[$ultimaPosicion]['cantidad'] = $_POST['cantidad'];
    // si no, se recorre el array para comprobar si hay productos previos del mismo tipo, modificando la cantidad
    } else {
        foreach ($productos as $key => $value) {
            if ($_GET['nombre'] == $value['nombre']) {
                $productos[$key]['cantidad'] = $_POST['cantidad'];
                $yaHay = true;
            }
    // si el producto anterior y el actual son diferentes, se añade al carro
        }
        if ($yaHay == false) {
            $productos[$ultimaPosicion]['nombre'] = $_GET['nombre'];
            $productos[$ultimaPosicion]['cantidad'] = $_POST['cantidad'];
        }
    }
}

setcookie("productos", serialize($productos), time() + (60 * 60 * 24));

foreach ($productos as $key => $value) {
    $html .= '<tr>';
    $html .= '<td>' . $value['nombre'] . '</td><td>' . $value['cantidad'] . '</td>';
    $html .= '</tr>';
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
            <h2>Productos en el carrito: </h2>
                <div class="card-body">
                    <table style="width:300px;">
                        <tr>
                            <td><b>Tipo de producto</b></td>
                            <td><b>Cantidad</b></td>
                        </tr>
                        <?php echo $html; ?>
                    </table>
                    <button type="button" class="btn btn-dark">
                        <a href="index_compra.html">Volver al catálogo</a>
                    </button>
                    <button type="button" class="btn btn-dark">
                        <a href="carrito.php?vaciar=1">Vaciar carrito</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>