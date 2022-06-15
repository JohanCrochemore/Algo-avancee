<?php

$tableau;
$NB_VALEURS = 30;

// on affecte une valeur random à chaque case du tableau

for($i=0; $i<$NB_VALEURS; $i++ )
    $tableau[]=rand(30,300);

// on supprime 1/2 valeurs en incrémentant notre boucle de 2 au lieu de 1

for($i=0; $i<$NB_VALEURS; $i+=2 )
{
    unset($tableau[$i]);
}
print_r($tableau);

// on affecte et affiche manullement nos 3 valeurs

$tableau['valeur1'] = 99;
$tableau['valeur2'] = 199;
$tableau['valeur3'] = 299;


echo "valeur insérer 1 : " .$tableau['valeur1']."\n";
echo "valeur insérer 2 : " .$tableau['valeur2']."\n";
echo "valeur insérer 3 : " .$tableau['valeur3']."\n";

?>