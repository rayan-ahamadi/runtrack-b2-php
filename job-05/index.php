<?php

function my_is_prime(int $number) : bool {

  if ($number < 2){
    return false;
  }

  for ($i = 2; $i <= sqrt($number); $i++) {
    if ($number % $i == 0) {
        // Si n est divisible par i, alors il n'est pas premier
        return false;
    }
}

// Si aucun diviseur n'a été trouvé, le nombre est premier
return true;

}



?>