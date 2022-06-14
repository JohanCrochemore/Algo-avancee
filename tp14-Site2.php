<?php

$file = fopen('exercice5.csv','w+');

$site = file_get_contents('https://www.google.fr/');

preg_match_all('`<a href="[^>]+">[^<]+</a>`',$site,$liens);

for($i=0;$i<sizeof($liens);$i++)
{
    for($j=0;$j<sizeof($liens[$i]);$j++)
    {
        $data = [$j => $liens[$i][$j]];
        fputcsv($file,$data);
    }
    
}

fclose($file);    
?>