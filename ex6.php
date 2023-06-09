<?php

echo('<br><br>---------Example6-----------<br><br>');

$num1 = 25;
$num2 = 27;

if(($num1 < 30 && $num2 < 30) && ($num1 > 20 && $num2 > 20)){
    $max = max($num1 , $num2);
    echo "the larger value from two positive integer in range 20 , 30 is $max ";
}else{
    echo "0";
}