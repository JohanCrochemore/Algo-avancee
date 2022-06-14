<?php

$file = fopen('exercice.csv','w+');

$tableau = [];

for ($i= 0; $i<=100; $i++)
{
    for($j= 0; $j<=10; $j++)
    {
        if($i == 0)
            $tableau[$i][$j]=$j;
        elseif($j==0)
            $tableau[$i][$j]=$i;
        else
            $tableau[$i][$j] = rand(10,100);
    }

    fputcsv($file,$tableau[$i]);

}

fclose($file);


?>