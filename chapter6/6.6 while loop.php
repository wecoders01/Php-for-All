<?php

$num = 1;

/*
while($num <=10):
   echo $num;
   echo PHP_EOL;
   $num++;

endwhile;
*/

// Print all even number between 1-100.
// while($num <= 100):
//    if($num % 2 == 0){
//       echo $num;
//       echo PHP_EOL;
//    }
//    $num++;

// endwhile;

// je number gulo 3 & 5 diye vag kora jay.
while($num <= 100){
   if($num % 3 == 0 && $num % 5 == 0){
      echo $num;
      echo PHP_EOL;
   }
   $num++;
}