<?php

$tableau;

for($i=0; $i<30; $i++ )
    $tableau[]=rand(20,100);


echo "Tableau : ";
print_r($tableau);

asort($tableau);

echo "Tableau croissant: ";
print_r($tableau);

arsort($tableau);

echo "Tableau décroissant: ";
print_r($tableau);

?>