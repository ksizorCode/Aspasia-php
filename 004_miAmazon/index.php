<?php
# 01.DATOS
//Cargamos un array multidimensional (funciona como mini-base de datos) con todos los productos que vende nuestra tienda
$producto = [

    //         1. Nombre producto           2.Precio 3.Foto                         4.Categoría     5.Descripción
/* 0 */ ["Fuente de gatos", 33, "fuente-gatos.jpg", "Mascotas", "Fuente para gatos de aluminio con filtro y capacidad para 4L."],
    /* 1 */ ["Auriculares Bluetooth", 29, "auriculares-bluetooth.jpg", "Tecnología", "Auriculares inalámbricos con cancelación de ruido y hasta 30 horas de batería."],
    /* 2 */ ["Teclado mecánico", 59, "teclado-mecanico.jpg", "Tecnología", "Teclado mecánico compacto con iluminación RGB y conexión USB-C."],
    /* 3 */ ["Ratón inalámbrico", 24, "raton-inalambrico.jpg", "Tecnología", "Ratón ergonómico inalámbrico con sensor óptico de alta precisión."],
    /* 4 */ ["Soporte para portátil", 35, "soporte-portatil.jpg", "Oficina", "Soporte de aluminio ajustable para mejorar la postura frente al ordenador."],
    /* 5 */ ["Lámpara LED de escritorio", 22, "lampara-led.jpg", "Hogar", "Lámpara LED regulable con tres temperaturas de color y puerto USB."],
    /* 6 */ ["Cafetera italiana", 18, "cafetera-italiana.jpg", "Cocina", "Cafetera italiana de aluminio para preparar café tradicional italiano."],
    /* 7 */ ["Freidora de aire", 79, "freidora-aire.jpg", "Cocina", "Freidora de aire de 5 litros con pantalla digital y ocho programas."],
    /* 8 */ ["Botella térmica", 19, "botella-termica.jpg", "Deporte", "Botella de acero inoxidable de 750 ml que mantiene las bebidas frías o calientes."]
];

// Cantidad total de productos (9)
$productosTotales = count($producto);

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
$nombreProducto = $producto[$numeroProducto][0];
$precio = $producto[$numeroProducto][1];
$imagen = $producto[$numeroProducto][2];
$categoria = $producto[$numeroProducto][3];
$descripcion = $producto[$numeroProducto][4];

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