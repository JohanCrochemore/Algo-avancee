<?php

include('tp16-Tri.php');

$maValeur = rand(10,200);

echo $maValeur . " : Valeur recherchée.\n";

$tableau = $monTableau;

// tant que la taille du tableau peut être séparé en deux
while(count($tableau) > 1)
    $tableau = triDicoto($tableau, $maValeur);

print_r($tableau);

// on affiche un message suivant si la valeur se trouve dans le tableau
if($tableau[0] == $maValeur)
{
    echo "La valeur $maValeur se trouve à l'index ". array_search($maValeur,$monTableau)."\n";
}    
else
{
    echo "La valeur $maValeur ne se trouve pas dans le tableau \n";
}   

// function qui retourne un demi tableau
function triDicoto(array $tableau, int $valeur) : array
{
    $indexSplit = round(count($tableau)/2,0,PHP_ROUND_HALF_UP); // on cherche l'index du milieu du tableau 

    $arrayTableau = array_chunk($tableau,$indexSplit,FALSE); // on sépare le tableau en 2 tableaux

    if($arrayTableau[1][0] <= $valeur) // on compare la valeur avec la 1ere valeur du 2eme tableau et on garde la partie qui nous interesse
        $tableau = $arrayTableau[1];
    else
        $tableau = $arrayTableau[0];

    return $tableau;
}
?>