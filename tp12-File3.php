<?php

// on ouvre les fichiers
$file = fopen('exercice3.csv','w+');

$exercice = fopen('ExerciceCSV.csv','r');

// on compte le nombre de ligne du fichier
$nbLines = count(file('ExerciceCSV.csv'));

// on rempli un tableau qui contient les lignes du fichier
for($i=1; $i<=$nbLines; $i++)
{    
    $datas []= fgetcsv($exercice);
    fseek($exercice,ftell($exercice));
}

// on prend la 1ere entree qui correspond au libellés pour la mettre en haut du tableau
$entete [] = $datas[0][0];
$entete [] = $datas[0][1];

fputcsv($file,$entete);

// pour chaque ligne, on met la ligne dans le fichier si la condition est remplie
foreach($datas as $value)
{
    $fichier = [];
    if($value[2] > 30 && $value[2]<50)
    {
        
        $fichier []= $value[0];
        $fichier []= $value[1];
        fputcsv($file,$fichier);
    }
}

// on ferme les fichiers

fclose($file);
fclose($exercice);

?>