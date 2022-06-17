<?php 

require_once __DIR__ . '/classes/Movie.php';

$Lord_of_the_rings = new Movie('Il signore degli anelli', 'English' , 'Il Signore degli Anelli (titolo originale in inglese: The Lord of the Rings) è un romanzo epico high fantasy scritto da J. R. R. Tolkien e ambientato alla fine della Terza Era dell\'immaginaria Terra di Mezzo. Scritto a più riprese tra il 1937 e il 1949, fu pubblicato in tre volumi tra il 1954 e il 1955 nonché tradotto in trentotto lingue ed ha venduto oltre 150 milioni di copie che lo rendono una delle opere letterarie di maggior successo del XX secolo.');
$Matrix = new Movie('Matrix', 'English' , 'Matrix (The Matrix) è un film del 1999 in stile cyberpunk scritto e diretto dai fratelli Andy e Larry Wachowski. Il film, che ha vinto numerosi premi, tra cui quattro Oscar, ha avuto un forte impatto culturale e vi sono state numerose opere che vi fanno riferimento. Nel 2012 è stato scelto per la conservazione nel National Film Registry della Biblioteca del Congresso degli Stati Uniti. ')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php OOP Movie</title>
</head>
<body>
    <h2>Titolo : <?php echo $Lord_of_the_rings->title ?></h2>
    <h2>Lingua : <?php echo $Lord_of_the_rings->language ?></h2>
    <h2>Descrizione : <?php echo $Lord_of_the_rings->getDescription() ?></h2>
    <br>
    <h2>Titolo : <?php echo $Matrix->title ?></h2>
    <h2>Lingua : <?php echo $Matrix->language ?></h2>
    <h2>Descrizione : <?php echo $Matrix->getDescription() ?></h2>
</body>
</html>