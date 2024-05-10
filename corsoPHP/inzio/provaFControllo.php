    
    <?php
    $stringa1 = "Ciao, ";
    $stringa2 = "come stai?";
    echo $stringa1. $stringa2; // Output: "Ciao, come stai?"
    // stringa, intero, float e booleano 
    
    // Intero
    $numeroIntero = 42;
    echo "\nIl numero intero è: " . $numeroIntero; // Output: Il numero intero è: 42

    // Float
    $numeroFloat = 3.14;
    echo "\nIl numero float è: " . $numeroFloat; // Output: Il numero float è: 3.14
    
    // Booleano
    $verita = true;
    echo "\nIl valore booleano (true) è: " . $verita; // Output: Il valore booleano (true) è: 1
/** */
    $frutti = array("Mela", "Banana", "Arancia");
    $frutti[] = "Uva";
    echo "\n" . $frutti[0] . "\n"; // Stampa "Mela"
    foreach ($frutti as $frutto) {
    echo $frutto . "\n";
}
    ?>