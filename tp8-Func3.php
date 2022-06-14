<?php

function saisirNombre() : float
{
    $nombre ;
    do
    {
        $nombre  = readline("Saisissez un nombre : ");
    }
    while(!floatval($nombre));
    $nombre = floatval($nombre);
    return $nombre;
}

function calculerSuperficie(array $tab) : float
{
    $superficie = 0;
    
    foreach($tab as $piece)
        $superficie += $piece['longueur']*$piece['largeur'];
       
    return $superficie;
}

$nbPiece;

echo "Indiquez le nombre de pièces : \n";

$nbPiece = saisirNombre();

$tableau;

for($i=0; $i < $nbPiece; $i++)
{
    echo "Indiquer la largeur de la piece n° " . $i+1 . " en mètre : \n";
    $tableau[$i]['largeur'] = saisirNombre();
    echo "Indiquer la longueur de la piece n° " . $i+1 . " en mètre : \n";
    $tableau[$i]['longueur'] = saisirNombre();
}

echo "La superficie de votre bien immobilier est de " . calculerSuperficie($tableau) . " m² \n";

?>
