<?php
# 01.DATOS
//Cargamos un array multidimensional (funciona como mini-base de datos) con todos los productos que vende nuestra tienda
include 'datos.php';

// Cantidad total de productos (9)
$productosTotales = count($productos);

# Obtenemos valor de GET
// www.miamazon.com/?producto=1;

// comprobamos que el valro de GET producto es correcto
// no está vacío
// no es menor de 0
// no es mayor que la cantidad de elementos que tenemos en al lista
// en el caso de que no exista/no sea un numero adecuado carga por defecto el primer producto.

if (isset($_GET['producto']) && $_GET['producto'] < $productosTotales && $_GET['producto'] >= 0) {
    $numeroProducto = $_GET['producto'];
} else {
    $numeroProducto = 0;
}

# Empaquetar Datos:
//almacenamos en variables cada uno de los valores de titulo, precio, img...
$nombreProducto = $productos[$numeroProducto][0];
$precio = $productos[$numeroProducto][1];
$imagen = $productos[$numeroProducto][2];
$categoria = $productos[$numeroProducto][3];
$descripcion = $productos[$numeroProducto][4];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nombreProducto ?> - mi amazon</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <a href="index.php">Volver al catálogo</a>
</header>
    <main>
        <div>
            <p>Categoria: <?= $categoria ?> | <?= $nombreProducto ?></p>
            <h1><?php echo $nombreProducto; ?></h1>
            <p>Descripcion: <?= $descripcion ?></p>
            <p>Precio sin IVA: <?php echo $precio; ?>€</p>
            <p>IVA 18%: <?php echo ($precio * 0.18); ?>€</p>
            <p>Precio con IVA: <?php echo ($precio + ($precio * 0.18)); ?>€</p>
            <p>TOTAL descuento 5%: <?php echo ($precio + ($precio * 0.18)) - ($precio * 0.05); ?>€</p>
            <button>Añadir al carrito</button>
        </div>
        <div>
            <img src="img/<?= $imagen ?>" alt="<?= $nombreProducto ?>">
        </div>
    </main>

</body>

</html>