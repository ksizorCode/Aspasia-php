<?php
include 'datos.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<main>
    <ul>
    <?php
        for($i=0; $i<count($productos); $i++){
            echo '<li>';
            echo '<a href="ficha.php?producto='.$i.'">';
            echo '<img src="img/'.$productos[$i][2].'" alt="'.$productos[$i][0].'">';
            echo '<h2>'.$productos[$i][0].'</h2>';
            echo '<p>'.$productos[$i][3].'</p>';
            echo '</a>';
            echo '</li>';
        }

    ?>
</ul>
</main>

</body>
</html>