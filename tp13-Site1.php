<?php

$file = fopen('exercice4.html','w+');

// on recupere le contenu du site
$site = file_get_contents('https://www.google.fr/');

// on le met dans un fichier
file_put_contents("exercice4.html",$site);

fclose($file);

?>