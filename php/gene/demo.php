<?php 
$note = (int)readline('Entrez votre action  : ');

if($note > 10) {
    echo "Vous avez la moyenne $note";
}
elseif($note === 10) {
    echo 'Vous avez juste la moyenne';
}
else {
    echo "Vous avez $note qui n'est pas une moyenne ";
}



?>