<?php

// puedes teastear todo esto en: https://www.mycompiler.io/es/new/php
// ó instalar un servidor local:
//  - localwp
//  - xampp
//  - mampp
//  - https://www.cdmon.com/es/hosting/plataforma-pruebas

# VARIABLES - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 

// Ejemplo 001

$nombre = "Miguel";
$ciudad = "Gijón";
$nacimiento = 1983;

$actualYear = date('Y'); // esto almacena el año actual
$edad= $actualYear - $nacimiento; // calcula años desde año actual

echo "Hola, mi nombre es $nombre y soy de $ciudad y tengo $edad años.";

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

# ARRAYS
// Array unidimensional

$pelis =[
    "El Imperio contraataca",
    "Inception",
    "Parque Jurásico",
    "Regreso al Futuro",
    "Indiana Jones y la última cruzada"
];

echo "Mis películas favoritas son:";
echo "<ul>";

for($i=0; $i<count($pelis); $i++){
    echo "<li> $pelis[$i] </li>";
}
echo "</ul>";

// - - - - - - - - - - - - - - - - - - - 

# Ejemplo con Aleatorio

$cantidadPelis = count($pelis)-1; // muestra la cantidad de elementos que tiene el array peliculas (-1: arrays va de 0 a 4 si son 5 elementos)
$aleatorio = rand(0,$cantidadPelis); // devuelve un valor aleatorio entre 0 y cantidad total de peliculas

echo "hoy me apetece ver: $pelis[$aleatorio]";


// - - - - - - - - - - - - - - - - - - - 

# Array Multidimensional
// Es un array dentro de un array permitiendo bolcar más datos. En cierto modo funciona como una cuadrícula de datos de excel
// 🍿 Peliculas

$peliculas =[
//  0.Título                    1.Autor / director  2.Año   3.Ruta a Imagen 
    ["El Imperio contraataca",  "Irvin Kesner",     1980,   "empirestrikesback.jpg"],
    ["Origen"                ,  "Christoper Nolan", 2011,   "inception.jpg" ],
    ["Parque Jurásico",         "Steven Spielberg", 1992,   "jurasicpark.jpg"],
    ["Regreso al Futuro",       "Robert Zemedkins", 1982,   "backtothefuture.jpg"],
    ["La última cruzada",       "Steven Spielberg", 1988,   "indiana.jpg"]
];

// vamos a desplegar el array:
foreach ($peliculas as $pelicula) {
    echo "<li>";
    echo "<h2>".$pelicula[0]."</h2>";
    echo "<p>Dirigido por: ".$pelicula[1]."</p>";
    echo "<p>Año: ".$pelicula[2]."</p>";
    echo "<img src='".$pelicula[3]."' alt='".$pelicula[0]."'>";
    echo "</li>";
}

// Otra manera de hacerlo:
foreach ($peliculas as [$titulo, $autor, $anio, $imagen]) {
    echo "<li>";
    echo "<h2>$titulo</h2>";
    echo "<p>Dirigido por: $autor</p>";
    echo "<p>Año: $anio</p>";
    echo "<img src='$imagen' alt='$titulo'>";
    echo "</li>";
}


# Funciones()

// las funciones son estructuras de código reutilizables.
// los parametros son valores con los que vamos a trabajar en el proceso

/*
Instrucciones de cómo hacer la pizza
Esta función espera que le pasemos como parámetro:
1. $base  -  tipo de base de la pizza
2. $ing01 -  ingrediente 01 de la pizza
3. $ing02 -  ingrediente 02 de la pizza
4. $ing03 -  ingrediente 03 de la pizza

*/
function hacerpizza($base,$ing01, $ing02, $ing03, $nombrePizza ){
    echo "<h2>".$nombrePizza."</h2";
    echo "🌱Orégano"."\n";
    echo $ing03."\n";
    echo $ing02."\n";
    echo $ing01."\n";
    echo "🧀 motzarella"."\n";
    echo "🥫 salsa tomate"."\n";
    echo "🍕".$base."\n";
    echo "-----------"."\n"."\n"."\n";
}

// Llamamos a la función pasándole los ingredientes de cada pizza

hacerpizza("normal", "Pepperoni", "Queso", "Aceitunas"); // Pizza Pepperoni
hacerpizza("integral", "Pollo", "Champiñones", "Queso"); // Pizza Campestre
hacerpizza("normal", "Atún", "Cebolla", "Aceitunas"); // Pizza Marinera
hacerpizza("barbacoa", "Pollo", "Bacon", "Cebolla"); // Pizza Barbacoa
hacerpizza("integral", "Tomate", "Mozzarella", "Albahaca"); // Pizza Margarita
hacerpizza("integral", "Espinacas", "Champiñones", "Queso"); // Pizza Vegetal
hacerpizza("normal", "Jamon Serrano", "Rúcula", "Parmesano"); // Pizza Italiana


