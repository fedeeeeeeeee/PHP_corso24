<?php

function filtraArrayPari($numeri) {
    $numeriPari = [];
    foreach ($numeri as $numero) {
        if ($numero % 2 == 0) { //modulo
            $numeriPari[] = $numero;
        }
    }
    return $numeriPari; 
}

$numeriInput = [1,2,3,4,5,6,7,8];
$numeriPari = filtraArrayPari($numeriInput);

 foreach ($numeriPari as $numero) {
    echo $numero."\n";
 }

?>
