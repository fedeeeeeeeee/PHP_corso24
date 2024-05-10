<?php

$prodotto1 = ["cane", "giocattolo", 10];
$prodotto2 = ["penna", "cancelleria", 5];
$prodotto3 = ["aspirapolvere", "elettrodomestico", 200];
$prodotto4 = ["bilancia", "elettrodomestico", 10];
$prodotto5 = ["telecomando", "elettronica", 15];
$prodotto6 = ["astuccio", "cancelleria", 10];
$prodotto7 = ["gatto", "giocattolo", 20];

$vendite = [$prodotto1, $prodotto2, $prodotto3, $prodotto4, $prodotto5, $prodotto6, $prodotto7];

// Inizializzazione degli array per le somme per categoria
$sommaGiocattolo = 0;
$sommaCancelleria = 0;
$sommaElettrodomestico = 0;
$sommaElettronica = 0;

// Calcolo delle somme per categoria
foreach ($vendite as $prodotto) {
    switch ($prodotto[1]) {
        case "giocattolo":
            $sommaGiocattolo += $prodotto[2];
            break;
        case "cancelleria":
            $sommaCancelleria += $prodotto[2];
            break;
        case "elettrodomestico":
            $sommaElettrodomestico += $prodotto[2];
            break;
        case "elettronica":
            $sommaElettronica += $prodotto[2];
            break;
    }
}

echo "Totale vendite per giocattolo: €" . $sommaGiocattolo . "\n";
echo "Totale vendite per cancelleria: €" . $sommaCancelleria . "\n";
echo "Totale vendite per elettrodomestico: €" . $sommaElettrodomestico . "\n";
echo "Totale vendite per elettronica: €" . $sommaElettronica . "\n";

?>