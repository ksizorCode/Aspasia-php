<?php
//cargamos el array con la lista de personajes que hay en el archivo datos.php
include '_datos.php';



//Obtenemos valor de GET
if (isset($_GET['personaje'])) {
    $idPersonaje = $_GET['personaje'];
} else {
    $idPersonaje = 0;
}
//echo "El personaje a cargar tiene el id:".$idPersonaje;


// Var_dump se utiliza para testear y mostrar el contenido de un array de forma bonita
//var_dump( $personajes[$idPersonaje]);

// Guardar cada valor en una variable
$personaje = $personajes[$idPersonaje][0];
$casa = $personajes[$idPersonaje][1];
$descripcion = $personajes[$idPersonaje][2];
$img = $personajes[$idPersonaje][3];
$emoji = $personajes[$idPersonaje][4];
$idPersonaje = $personajes[$idPersonaje][5];


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="ficha.php">Ficha</a></li>
            </ul>
        </nav>

        <a href="index.php">Volver a Catálogo</a>
    </header>

    <main>

        <h1><?= $emoji ?> <?= $personaje ?></h1>
        <p>Casa: <?= $casa ?></p>
        <p><?= $descripcion ?></p>

        <img src="img/<?= $img ?>" alt="<?= $personaje ?>">


        <div>
            <?php
            # Siguiente personaje
// Sumale +1 al personaje actual si no nos hemos salido de la lista
            if ($idPersonaje < count($personajes) - 1) {
                $siguiente = $idPersonaje + 1;
            } else {
                $siguiente = 0;
            }

            # Anterior personaje
// Réstale -1 al personaje actual si no nos hemso salido de la lista
            if ($idPersonaje > 0) {
                $anterior = $idPersonaje - 1;
            } else {
                $anterior = count($personajes) - 1;
            }



            $nombrePersonajeSiguiente = $personajes[$siguiente][0];
            $fotoPersonajeSiguiente = $personajes[$siguiente][3];

            $nombrePersonajeAnterior = $personajes[$anterior][0];
            $fotoPersonajeAnterior = $personajes[$anterior][3];




            ?>
            <h2>Personajes Siguiente / Anterior</h2>
            <nav>
                <ul>
                    <li>
                        <a href="ficha.php?personaje=<?= $siguiente ?>">
                            <img src="img/<?= $fotoPersonajeSiguiente; ?>" alt="<?= $nombrePersonajeSiguiente ?>">
                            <h3><?= $nombrePersonajeSiguiente ?></h3>
                        </a>
                    </li>
                    <li>
                        <a href="ficha.php?personaje=<?= $anterior ?>">
                            <img src="img/<?= $fotoPersonajeAnterior ?>" alt="<?= $nombrePersonajeAnterior ?>">
                            <h3><?= $nombrePersonajeAnterior ?></h3>
                        </a>
                    </li>
                </ul>
            </nav>


        </div>


    </main>

    <footer>
        &copy; Lista de personajes de Harry Potter
    </footer>

</body>

</html>