// --------


########## DATOS 
// Varios arrays con los datos con los que vamos a trabajar

// 🍿 Peliculas: recordemos que hay un array $peliculas más arriba

// 🎸 Música:
$musica = [
//  0.Título / obra              1.Autor / artista           2.Año   3.Ruta a Imagen
    ["Thriller",                 "Michael Jackson",          1982,   "thriller.jpg"],
    ["Like a Virgin",            "Madonna",                  1984,   "likeavirgin.jpg"],
    ["The Joshua Tree",          "U2",                       1987,   "thejoshuatree.jpg"],
    ["Nevermind",                "Nirvana",                  1991,   "nevermind.jpg"],
    ["Ten",                      "Pearl Jam",                1991,   "ten.jpg"],
    ["Black Album",              "Metallica",                1991,   "blackalbum.jpg"],
    ["OK Computer",              "Radiohead",                1997,   "okcomputer.jpg"],
    ["The Miseducation of Lauryn Hill", "Lauryn Hill",      1998,   "miseducation.jpg"],
    ["Californication",          "Red Hot Chili Peppers",    1999,   "californication.jpg"],
    ["Parachutes",               "Coldplay",                 2000,   "parachutes.jpg"]
];

// 📕 Libros:
$libros = [
//  0.Título                    1.Autor                    2.Año   3.Ruta a Imagen
    ["El nombre de la rosa",    "Umberto Eco",              1980,   "elnombredelarosa.jpg"],
    ["La historia interminable","Michael Ende",             1979,   "lahistoriainterminable.jpg"],
    ["1984",                    "George Orwell",            1949,   "1984.jpg"],
    ["It",                      "Stephen King",             1986,   "it.jpg"],
    ["El perfume",              "Patrick Süskind",          1985,   "elperfume.jpg"],
    ["Los pilares de la Tierra","Ken Follett",              1989,   "lospilaresdelatierra.jpg"],
    ["Jurassic Park",           "Michael Crichton",          1990,   "jurassicpark.jpg"],
    ["El Señor de los Anillos","J.R.R. Tolkien",            1954,   "elsenordelosanillos.jpg"],
    ["Harry Potter y la piedra filosofal", "J.K. Rowling",  1997,   "harrypotter.jpg"],
    ["El código Da Vinci",      "Dan Brown",                2003,   "elcodigodavinci.jpg"]
];

//🎮 Videojuegos:
$videojuegos = [
//  0.Título                    1.Creador / compañía       2.Año   3.Ruta a Imagen
    ["Super Mario Bros.",       "Nintendo",                 1985,   "supermariobros.jpg"],
    ["The Legend of Zelda",     "Nintendo",                 1986,   "zelda.jpg"],
    ["Tetris",                  "Alexey Pajitnov",          1984,   "tetris.jpg"],
    ["Sonic the Hedgehog",      "Sega",                     1991,   "sonic.jpg"],
    ["Street Fighter II",      "Capcom",                   1991,   "streetfighter2.jpg"],
    ["Mortal Kombat",           "Midway Games",             1992,   "mortalkombat.jpg"],
    ["Final Fantasy VII",      "Square",                   1997,   "finalfantasy7.jpg"],
    ["Metal Gear Solid",       "Hideo Kojima",              1998,   "metalgearsolid.jpg"],
    ["The Legend of Zelda: Ocarina of Time", "Nintendo",   1998,   "ocarinaoftime.jpg"],
    ["Half-Life",               "Valve",                    1998,   "halflife.jpg"]

];



####### Funciones 
// El objetivo de esta función es mostrar en formato lista los elementos que contiene el array que le pasemos
// siempre que tengan un formato adecuado (Titulo, Autor, Año, Imagen)
// Definimos las instrucciones de la función:


function desplegar($array, $ambito){
   echo '<h2>'.$ambito.'</h2>';
    echo '<ul class="lista">';
    foreach($array as [$titulo, $autor, $anio, $imagen]){
        echo '<li>';
        echo '<h2>'.$titulo.'</h2>';
        echo '<p>Dirigido por:'.$autor.'</p>';
        echo '<p>Año: '.$anio.'</p>';
        echo '<img src="'.$imagen.'" alt="'.$titulo.'">';
        echo '</li>';
    }
    echo '</ul>';
}



## EJECUCIÓN:
// Llamamos a la función pasándole como parámetro el array que queremos que despliegue

echo "<h1>Mis obras favoritas</h1>";


desplegar($peliculas, "🍿 Mis Pelis favoritas");
desplegar($musica, "🎸 La música que tengo en CD");
desplegar($libros, "📕 Libros que tengo por casa");
desplegar($videojuegos, "🎮 Los juegos que he jugado");
?>