<?php

# Datos de la web
const NOMBREWEB="Tony Pizzas";
const ESLOGAN ="Descubre nuestra pizza Diábola";
const IDIOMA ="es-ES";
const TELEFONO="983555666";
const DIRECCION ="C/ los Tilos 55, Bajo, 34569 Santander";


# Datos de la Carta
$carta = [
    // Plato                 Ingredientes                         Alérgenos                     Precio   Emoticono

    ["Bolognesa",            "carne, tomate, queso",                "lactosa",                  15,      "🍝"],
    ["Margarita",            "tomate, mozzarella, albahaca",        "lactosa",                  12,      "🍕"],
    ["Pepperoni",            "tomate, queso, pepperoni",            "gluten, lactosa",          14,      "🍕"],
    ["Cuatro Quesos",        "mozzarella, gouda, azul, parmesano",  "lactosa",               16,      "🧀"],
    ["Carbonara",            "bacon, huevo, queso",                 "huevo, lactosa",           15,      "🥓"],
    ["Hawaiana",             "jamón, piña, queso",                "lactosa",              14,      "🍍"],
    ["Barbacoa",             "carne, bacon, cebolla, BBQ",        "gluten",              16,      "🔥"],
    ["Vegetal",              "pimiento, champiñones, cebolla",    "gluten",              13,      "🥦"],
    ["Atún",                 "atún, cebolla, aceitunas",           "pescado",             14,      "🐟"],
    ["Marinera",             "atún, gambas, mejillones",           "pescado, crustáceos",  18,      "🦐"],
    ["Jamon y Champiñones",  "jamón, champiñones, queso",         "lactosa",              14,      "🍄"],
    ["Diavola",              "salami picante, queso, guindilla",   "lactosa",              15,      "🌶️"],
    ["Pollo",                "pollo, cebolla, queso",              "lactosa",              15,      "🍗"],
    ["Serrana",              "jamón serrano, tomate, queso",       "lactosa",              16,      "🥩"],
    ["Mediterránea",         "tomate, aceitunas, feta, orégano",   "lactosa",              15,      "🫒"]

];


# Funciones
function desplegar($array,){
    echo '<ul class="lista-pizzas">';
    foreach($array as [$plato, $ingredientes, $alergenos, $precio, $emoji]){
        echo '<li>';
        echo '<h3>'.$emoji." ".$plato.'</h3>';
        echo '<p class="ingredients">'.$ingredientes.'</p>';
        echo '<p class="alerg">'.$alergenos.'</p>';
        echo '<p class="precio">P.V.P.:'.$precio.'.00 €</p>';
        echo '<span class="copyright"> &copy; '.NOMBREWEB.'</span>';
        echo '</li>';
    }
    echo '</ul>';
}


?>

