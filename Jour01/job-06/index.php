<?php


function my_array_sort(array $arrayToSort,string $order) : array {
  if($order === 'ASC'){
    for ($i = 0; $i < count($arrayToSort); $i++){
      for ($j = 0; $j < count($arrayToSort); $j++){
        if($arrayToSort[$i] < $arrayToSort[$j]){
          $temp = $arrayToSort[$i];
          $arrayToSort[$i] = $arrayToSort[$j];
          $arrayToSort[$j] = $temp;
        }
      }
    }
    return $arrayToSort;
  }


  if($order === 'DESC'){
    for ($i = 0; $i < count($arrayToSort); $i++){
      for ($j = 0; $j < count($arrayToSort); $j++){
        if($arrayToSort[$i] > $arrayToSort[$j]){
          $temp = $arrayToSort[$i];
          $arrayToSort[$i] = $arrayToSort[$j];
          $arrayToSort[$j] = $temp;
        }
      }
    }
    return $arrayToSort;
  }

  return $arrayToSort;
}

print_r (my_array_sort([4, 2, 8, 6], 'ASC'));



?>