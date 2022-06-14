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
    
    foreach($tab as $value)
        $superficie += $value['longueur']*$value['largeur'];
       
    return $superficie;
}

$nbPiece;

echo "Indiquez le nombre de pièces : \n";

$nbPiece = saisirNombre();

$tableau;

for($i=0; $i < $nbPiece; $i++)
{
    echo "Indiquer la largeur de la piece n° " . $i+1 . " en mètre : \n";
    $largeur = saisirNombre();
    echo "Indiquer la longueur de la piece n° " . $i+1 . " en mètre : \n";
    $longueur = saisirNombre();
    $tableau[$i]['longueur']= $longueur;
    $tableau[$i]['largeur'] = $largeur;
    
}
print_r($tableau);

echo "La superficie de votre bien immobilier est de " . calculerSuperficie($tableau) . "m² \n";

?>
