<?php
$punteggio = 30;
$età = 20;
$pass = false;

if ($età > 18 || $pass) {
    if ($punteggio > 90) {
        echo "Ottimo lavoro, sei ammesso al livello avanzato.";
    } elseif ($punteggio > 75) {
        echo "Buon lavoro, sei ammesso al livello intermedio.";
    } else {
        echo "Devi migliorare per passare al livello successivo.";
    }
} else {
    echo "I corsi avanzati sono per maggiorenni.";
}
