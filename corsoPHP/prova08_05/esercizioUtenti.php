<?php

$users = []; // Array vuoto per gli utenti
$i = 0; // Contatore per il ciclo
$nome= "Federica";
$eta = 24;

do {
  
    if ($eta < 18) {
        $users[0] = ['nome' => $nome, 'eta' => $eta, 'tipo' => 'minorenne'];
    } elseif ($eta >= 18) {
        $users[0] = ['nome' => $nome, 'eta' => $eta, 'tipo' => 'maggiorenne'];
    }

    $i++;

} while (empty($users[0]));

array_push($users, ['nome'=> "Camilla Proietti", "eta"=> "5","tipo"=> "minorenne"]);


foreach ($users as $user) {
    echo "Nome: " . $user['nome'] . ", Età: " . $user['eta'] . ", Tipo: " . $user['tipo'] . "\n";
}

?>
