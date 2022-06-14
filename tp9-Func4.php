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
echo "Mensualité : ". calculerMensualité($mensuel). " € \n";

foreach($dureePret as $valeur)
{
    $capacite[$valeur]= capaciteEmprunt($mensuel,$valeur);
    $isPretPossible = isPretPossible($projet,$capacite[$valeur]);
}

if($isPretPossible)
    echo "Nous pouvons vous preter \n";
else
    echo "Nous ne pouvons pas vous preter \n";

$nbMois = calculerTempsPret($mensuel,$projet);

echo "Le temps de prêt minimum pour votre projet est de $nbMois mois soit ". round($nbMois/12) . " ans et ". $nbMois%12 . " mois. \n"; 

function calculerMensualité(float $mensuel) : float
{
     return $mensuel*0.33 ;
}

function capaciteEmprunt(float $mensuel, int $annee) : float
{
    $capacite = calculerMensualité($mensuel)*12*$annee;
    echo "La capacité d'emprunt du client sur $annee ans est de $capacite € \n";
    return $capacite;
}

function isPretPossible(float $projet, float $capacite) : bool
{
    return $projet < $capacite;
}

function calculerTempsPret(float $mensuel, float $projet) : float
{
    return round($projet/(calculerMensualité($mensuel)),0,PHP_ROUND_HALF_UP);
}


?>
