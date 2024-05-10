<?php

class Articolo {
    private $chiave;
    private $nome;
    private $quantita;

    public function __construct($nome, $quantita) {
        $this->nome = $nome;
        $this->quantita = $quantita;
        
    }

    public function getNome() {

        return $this->nome;
    }

    public function getQuantita() {
        return $this->quantita;
    }

    public function setQuantita($quantita) {
        $this->quantita = $quantita;
    }
}

class Inventario {
    private $articoli = [];

    public function aggiungiArticolo(Articolo $articolo) {
        $this->articoli[$articolo->getNome()] = $articolo;
    }

   
    public function rimuoviArticolo($nome) {
        if (array_key_exists($nome, $this->articoli)) {
            unset($this->articoli[$nome]);
        } else {
            echo "Articolo non trovato nel sistema.\n";
        }
    }

    public function aggiornaQuantita($nome, $quantita) {
        if (isset($this->articoli[$nome])) {
            $this->articoli[$nome]->setQuantita($quantita);
        } else {
            echo "Articolo non trovato nel sistema per aggiornare la quantità.\n";
        }
    }

    public function visualizzaInventario() {
        foreach ($this->articoli as $articolo) {
            echo "Nome: " . $articolo->getNome() . ", Quantità: " . $articolo->getQuantita() . "\n";
        }
    }
}

// Esempio d'uso delle classi con il nuovo metodo
$inventario = new Inventario();

$articolo1 = new Articolo("Penna", 100);
$inventario->aggiungiArticolo($articolo1);

$articolo2 = new Articolo("Matita", 150);
$inventario->aggiungiArticolo($articolo2);

$inventario->visualizzaInventario();
$inventario->aggiornaQuantita("Penna", 90);
$inventario->rimuoviArticolo("Matita");
$inventario->visualizzaInventario();

?>