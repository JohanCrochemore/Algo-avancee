<?php

include('tp16-Tri.php');

$maValeur = rand(10,200);

$monIndex = rechercheValeur($maValeur,$monTableau);

echo "Mon index : $monIndex pour la valeur $maValeur \n";


// fonction qui parcours le tableau et qui compare avec la valeur passée en paramètre
function rechercheValeur(int $valeur, array $tableau) : int
{
    $index = -1;

    for($i = 0 ; $i < count($tableau) ; $i++)
    {
        if($tableau[$i] == $valeur)
            $index = $i;
    }

    return $index;
}

?>