<?php

$saisi = (int)readline('Entrez un chiffre : ');

while ($saisi !== 10) {
    $saisi = (int)readline('Entrez à nouveau un ciffre : ');
}

echo "Bravo vous avez saisi le bon numéro \n";
$notes = [10, 15, 20, 45, 41];

/* for ($i = 1; $i <5; $i++) {
    if ($i == 1) {
        echo "Nous sommes à la $i ère note qui est : $notes[$i] \n";
    } else {
        echo "Nous sommes à la $i ième note qui est : $notes[$i] \n";
    }
    }
     */

$i = 1;

foreach ($notes as $note) {
    if ($note == 10) {
        echo "Nous sommes à la $i ère note qui est : $note \n";
        $i++;
    } else {
        echo "Nous sommes à la $i ième note qui est : $note \n";
        $i++;
    }
    }


