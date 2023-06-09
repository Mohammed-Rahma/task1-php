<?php

echo('<br><br>---------Example9-----------<br><br>');  
    

$string = "Hello , World!";
$reversed = '';
for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $reversed .= $string[$i];
}


echo "Reversed string: $reversed";

