<?php

$file = fopen('carre.csv','w+');

$tableau = [];

// on créé le carrée en mettant soit un X soit un O suivant que la ligne soit pair ou impair
for($i = 0; $i<=10; $i++)
{
    for($j = 0; $j<=10; $j++)
    {
        if($i%2==0)
        {
            $tableau[$i][$j] = "O";
        }
        else
        {
            $tableau[$i][$j] = "X";
        }

    }
    fputcsv($file,$tableau[$i]); // on ajoute la ligne au csv
}


fclose($file);



?>