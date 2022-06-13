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
    sommeTableau(remplirTableau());

function remplirTableau() : Array
{
    $tableau;
    for($i=0; $i<50; $i++)
    {
        $tableau[]=rand(50,500);
    }

    return $tableau;
}

function sommeTableau(array $tableau)
{
    $somme=0;
    foreach ($tableau as $value)
        $somme += $value;

    echo "La somme du tableau est ".$somme."\n";
}



?>