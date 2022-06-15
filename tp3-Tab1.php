<?php

$tableau;

// tant que la saisi n'est pas un chiffre ou q 

do
{
    $saisi  = readline('Saisissez un nombre ou q pour arreter : ');
    if(is_numeric($saisi))
        $tableau[] = $saisi;
}
while($saisi != 'q');

// affichage de la taille du tableau

echo "Taille du tableau : ".sizeof($tableau)."\n";
echo "Tableau : ";
print_r($tableau);

// affichage de la somme des valeurs du tableau

echo "Somme de valeurs = ".array_sum($tableau)."\n";

// tri du tableau

asort($tableau);

// affichage du tableau trié

echo "Tableau trié : ";
print_r($tableau);


?>