<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img src="smartwatch.jpg" alt="" />
                    <h5 class="card-title">Smartwatch</h5>
                    <p class="card-text">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non
                        rerum accusantium sint recusandae tempora officia, delectus...
                    </p>
                    <form action="carrito.php?nombre=Smartwatch" method="POST">
                        <label>Smartwatch</label>
                        <p>Cantidad:
                            <input type="text" name="cantidad" size="2">
                        </p>
                        <button type="submit" class="btn btn-warning ">Añadir</button>
                        <button type="button" class="btn btn-secondary">
                                <a href="index_compra.html">Volver al catálogo</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>