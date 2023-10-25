<?php 

$arry = [];
$lines = file("lista.txt");

foreach($lines as $line)
{
    $line =  intval($line);
    array_push($arry ,$line);
}

 $soma = array_sum($arry);

 $media = $soma/(count($arry));
 
 $media = number_format($media,2);

 echo "Média = $media";




