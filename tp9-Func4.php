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

echo "Saisissez la durée voulu du pret de votre client en année : \n";
$anneePret = saisirNombre();

$dureePret = [5,10,15,20,25];
$capacite;
echo "Mensualité : ". calculerMensualité($mensuel). " € \n";

foreach($dureePret as $valeur)
{
    $capacite[$valeur]= capaciteEmprunt($mensuel,$valeur);
}

print_r($capacite);

$isPretPossible = isPretPossible($projet,$mensuel,$anneePret);

if($isPretPossible)
    echo "Nous pouvons vous preter sur $anneePret ans \n";
else
{
    echo "Nous ne pouvons pas vous preter sur $anneePret ans \n";

    $nbMois = calculerTempsPret($mensuel,$projet);
    
    echo "Le temps de prêt minimum pour votre projet est de $nbMois mois soit ". round($nbMois/12) . " ans et ". $nbMois%12 . " mois. \n";
}
 

function calculerMensualité(float $mensuel) : float
{
     return $mensuel*0.33 ;
}

function capaciteEmprunt(float $mensuel, int $annee) : float
{
    $capacite = calculerMensualité($mensuel)*12*$annee;
    return $capacite;
}

function isPretPossible(float $projet, float $mensuel, float $anneePret) : bool
{
    return $projet < capaciteEmprunt($mensuel,$anneePret);
}

function calculerTempsPret(float $mensuel, float $projet) : float
{
    return round($projet/(calculerMensualité($mensuel)),0,PHP_ROUND_HALF_UP);
}


?>
