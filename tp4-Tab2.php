<?php

$tableau;

$NB_VALEURS = 30;

// on affecte une valeur random à chaque case du tableau

for($i=0; $i<$NB_VALEURS; $i++ )
    $tableau[]=rand(20,100);


echo "Tableau : ";
print_r($tableau);

// tri croissant

asort($tableau);

echo "Tableau croissant: ";
print_r($tableau);

// tri decroissant

arsort($tableau);

echo "Tableau décroissant: ";
print_r($tableau);

?>