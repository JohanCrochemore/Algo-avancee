<?php

$file = fopen('exercice5.csv','w+');

// on recupere le contenu du site
$site = file_get_contents('https://www.google.fr/');

// on recupere les liens
preg_match_all('`<a href="[^>]+">[^<]+</a>`',$site,$liens);

// on met chaque lien dans un csv
for($i=0;$i<sizeof($liens);$i++)
{
    for($j=0;$j<sizeof($liens[$i]);$j++)
    {
        $data = [$j => $liens[$i][$j]];
        fputcsv($file,$data);
    }
    
}

// on ferme le fichier
fclose($file);    
?>