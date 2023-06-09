<?php

echo('<br><br>---------Example7-----------<br><br>');
  
$string = "Hello123World456";

$count = 0 ;


for ($i=0; $i <strlen($string) ; $i++) { 
    
    if(is_numeric($string[$i])){
        $count++;
    }
}

echo "The number of digit occurrences in '$string' is: $count";

