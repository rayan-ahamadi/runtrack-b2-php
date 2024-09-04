<?php

function my_closest_to_zero(array $array) : int {
    $closest = $array[0];
    for($i=0; $i <= count($array);$i++){
      if($array[$i] > 0){

        if($array[$i] - 0 < $closest){
          $closest = $array[$i];
        }
      }else{
        if(0 - $array[$i]   < $closest){
          $closest = $array[$i];
        }
      }
      
    }

    return $closest;
}

echo my_closest_to_zero([2,-1,5,23,21,9]);



?>