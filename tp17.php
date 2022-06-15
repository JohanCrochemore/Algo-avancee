<?php

include('tp16.php');

$maValeur = rand(10,200);

$monIndex = rechercheValeur($maValeur,$monTableau);

echo "Mon index : $monIndex pour la valeur $maValeur \n";

function rechercheValeur(int $valeur, array $tableau) : int
{
    $detailValeur = ['valeur'=>$valeur, 'index'=> -1];

    for($i = 0 ; $i < count($tableau) ; $i++)
    {
        if($tableau[$i] == $detailValeur['valeur'])
            $detailValeur['index'] = $i;
    }

    return $detailValeur['index'];
}

?>