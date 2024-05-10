<?php
$eta=25;
$haPatente = true;
$statoResidenza = "Italia";
$statoMentaleSano = false;  //Sobrio, Ubriacco

if ($eta >= 18 && $haPatente && $statoResidenza == "Italia" && $statoMentaleSano) {
    echo "Puoi guidare in Italia.";
} elseif (!$statoMentaleSano || ($eta >= 18 && !$haPatente)) {
    echo "Non puoi guidare";
} else {
    echo "Non soddisfi i requisiti per guidare.";
}
?>