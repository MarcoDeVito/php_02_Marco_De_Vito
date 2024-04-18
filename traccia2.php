<?php
$numbers= [2, 2, 15, 67, 29, 93, 2, 2, 11];
$sum=0;
$i=0;

foreach ($numbers as  $number) {
    
    if($number%2==0)
    {
        $sum+=$number;
        $i++;
    }
    
}

$media=$sum/$i;
echo "somma:$sum";
echo "\n";
echo "quantità num dispari:$i";
echo "\n";
echo "media:$media";
