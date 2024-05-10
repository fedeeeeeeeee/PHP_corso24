<?php

// Definizione delle funzioni
function somma($a, $b) {
    return $a + $b;
}

function divisione($a, $b) {
    return $b != 0 ? $a / $b : "Errore: Divisione per zero";
}

function moltiplicazione($a, $b) {
    return $a * $b;
}

function sottrazione($a, $b) {
    return $a - $b;
}

// Inizializzazione delle variabili
$a = 12;
$b = 6;
$funzioni = ['somma', 'divisione', 'moltiplicazione', 'sottrazione'];
$risultati = [];
$sommaTotale = 0;

// Esecuzione delle funzioni e memorizzazione dei risultati
for ($i = 0; $i < count($funzioni); $i++) {
    $risultato = $funzioni[$i]($a, $b);
    $risultati[] = $risultato; 
    $sommaTotale += $risultato;
    echo "Il risultato della " . $funzioni[$i] . " è: " . $risultato . "\n";
}

echo "La somma di tutti i risultati è: " . $sommaTotale;
?>
