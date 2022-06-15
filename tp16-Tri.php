<?php

$NB_VALEURS = 10;

$monTableau = remplirTableau($NB_VALEURS);

print_r($monTableau);

for($i = 0; $i < $NB_VALEURS ; $i++) // pour chaque index du tableau on tri
{
    $monTableau = triTableau($i,$monTableau);
}

print_r($monTableau);

// fonction qui rempli un tableau de valeur aléatoire
function remplirTableau($valeur) : array
{
    $tableau = [];

    for($i = 0; $i < $valeur ; $i++)
        $tableau[] = rand(10,200);

    return $tableau;

}

// fonction qui tri le tableau
function triTableau(int $index, array $tableau) : array
{
    $tri = FALSE;
    while(!$tri)
    {
    
        for($i = $index ; $i < count($tableau) ; $i++) // on part de l'index passé en paramètre et on boucle jusqu'a la fin du tableau
        {
            $tri = TRUE;
            if($tableau[$index] > $tableau[$i]) // si la valeur de l'index et superieur a la valeur du tableau en cours on les changes de place
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