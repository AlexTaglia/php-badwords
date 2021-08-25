<!-- 
    Descrizione:
    Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall’utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, 
    dopo aver sostituito con tre asterischi (***) tutte le occorrenze 
    della parola da censurare.

    http://localhost:80/es/08.25%20php-badwords/php-badwords/index.php?badWord=Warner
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <?php 
        $paragrafo = 'Space Jam è un film del 1996 diretto da Joe Pytka. Il film, a tecnica mista, unisce nelle stesse scene attori in carne e ossa con personaggi dell\'animazione. I personaggi della Warner Bros., i Looney Tunes, si trovano a dividere lo schermo con grandi campioni dell\'NBA, primo tra tutti Michael Jordan, e attori celebri, come Bill Murray. Uscì nei cinema statunitensi il 15 novembre 1996 e italiani il 21 febbraio 1997. Il film è ambientato nel periodo del primo ritiro di Michael Jordan, durato diciotto mesi, tra il 1993 e il 1995.';
        $paragrafoLunghezza = strlen($paragrafo);
        
        $parolaDaCensurare = $_GET['badWord'];
        $censura = '***';
        
        $paragrafoCensurato = str_replace($parolaDaCensurare, $censura, $paragrafo);
        $paragrafoCensuratoLunghezza = strlen($paragrafoCensurato);
    ?>

    <h1>Paragrafo non censurato</h1>
    <p> <?php echo $paragrafo ?></p>
    <p> la lunghezza del paragrafo non censurato è <?php echo $paragrafoLunghezza ?></p>

    <h1>Paragrafo censurato</h1>
    <p> <?php echo $paragrafoCensurato ?></p>
    <p> la lunghezza del paragrafo censurato è <?php echo $paragrafoCensuratoLunghezza ?></p>


</body>
</html>