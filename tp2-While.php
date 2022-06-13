<?php
$salaire ;
$SALAIRE_MIN = 1500;
$SALAIRE_MAX = 3000;
do
{
    $salaire  = readline('Saisissez un salaire entre 1500 et 3000 : ');
    $salaire = (intval($salaire));
}
while($salaire < $SALAIRE_MIN OR $salaire > $SALAIRE_MAX);

$jours = 30;

while($jours >0 && $salaire >0)
{
    $salaire -= rand(30,200);    
    $jours--;
    echo "Jour n° ". 30-$jours . ", il vous reste $salaire € \n";
}

if($salaire >0)
{
    echo "vous avez eco $salaire € \n";
}
else
{
    echo "vous avez tout depenser au jour n°". 30-$jours . "\n";
}



?>