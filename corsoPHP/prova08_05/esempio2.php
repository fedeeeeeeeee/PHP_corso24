<?php
$eta = 22;
$studente = true;
$totaleSpesa = 120;
$giornoSpeciale = false;

echo $giornoSpeciale ? "oggi è un giorno speciale": "giorno normale\n";

if ($eta < 18 && $totaleSpesa > 50) {
    echo "Hai diritto a uno sconto del 10% (minorenne e speso +50)).";
} elseif ($studente && $totaleSpesa > 100 && $giornoSpeciale) {
    echo "Hai diritto a uno sconto del 20% ";
} elseif ($eta > 65 || ($studente && $totaleSpesa > 80)) {
    echo "Hai diritto a uno sconto del 15% ";
} else {
    echo "Non hai diritto a sconti speciali.";
}
?>