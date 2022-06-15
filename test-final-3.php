<?php

$file = fopen('prixetvolume.csv','w+');

$datas= json_decode(file_get_contents('https://api2.binance.com/api/v3/ticker/24hr'));

$arrayDatas = [];

// on transforme chaque object stdClass en array
foreach ($datas as $product)
{
    $arrayDatas[] = (array) $product;
}

// on effectue le tri du tableau
for($i = 0; $i < count($arrayDatas) ; $i++)
{
   $arrayDatas = triTableau($i,$arrayDatas);
}

// on recupere les 10 premiers 
$dixpluscher = [];
for($i = 0; $i<10; $i++)
{
    $dixpluscher [] = $arrayDatas[$i];
}

$dixpluscher = formaterTableau($dixpluscher);

// on met l'entete
fputcsv($file,array_keys($dixpluscher[0]));

// on ajoute chaque ligne
foreach($dixpluscher as $produit)
    fputcsv($file,$produit);


fclose($file);

// fonction qui change le format des dates et rajoute la colonne volume*lastPrice
function formaterTableau(array $tableau) : array
{
    foreach ($tableau as &$value) 
    {
        $value['openTime'] = date('d/m/Y H:i',intval($value['openTime']/1000));
        $value['closeTime'] = date('d/m/Y H:i',intval($value['closeTime']/1000));
        $value['volume*lastPrice'] = $value['lastPrice']*$value['volume'];
    }

    return $tableau;
}

// fonction qui tri le tableau en fonction du champ 'lastPrice'
function triTableau(int $index, array $tableau) : array
{
    $tri = FALSE;
    while(!$tri)
    {
    
        for($i = $index ; $i < count($tableau) ; $i++) 
        {
            $tri = TRUE;
            if(intval($tableau[$index]['lastPrice']) < intval($tableau[$i]['lastPrice'])) 
            {
                $valeur = $tableau[$i];
                $tableau[$i]=$tableau[$index];
                $tableau[$index]=$valeur;
                $tri = FALSE;
                
            }

        }

    }

    return $tableau;
}
?>