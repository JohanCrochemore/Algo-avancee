<?php

include('tp16.php');

$maValeur = rand(10,200);

echo $maValeur . " : Valeur recherchée.\n";

$tableau = $monTableau;

while(count($tableau) > 1)
    $tableau = triDicoto($tableau, $maValeur);

print_r($tableau);
if($tableau[0] == $maValeur)
{
    echo "La valeur $maValeur se trouve à l'index ". array_search($maValeur,$monTableau)."\n";
}    
else
{
    echo "La valeur $maValeur ne se trouve pas dans le tableau \n";
}   

function triDicoto(array $tableau, int $valeur) : array
{
    $indexSplit = round(count($tableau)/2,0,PHP_ROUND_HALF_UP);

    $arrayTableau = array_chunk($tableau,$indexSplit,FALSE);


    if($arrayTableau[0][count($arrayTableau[0])-1] >= $valeur)
        $tableau = $arrayTableau[0];
    else
        $tableau = $arrayTableau[1];

    return $tableau;
}
?>