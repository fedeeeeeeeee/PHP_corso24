<?php

function calcolaPotenza($base, $esponente) {
    if ($esponente == 0) {
        return 1;
    }
        if ($esponente < 0) {
        $base = 1 / $base;
        $esponente = -$esponente;
    }

    $risultato = 1;
    for ($i = 0; $i < $esponente; $i++) {
        $risultato *= $base;
    }
    
    return $risultato;
}

echo calcolaPotenza(2, 3). "\n";
echo calcolaPotenza(5, 0). "\n";
echo calcolaPotenza(2, -2); 

?>
