<?php

$tableau;

for($i=0; $i<30; $i++ )
    $tableau[]=rand(30,300);

for($i=0; $i<30; $i+=2 )
{
    unset($tableau[$i]);
}
print_r($tableau);

$tableau['valeur1'] = 99;
$tableau['valeur2'] = 199;
$tableau['valeur3'] = 299;


echo "valeur insérer 1 : " .$tableau['valeur1']."\n";
echo "valeur insérer 2 : " .$tableau['valeur2']."\n";
echo "valeur insérer 3 : " .$tableau['valeur3']."\n";

?>