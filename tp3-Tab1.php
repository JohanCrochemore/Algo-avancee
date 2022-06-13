<?php

$tableau;

do
{
    $saisi  = readline('Saisissez un nombre ou q pour arreter : ');
    if(is_numeric($saisi))
        $tableau[] = $saisi;
}
while($saisi != 'q');

echo "Taille du tableau : ".sizeof($tableau)."\n";
echo "Tableau : ";
print_r($tableau);

echo "Somme de valeurs = ".array_sum($tableau)."\n";

asort($tableau);

echo "Tableau trié : ";
print_r($tableau);


?>