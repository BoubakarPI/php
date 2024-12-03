<?php 

$action = null;
$i= 0;
$notes = [];

while ($action !== 'fin') {
    $action = readline('Veuillez entrer une note ou taper fin : ');
    if ($action !== "fin") {
        $notes[] = (int)$action;
    }
}


    /* $notes = [
        $i => $note
    ];
    $notes[] = $notes;
    $i++; */


echo "Vos notes sont : \n";
foreach ($notes as $note) {
    echo "- $note \n";
}

