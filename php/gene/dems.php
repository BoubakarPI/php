<?php 
$eleves = [
    'CM1' => ['Jean', 'Moussa', 'Ali'],
    'CM2' => ['Fatima', 'Yasmine']
];

foreach ($eleves as $classe => $listEleve) {
    echo "La classe $classe : \n";
    foreach($listEleve as $eleve) {
        echo "- $eleve \n";
    }
    echo "\n";
}



/* $i = 0;
foreach ($eleves as $classe => $eleve[$i]) {
    echo "La classe $classe : \n -  ";
    print_r($eleve[$i]);
    $i++;
} */

?>