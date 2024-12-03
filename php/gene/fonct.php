<?php

$insultes = [ 'con', 'merde', 'sexe'];

$phrase = readline('Entrez votre phrase : ');

foreach($insultes as $insulte) {
    $replace = str_repeat("*", strlen($insulte) - 1);
    $phrase = str_replace($insulte, "$insulte[0]$replace", $phrase);

}

echo $phrase;