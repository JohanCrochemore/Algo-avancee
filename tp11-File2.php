<?php

$file = fopen('exercice2.csv','w+');

$exercice = fopen('ExerciceCSV.csv','r');

$nbLines = count(file('ExerciceCSV.csv'));


for($i=1; $i<=$nbLines; $i++)
{    
    $datas []= fgetcsv($exercice);
    fseek($exercice,ftell($exercice));
}

foreach($datas as $value)
{
    if($value[4] > 5000)
        fputcsv($file,$value);
}

fclose($file);
fclose($exercice);

?>