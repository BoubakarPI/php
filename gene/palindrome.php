<?php

$t = [];
$n;
$i;
$c;

$n = (int)readline('Entrez le nombre de lettre du mot : ');


for ($i = 0; $i < $n; $i++) {
    $t[$i] = readline('Entrez une lettre du mot : ');
};



for ($i = 0; $i < $n; $i++) {
    if ($t[$i] === $t[$n -1 - $i]) {
        $c = 't';
    } else {
        $c = 'f';
        
    };
    
};
if ($c == 't') {
    echo "\n Le mot ";

    foreach ($t as $letter) {
        echo $letter;
    };

    echo " est un palindrome \n";
}else {
    echo "\nLe mot ";
        foreach ($t as $letter) {
            echo $letter;
        };
        
        echo " n'est pas un palindrome \n";
};