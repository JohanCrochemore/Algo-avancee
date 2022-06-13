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


echo "Saisissez le revenu mensuel du client : \n";
$mensuel = saisirNombre();


echo "Saisissez le montant du projet de votre client : \n";
$projet = saisirNombre();

$dureePret = [5,10,15,20,25];
$capacite;
calculerMensualité($mensuel);

foreach($dureePret as $valeur)
{
    $capacite[$valeur]= capaciteEmprunt($mensuel,$valeur);
    $isPretPossible = isPretPossible($projet,$capacite[$valeur]);
}

if($isPretPossible)
    echo "Nous pouvons vous pretez \n";
else
    echo "Nous ne pouvons pas vous pretez \n";

function calculerMensualité(float $mensuel)
{
     echo "Mensualité : " . $mensuel*0.33 ."€ \n";
}

function capaciteEmprunt(float $mensuel, int $annee) : float
{
    $capacite = $mensuel*0.33*12*$annee;
    echo "La capacité d'emprunt du client sur $annee ans est de $capacite € \n";
    return $capacite;
}

function isPretPossible(float $projet, float $capacite) : bool
{
    return $projet < $capacite;
}


?>
