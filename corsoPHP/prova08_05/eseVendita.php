<?php

$vendite = [
    ['nome' => 'Cellulare', 'categoria' => 'Elettronica', 'importo' => 150],
    ['nome' => 'Cappello', 'categoria' => 'Abbigliamento', 'importo' => 50],
    ['nome' => 'TV', 'categoria' => 'Elettronica', 'importo' => 200],
    ['nome' => 'Cotivazione', 'categoria' => 'Libri', 'importo' => 20],
    ['nome' => 'Maglietta', 'categoria' => 'Abbigliamento', 'importo' => 100]
];

$somme = [];

foreach ($vendite as $vendita) {
    if (!isset($somme[$vendita['categoria']])) {
        $somme[$vendita['categoria']] = 0;
    }
    $somme[$vendita['categoria']] += $vendita['importo'];
    echo  $somme[$vendita['categoria']];
}

foreach ($somme as $categoria => $totale) {
    echo "Totale vendite per $categoria: €$totale\n";
}

?>
