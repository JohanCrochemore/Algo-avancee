<?php

$file = fopen('exercice3.csv','w+');

$exercice = fopen('ExerciceCSV.csv','r');

$nbLines = count(file('ExerciceCSV.csv'));


for($i=1; $i<=$nbLines; $i++)
{    
    $datas []= fgetcsv($exercice);
    fseek($exercice,ftell($exercice));
}


$entete [] = $datas[0][0];
$entete [] = $datas[0][1];

fputcsv($file,$entete);

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

fclose($file);
fclose($exercice);

?>