<?php

// Break
// for($i=1; $i<10; $i++){
//    if($i==5){
//       break;
//    }
//    echo $i;
//    echo PHP_EOL;
// }

// for($i=1; $i<20; $i++){
//    if($i % 13 ==0){
//       break;
//    }
//    echo $i;
//    echo PHP_EOL;
// }


// Continue
for($i=1; $i<10; $i++){
   if($i==3 || $i==5 || $i==7){
      continue;
   }
   echo $i;
   echo PHP_EOL;
} 