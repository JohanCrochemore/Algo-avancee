<?php 

$texte;
$texte = readline("Votre texte : ");

// on parcourt toute la chaine de charactère et on affiche les lettres une par une

for($i = 0; $i <strlen($texte);$i++)
    echo 'Lettre n°' . $i+1 .' : '. $texte[$i]."\n";

?>