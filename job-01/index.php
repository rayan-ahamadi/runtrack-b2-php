<?php 

// Cet fonction retourne le nombre d'occurence d'un caractère dans une chaine de caractère
function my_str_search(string $haystack,string $needle):int {


    $occ = 0;
    for($i = 0; $i<=strlen($haystack); $i+=1){

      if ($haystack[$i] === $needle){
        $occ+=1;
      }

    }

    return $occ;

}

echo my_str_search('La Plateforme', 'a')


?>