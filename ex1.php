<?php
   echo('---------Example1-----------<br><br>');
    
   $text = 'My name is ramy';
   $first = substr($text , 0 , 2);
   $second= substr($text , -2);
   if(strtolower($first) == strtolower($second)){
      echo 'the first and last 2 char are similar!';
   }else{
      echo 'the first and last 2 char <b>aren\'t </b> similar!';
   }






   


