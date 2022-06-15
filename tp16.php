<?php

$NB_VALEURS = 10;

$monTableau = remplirTableau($NB_VALEURS);

print_r($monTableau);

for($i = 0; $i < $NB_VALEURS ; $i++)
{
    $monTableau = triTableau($i,$monTableau);
}

print_r($monTableau);

function remplirTableau($valeur) : array
{
    $tableau = [];

    for($i = 0; $i < $valeur ; $i++)
        $tableau[] = rand(10,200);

    return $tableau;

}

function triTableau(int $index, array $tableau) : array
{
    $tri = FALSE;
    while(!$tri)
    {
    
        for($i = $index ; $i < count($tableau) ; $i++)
        {
            $tri = TRUE;
            if($tableau[$index] > $tableau[$i])
            {
                $valeur = $tableau[$i];
                $tableau[$i]=$tableau[$index];
                $tableau[$index]=$valeur;
                $tri = FALSE;
                
            }

        }

    }

    return $tableau;
}



?>