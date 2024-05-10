<?php

function somma($a, $b) {
    return $a + $b;
}

function divisione($a, $b) {
    if ($b == 0) {
        return "Errore: Divisione per zero";
    } else {
        return $a / $b;
    }
}

function moltiplicazione($a, $b) {
    return $a * $b;
}

function sottrazione($a, $b) {
    return $a - $b;
}

// Array di funzioni
$funzioni = [
    'somma' => 'somma',
    'divisione' => 'divisione',
    'moltiplicazione' => 'moltiplicazione',
    'sottrazione' => 'sottrazione'
];

$a = 12;
$b = 6;

$risultati = [];
$sommaTotale = 0;

foreach ($funzioni as $nome => $funzione) {
    $risultato = $funzione($a, $b);
    $risultati[$nome] = $risultato;
    $sommaTotale += $risultato;
    echo "Il risultato della {$nome} è: {$risultato}\n";
}

echo "La somma di tutti i risultati è: {$sommaTotale}";

?>
