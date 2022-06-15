<?php
$salaire ;
$SALAIRE_MIN = 1500;
$SALAIRE_MAX = 3000;

// tant que la valeur rentrée n'est pas un chiffre compris entre la tranche de salaire, on continue de demander une valeur
do
{
    $salaire  = readline('Saisissez un salaire entre 1500 et 3000 : ');
    $salaire = (intval($salaire));
}
while($salaire < $SALAIRE_MIN OR $salaire > $SALAIRE_MAX);

$jours = 30;

// tant qu'il reste des jours ou que le salaire est supérieur a 0, soustrait une somme.

while($jours >0 && $salaire >0)
{
    $salaire -= rand(30,200);    
    $jours--;
    echo "Jour n° ". 30-$jours . ", il vous reste $salaire € \n";
}

// on verifie si le salaire est positif pour afficher le bon message 

if($salaire >0)
{
    echo "vous avez eco $salaire € \n";
}
else
{
    echo "vous avez tout depenser au jour n°". 30-$jours . "\n";
}



?>