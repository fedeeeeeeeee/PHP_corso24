<?php
function saluta($nome="Ospite") {
    echo "Ciao, " . $nome . "!\n";
}

function somma($a, $b) {
    return $a + $b;
}
function calcolaOperazioni($a, $b) {
    $somma = $a + $b;
    $moltiplicazione = $a * $b;

    return array('somma' => $somma,'moltiplicazione' => $moltiplicazione);
}



saluta("Federica,"); 
saluta();

$risultato = somma(5, 3);
echo "La somma è: " . $risultato . "\n\n";

$resultati = calcolaOperazioni(4, 3);
echo "La somma è: " . $resultati['somma'] . "\n";
echo "La moltiplicazione è: " . $resultati['moltiplicazione'];
?>