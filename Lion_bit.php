<?php

  function isBitten() {
    $x = rand(1,2);
    $y = floor($x);
   if($y < 2){
     return '<h1>Lion bit your finger!
             <br/>STOP PLAYING WITH THE LION DUMBASS!</h1>';
   } else {
     return '<h1>Lion did not bit your finger!</h1>';
   }
 }

 echo '<br/>';
 echo isBitten();
 echo '<br/>';
 ?>

 
