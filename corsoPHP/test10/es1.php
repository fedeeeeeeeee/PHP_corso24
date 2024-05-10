<?php
function calcolaFattoriale($n) {
    if ($n < 0) { // controllo sulla negatività di n 
        return "ERRORE: numero negativo.";
    } else if ($n == 0) { //controllo caso limite 1 
        return 1;
    } else {
        $fattoriale = 1;
        for ($i = 1; $i <= $n; $i++) { // parto direttamente da 1 e comprendo il valore di n
            $fattoriale *= $i;
        }
        return $fattoriale;
    }
}

echo calcolaFattoriale(5)."\n";  // Output: 120
echo calcolaFattoriale(0)."\n";  // Output: 1
echo calcolaFattoriale(-1); // Output: Errore: il numero non può essere negativo.

?>
