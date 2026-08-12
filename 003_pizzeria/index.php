<?php
//Cargamos el archivo con los datos que vamos a utilizar para esta web
include '_data.php';
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
# Ejecución
desplegar($carta);

?>


</main>
<footer>
    <p>&copy; <?php echo NOMBREWEB; ?> - <?php echo DIRECCION; ?> | <a href="tel:<?php echo TELEFONO; ?>"><?php echo TELEFONO; ?></a> </p>
</footer>
</body>
</html>