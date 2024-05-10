<?php
function numeriPari($listaNumeri) {
     $numeriPari = array();
     foreach ($listaNumeri as $numero) {
         if ($numero % 2 == 0) {
             $numeriPari[] = $numero;
         }
     }
     return $numeriPari;
 }
 
 // Esempio di utilizzo della funzione
 $listaNumeri = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
 $numeriPari = numeriPari($listaNumeri);
 foreach ($numeriPari as $numero) {
    echo $numero."\n";
 }
 ?>