<?php

$apikey = '39c630db9bdafec6cf52a3ce9b10c3dd';
$villes = ['Paris','Lyon','London'];
$file = fopen('exercice6.csv','w+');

foreach($villes as $ville)
    $datas[]= json_decode(file_get_contents('https://api.openweathermap.org/data/2.5/weather?q='.$ville.'&appid='.$apikey));

$data = ['Ville','Latitude','Longitude','Humidité','Temperature','Pression'];
fputcsv($file,$data);
foreach($datas as $meteo)
{
    $meteo =(array) $meteo;
    $coord = (array) $meteo['coord'];
    $main = (array) $meteo['main'];
    $data=[];
    $data[] = $meteo['name'];
    $data[] = $coord['lat'];
    $data[] = $coord['lon'];
    $data[] = $main['humidity'].'%';
    $data[] = $main['temp']/10 .' °C';
    $data[] = $main['pressure'].' Pa';
    fputcsv($file,$data);
}

fclose($file);

?>
