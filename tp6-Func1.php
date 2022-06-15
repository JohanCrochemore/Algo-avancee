<?php

$nombre ;
$MIN = 5;
$MAX = 20;

// tant que la valeur rentrée n'est pas un chiffre compris dans la tranche de valeur voulue, on continue de demander une valeur
do
{
    $nombre  = readline('Saisissez un nombre entre 5 et 20 : ');
    $nombre = (intval($nombre));
}
while($nombre < $MIN OR $nombre > $MAX);

// fonction qui boucle sur notre nombre et qui calcule la somme x fois avec des valeurs aléatoires

for($i =0; $i<$nombre; $i++)
    calculerSomme(rand(300,1000),rand(300,1000),rand(300,1000));


// fonction qui prend 3 valeurs et qui les additionnes

function calculerSomme(int $nb1, int $nb2, int $nb3) 
{
    echo "Somme des chiffres : ". $nb1+$nb2+$nb3 ."\n";
}

?>