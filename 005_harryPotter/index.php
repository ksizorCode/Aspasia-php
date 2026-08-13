<?php

//cargamos el array con la lista de personajes que hay en el archivo datos.php
include '_datos.php';


#Bucle para recorrer el array.
/*
for($i=0;$i<count($personajes);$i++){
   //.. insertar aquí la plantilla de la carta/ficha
}
   */

function catalogo()
{
    global $personajes;
    foreach ($personajes as $individuo) {
        echo '<li>';
        echo '<a href="ficha.php?personaje=' . $individuo[5] . '">';
        echo '<img src="img/' . $individuo[3] . '" alt="' . $individuo[0] . '">';
        echo '<h2>' . $individuo[0] . '</h2>';
        echo '<p>' . $individuo[1] . '</p>';
        echo '</a>';
        echo '</li>';
    }
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo personajes Harry Potter</title>
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
    </header>
    <main>
        <h1>Catálogo de personajes de Harry Potter</h1>

        <ul>
            <?php catalogo(); ?>
        </ul>
    </main>

    <footer>
        &copy; Lista de personajes de Harry Potter
    </footer>

</body>

</html>