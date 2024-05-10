<?php

$stringa1 = "sono ";
$stringa2 = "Federica ";

$numero = 7;

if ($numero % 2 == 0) { // con operatore modulo
    $risultato = $stringa1 . $stringa2; // operatore . di concatenazione
} else {
    $risultato = $stringa2 . $stringa1;
}

echo $risultato;

?>
