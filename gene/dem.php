<?php

$heure = (int)readline('Entrez l\'heure : ');

if ($heure > 9 && $heure <12 || $heure >15 && $heure <17) {
    echo 'Le magasin sera ouvert';
} else {
    echo 'Désolé le magasin sera fermé';
}