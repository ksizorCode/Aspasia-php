<?php

# VARIABLES

// Ejemplo 001

$nombre = "Miguel";
$ciudad = "Gijón";
$nacimiento = 1983;

$actualYear = date('Y');
$edad= $actualYear - $nacimiento

echo "Hola, mi nombre es $nombre y soy de $ciudad y tengo $edad años.";

// - - - - - - - - - - - - - - - - - - - 

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
    echo "<li> $pelis[i] </li>";
}
echo "</ul>";

// - - - - - - - - - - - - - - - - - - - 

# Ejemplo con Aleatorio

$cantidadPelis = count($pelis); // muestra la cantidad de elementos que tiene el array peliculas
$aleatorio = rand(1,$cantidadPelis); // devuelve un valor aleatorio entre 1 y cantidad total de peliculas

echo "hoy me apetece ver: $pelis[$aleatorio]"


// - - - - - - - - - - - - - - - - - - - 

# Array Multidimensional
// Es un array dentro de un array permitiendo bolcar más datos. En cierto modo funciona como una cuadrícula de datos de excel

$peliculas =[
//   Título de la película      Director            Año   Ruta a Poster 
    ["titulo"=> "El Imperio contraataca",  "director"=>"Irvin Kesner",     "anio"=>1980, "poster"=>"empirestrikesback.jpg"],
    ["titulo"=> "Origen"                ,  "director"=>"Christoper Nolan", "anio"=>2011, "poster"=>"inception.jpg" ],
    ["titulo"=> "Parque Jurásico",         "director"=>"Steven Spielberg", "anio"=>1992, "poster"=>"jurasicpark.jpg"],
    ["titulo"=> "Regreso al Futuro",       "director"=>"Robert Zemedkins", "anio"=>1982, "poster"=>"backtothefuture.jpg"],
    ["titulo"=> "La última cruzada",       "director"=>"Steven Spielberg", "anio"=>1988, "poster"=>"indiana.jpg"]
];

// vamos a desplegar el array:
foreach ($peliculas as $pelicula) {
    echo "<li>";
    echo "<h2>$pelicula['titulo']</h2>";
    echo "<p>Dirigido por: $pelicula['director']</p>";
    echo "<p>Año: $pelicula['anio']</p>";
    echo "<img src="$pelicula['poster']" alt="$pelicula['titulo']"</p>";
    echo "</li>";
}

// Otra manera de hacerlo:
foreach ($peliculas as [$titulo, $director, $anio, $poster]) {
    echo "<li>";
    echo "<h2>$titulo</h2>";
    echo "<p>Dirigido por: $director</p>";
    echo "<p>Año: $anio/p>";
    echo "<img src="$poster" alt="$titulo"</p>";
    echo "</li>";
}

?>