<?php

$file = fopen('exercice4.html','w+');

$site = file_get_contents('https://www.google.fr/');

file_put_contents("exercice4.html",$site);

fclose($file);

?>