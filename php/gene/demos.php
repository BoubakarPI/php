<?php

$action = (int)readline("Entrez votre action : (\n1: Attaquer \n2: Défendre, \n3:Passer");
switch ($action) { 
    case 1:
        echo 'J\'attaque';
        break;
    case 2:
        echo 'Je défends';
        break;
    case 3: 
        echo 'Je passe';
        break;
    default:
        echo 'Commande inconnue';
}

?>

