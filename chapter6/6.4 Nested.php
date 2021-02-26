<?php

$num1 = 25;
$num2 = 10;

if($num1 > $num2){
   if($num1 > 50){
      echo "Yes, 50 er cheye boro";
   }elseif($num1 < 30){
      if($num1 == 25){
         echo "It's 25.";
      }else{
         echo "No, It's not.";
      }
   }elseif($num1 < 45){
      echo "Yes, 45 er ceye choto";
   }else{
      echo "tomader ekta conditon o hoy nai.";
   }
}