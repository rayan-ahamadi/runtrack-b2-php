<?php 

function my_str_reverse(string $string) : string{
  $strReversed = "";

  for($i = strlen($string); $i>=0 ; $i-=1){
    $strReversed = $strReversed . $string[$i];
  }

  return $strReversed;

}

echo my_str_reverse("Hello");



?>