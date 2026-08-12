<?php
# Datos de la web
const NOMBREWEB="Tony Pizzas";
const ESLOGAN ="Descubre nuestra pizza Diábola";
const IDIOMA ="es-ES";
const TELEFONO="983555666";
const DIRECCION ="C/ los Tilos 55, Bajo, 34569 Santander";
?>


<!DOCTYPE html>
<html lang="<?php echo IDIOMA; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta de <?php echo NOMBREWEB; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<main>
<h1>Carta de <?php echo NOMBREWEB; ?></h1>
<h2>Descubre nuestra carta de especializades italianas solo en <?php echo NOMBREWEB; ?>. <?=ESLOGAN?></h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, nihil rerum pariatur provident quos voluptates et esse libero reprehenderit delectus aliquid deleniti iste temporibus fugit corporis inventore nemo earum natus officiis repellendus. Voluptas eos labore ipsum? Fuga deleniti minus eum vero architecto nemo velit alias error, pariatur esse exercitationem voluptatibus molestias laudantium reiciendis amet dolores magni distinctio praesentium inventore obcaecati totam similique quos. Ducimus quia ratione animi dolor ipsum corporis repellendus blanditiis quod, beatae, consequuntur voluptatum expedita possimus, eaque nemo. Odio vel quibusdam quod? Suscipit laboriosam maxime autem in! Quae ipsum vero iure adipisci repellendus maxime modi repellat! Quisquam voluptatibus consequuntur exercitationem quam iusto, earum impedit ducimus et placeat assumenda natus esse repudiandae, aspernatur aperiam, delectus incidunt obcaecati. Similique, earum!</p>




<?php
# Datos

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

# Ejecución

desplegar($carta);

?>


</main>
<footer>
    <p>&copy; <?php echo NOMBREWEB; ?> - <?php echo DIRECCION; ?> | <a href="tel:<?php echo TELEFONO; ?>"><?php echo TELEFONO; ?></a> </p>
</footer>
</body>
</html>