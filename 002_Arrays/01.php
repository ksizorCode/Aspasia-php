<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body{
    font-family:sans-serif;
    max-width:960px;
    margin:20px auto;
    background: tan;
}

p{
    color:grey;
}

ul{
    display:flex;
    gap:8px;
    flex-wrap:wrap;
    list-style:none;
    padding-left: 0;
}

li{
    border:solid grey 1px;
    box-shadow:2px 2px 8px grey;
    border-radius:20px;
    background: white;
    padding: 10px;
}

</style>
</head>
<body>

<ul>
    

<?php




$hogwarts = [
    /* 0 */  'Harry Potter',
    /* 1 */  'Hermione Granger',
    /* 2 */  'Ron Weasley',
    /* 3 */  'Albus Dumbledore',
    /* 4 */  'Minerva McGonagall',
    /* 5 */  'Severus Snape',
    /* 6 */  'Rubeus Hagrid',
    /* 7 */  'Draco Malfoy',
    /* 8 */  'Luna Lovegood',
    /* 9 */  'Neville Longbottom',
    /* 10 */ 'Ginny Weasley',
    /* 11 */ 'Fred Weasley',
    /* 12 */ 'George Weasley',
    /* 13 */ 'Sirius Black',
    /* 14 */ 'Remus Lupin',
    /* 15 */ 'Bellatrix Lestrange',
    /* 16 */ 'Lord Voldemort',


    /* 0 */  'Luke Skywalker',
    /* 1 */  'Leia Organa',
    /* 2 */  'Han Solo',
    /* 3 */  'Darth Vader',
    /* 4 */  'Obi-Wan Kenobi',
    /* 5 */  'Yoda',
    /* 6 */  'Chewbacca',
    /* 7 */  'R2-D2',
    /* 8 */  'C-3PO',
    /* 9 */  'Anakin Skywalker',
    /* 10 */ 'Padmé Amidala',
    /* 11 */ 'Mace Windu',
    /* 12 */ 'Qui-Gon Jinn',
    /* 13 */ 'Darth Maul',
    /* 14 */ 'Palpatine',
    /* 15 */ 'Boba Fett',
    /* 16 */ 'Jabba the Hutt',

        /* 0 */  'Frodo Bolsón',
    /* 1 */  'Sam Gamyi',
    /* 2 */  'Meriadoc Brandigamo',
    /* 3 */  'Peregrin Tuk',
    /* 4 */  'Gandalf',
    /* 5 */  'Aragorn',
    /* 6 */  'Legolas',
    /* 7 */  'Gimli',
    /* 8 */  'Boromir',
    /* 9 */  'Galadriel',
    /* 10 */ 'Elrond',
    /* 11 */ 'Arwen',
    /* 12 */ 'Saruman',
    /* 13 */ 'Sauron',
    /* 14 */ 'Gollum',
    /* 15 */ 'Théoden',
    /* 16 */ 'Éowyn',

    /* 0 */  'Odiseo',
    /* 1 */  'Penélope',
    /* 2 */  'Telémaco',
    /* 3 */  'Atenea',
    /* 4 */  'Poseidón',
    /* 5 */  'Zeus',
    /* 6 */  'Circe',
    /* 7 */  'Calipso',
    /* 8 */  'Polifemo',
    /* 9 */  'Eolo',
    /* 10 */ 'Nausícaa',
    /* 11 */ 'Antínoo',
    /* 12 */ 'Eurímaco',
    /* 13 */ 'Eumeo',
    /* 14 */ 'Laertes',
    /* 15 */ 'Tiresias',
    /* 16 */ 'Caribdis'
];

for($i=0; $i<count($hogwarts); $i++){
	echo "<li>";
    echo     "<h2>".$hogwarts[$i]."</h2>";
    echo     "<p>11-12-13-14-17-18</p>";
    echo "</li>";
}

?>


</ul>


</body>
</html>