<?php 

$texte;
$texte = readline("Votre texte : ");

for($i = 0; $i <strlen($texte);$i++)
    echo 'Lettre n°' . $i+1 .' : '. $texte[$i]."\n";

?>