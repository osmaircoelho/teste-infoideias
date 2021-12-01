<?php

class PrimoInferior
{

  public function Primo($num)
   {
      $primo = true;

       for ($i = 2; $i < $num; $i++) {
           if ($num % $i === 0) {
               $primo = false;
               return $primo;
           }
       }

       return $primo;
   }
}

$i = 2;
$array_primos = array();
$quantidade_primos = 100;

while( $i <= $quantidade_primos ) {
    $primo = new PrimoInferior();

    if ( $primo->Primo($i) ) {
        array_push($array_primos, $i);
    }
    $i++;
}
print "O maior número primo inferior ao número recebido eh-> ".max($array_primos);
