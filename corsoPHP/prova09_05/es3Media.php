<?php

function calcolaMedia($numeri) {
    if (count($numeri) === 0 ) { //empty($numeri)
        return 0;
    }
    $somma = 0;
    /*
       
        foreach ($numeri as $numero) {
            $somma += $numero;
        }
    */
    $somma = array_sum($numeri);
    $media = $somma / count($numeri);
    return $media;
}

function trovaMassimo($numeri) {
    if (empty($numeri)) {
        return 0;
    }
    $max = $numeri[0]; // con  il for saltavo un giro SIIII FRAAAAAA
    
    foreach ($numeri as $numero) {
        if ($numero > $max) {  
            $max = $numero; 
        }
    }
    return $max;
    //return max($numeri); //FUNZIONE PRONTA
}

$numeri = [10, 20, 30, 40, 50];
echo "La media è: " . calcolaMedia($numeri)  . "\n";
echo "Il valore massimo è: " . trovaMassimo($numeri). "\n"; 

$numeriVuoti = [];
echo "\nLa media di un array vuoto è: " . calcolaMedia($numeriVuoti) ."\n";
echo "Il valore massimo è: " . trovaMassimo($numeriVuoti). "\n"; 
?>
