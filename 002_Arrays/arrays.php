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


hacerpizza("normal", "Pepperoni", "Queso", "Aceitunas"); // Pizza Pepperoni
hacerpizza("integral", "Pollo", "Champiñones", "Queso"); // Pizza Campestre
hacerpizza("normal", "Atún", "Cebolla", "Aceitunas"); // Pizza Marinera
hacerpizza("barbacoa", "Pollo", "Bacon", "Cebolla"); // Pizza Barbacoa
hacerpizza("integral", "Tomate", "Mozzarella", "Albahaca"); // Pizza Margarita
hacerpizza("integral", "Espinacas", "Champiñones", "Queso"); // Pizza Vegetal
hacerpizza("normal", "Jamon Serrano", "Rúcula", "Parmesano"); // Pizza Italiana

function desplegar($array){
    echo '<ul class="lista">'
    foreach ($peliculas as [$titulo, $autor, $anio, $imagen]) {
    echo '<li>';
    echo '<h2>$titulo</h2>';
    echo '<p>Dirigido por: $autor</p>';
    echo '<p>Año: $anio</p>";
    echo '<img src='$imagen' alt='$titulo'>";
    echo '</li>";
}

}

?>