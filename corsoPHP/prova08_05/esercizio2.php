<?php
$kWh = 500;
$costo=  0.20;
$tipoAbitazione = "residenziale"; //o residenziale
$letturaWeekend = false;

$totale = ($tipoAbitazione == "commerciale")  ? $kWh*$costo*1.15 : $kWh*$costo*0.9;

if($letturaWeekend){
    echo "Costo ". $totale ;
    $totale = $totale*0.95;
} 
echo "\n Prezzo finale " . $totale;

?>