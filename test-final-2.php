<?php

$file = fopen('reduc_salaire.csv','w+');

$exercice = fopen('ExerciceCSV.csv','r');

$nbLines = count(file('ExerciceCSV.csv'));


// on rempli un tableau avec les données du .csv
for($i=1; $i<=$nbLines; $i++)
{    
    $datas []= fgetcsv($exercice);
    fseek($exercice,ftell($exercice));
}

// on rajoute l'entete
$entete [] = 'nom';
$entete [] = 'prenom';
$entete [] = "reduc_salaire";

fputcsv($file,$entete);

$plusdecinquante = [];
// on rempli un tableau avec les personnes qui ont plus de 50 ans
foreach($datas as $value)
{
    $fichier = [];
    if($value[2] > 50 && $value[2] != 'age')
    {
        $plusdecinquante []= $value;
        $fichier []= $value[0];
        $fichier []= $value[1];
        $fichier []= intval($value[4])*0.8; // on applique la reduction de 20% du salaire
        fputcsv($file,$fichier);
    }
}

echo "Il y a ". count($plusdecinquante)." personnes qui ont plus de 50 ans. \n";

calculerSommeSalaire($plusdecinquante);

fclose($file);

// fonction qui calcule la somme des salaires 
function calculerSommeSalaire(array $tableau)
{
    $somme = 0;

    foreach($tableau as $value)
        $somme += intval($value[4]);

    echo "La somme des salaires des personnes de plus de 50 ans est de $somme € \n";
}



