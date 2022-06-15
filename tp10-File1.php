<?php

// on créé le fichier ou le réinitialise 

$file = fopen('exercice.csv','w+');

$tableau = [];

// on rempli les cases du tableau

for ($i= 0; $i<=100; $i++)
{
    for($j= 0; $j<=10; $j++)
    {
        if($i == 0)
            $tableau[$i][$j]=$j; // ligne qui sert a mettre l'index de la colonne dans la première ligne
        elseif($j==0)
            $tableau[$i][$j]=$i; // ligne qui sert a mettre l'index de la ligne dans la première colonne
        else
            $tableau[$i][$j] = rand(10,100);
    }

    fputcsv($file,$tableau[$i]); // on rajoute la ligne dans le fichier

}

fclose($file); // on ferme le fichier


?>