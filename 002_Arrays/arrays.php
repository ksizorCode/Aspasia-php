<?php

// VARIABLES

// Ejemplo 001

$nombre = "Miguel";
$ciudad = "Gijón";
$nacimiento = 1983;

$actualYear = date('Y');
$edad= $actualYear - $nacimiento

echo "Hola, mi nombre es $nombre y soy de $ciudad y tengo $edad años.";


// ARRAYS
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


// Ejemplo con Aleatorio

$cantidadPelis = count($pelis); // muestra la cantidad de elementos que tiene el array peliculas
$aleatorio = rand(1,$cantidadPelis); // devuelve un valor aleatorio entre 1 y cantidad total de peliculas

echo "hoy me apetece ver: $pelis[$aleatorio]"




// Array Multidimensional
// Es un array dentro de un array permitiendo bolcar más datos. En cierto modo funciona como una cuadrícula de datos de excel
$peliculas =[
    ["El Imperio contraataca"],
    ["Inception"],
    ["Parque Jurásico"],
    ["Regreso al Futuro"],
    ["Indiana Jones y la última cruzada]"
];
?>