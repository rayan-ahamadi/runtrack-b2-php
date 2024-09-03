<?php 

function my_fizz_buzz(int $length) : array {
  $fizzBuzz = [];

  for ($i = 1; $i <= $length; $i++) {
    if($i % 5 == 0 && $i % 3 == 0){
      array_push($fizzBuzz,'FizzBuzz');
    }else if($i % 3 == 0){
      array_push($fizzBuzz,'Fizz');
    }else if($i % 5 == 0){
      array_push($fizzBuzz,'Buzz');
    }else{
      array_push($fizzBuzz,$i);
    }
  }

  return $fizzBuzz;

}

print_r(my_fizz_buzz(15));



?>