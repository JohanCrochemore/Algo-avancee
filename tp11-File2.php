<?php

// on ouvre les différents fichiers 

$file = fopen('exercice2.csv','w+');

$exercice = fopen('ExerciceCSV.csv','r');

// on compte le nombre de ligne

$nbLines = count(file('ExerciceCSV.csv'));

// on rentre chaque ligne dans un tableau
for($i=1; $i<=$nbLines; $i++)
{    
    $datas []= fgetcsv($exercice);
    fseek($exercice,ftell($exercice));
}

// on verifie la valeur de la colonne age et integre la ligne dans le csv si la condition est remplie
foreach($datas as $value)
{
    if($value[4] > 5000)
        fputcsv($file,$value);
}

// on ferme le fichier
fclose($file);
fclose($exercice);

?>