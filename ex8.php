<?php

echo('<br><br>---------Example8-----------<br><br>');  


$number = 12;

$sum =0 ; 

for ($i=0; $i < $number ; $i++) { 
    
    $sum += $number % 10 ;

    $number = (int) $number / 10 ;
}

echo "The sum of digits is: $sum";

