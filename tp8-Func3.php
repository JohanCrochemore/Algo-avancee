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

function calculerSuperficie(float $nb1, float $nb2) : float
{
    return $nb1*$nb2;
}


$nbPiece;

echo "Indiquez le nombre de pièces : \n";
$nbPiece = saisirNombre();

$tableau;

for($i=0; $i < $nbPiece; $i++)
{
    echo "Indiquer la largeur de la piece n° " . $i+1 . " (m): \n";
    $largeur = saisirNombre();
    echo "Indiquer la longueur de la piece n° " . $i+1 . " (m): \n";
    $longueur = saisirNombre();

    $tableau[] =  calculerSuperficie($largeur,$longueur);
}

echo "La superficie de votre bien immobilier est de " . array_sum($tableau) . "m² \n";


?>
