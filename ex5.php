<?php

echo('<br><br>---------Example5-----------<br><br>');
$number1 = 105;
$number2 = 97;

$near1 = abs(100 - $number1);
$near2 = abs(100 - $number2);


if($near1 == $near2){
 echo "two numbers are equal and the result is : 0 ";
}
elseif($near1 < $near2 ){
 echo "The number nearest to 100 from { $number1 , $number2 } is: " . $number1;
}
else{
 echo "The number nearest to 100 from { $number1 , $number2 } is: " . $number2;
}