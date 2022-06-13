<?php

$nombre ;
$MIN = 5;
$MAX = 20;
do
{
    $nombre  = readline('Saisissez un nombre entre 5 et 20 : ');
    $nombre = (intval($nombre));
}
while($nombre < $MIN OR $nombre > $MAX);

for($i =0; $i<$nombre; $i++)
    calculerSomme(rand(300,1000),rand(300,1000),rand(300,1000));


function calculerSomme(int $nb1, int $nb2, int $nb3) 
{
    echo "Somme des chiffres : ". $nb1+$nb2+$nb3 ."\n";
}

?>