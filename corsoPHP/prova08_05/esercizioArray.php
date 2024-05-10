<?php

$arrayA = [4, 3, 12, 1];
$arrayB = [8, 7, 2, 9];

echo "ArrayA:\n";
foreach ($arrayA as $value) {
    echo $value . " ";
}

echo "\nArrayB:\n";
foreach ($arrayB as $value) {
    echo $value . " ";
}

$mergedArray = array_merge($arrayA, $arrayB); // unito
sort($mergedArray); // ordinato

echo "\nArray unito e ordinato:\n";
foreach ($mergedArray as $value) {
    echo $value . " ";
}

?>
