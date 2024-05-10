<?php

class Cinema {
    private $film;

    public function __construct() {
        $this->film = [];
    }

    public function aggiungiFilm($titolo, $posti) {
        if (!isset($this->film[$titolo])) {
            $this->film[$titolo] = $posti;
            echo "Aggiunto film: $titolo, con $posti posti.\n";
        } else {
            echo "ERRORE: il film $titolo esiste già.\n";
        }
    }

    public function prenotaPosto($titolo) {
        if (isset($this->film[$titolo]) && $this->film[$titolo] > 0) {
            $this->film[$titolo]--;
            echo "Prenotazione per $titolo. Posti rimanenti: {$this->film[$titolo]}.\n";
        } else if (isset($this->film[$titolo]) && $this->film[$titolo] == 0) {
            echo "non ci sono più posti disponibili per $titolo.\n";
        } else {
            echo "ERRORE: il film $titolo non è disponibile.\n";
        }
    }
    public function mostraPrenotazioni() {
        echo "\nFilm e elenco posti:\n";
        foreach ($this->film as $titolo => $posti) {
            echo "$titolo: $posti posti rimanenti.\n";
        }
    }
}

$cinema = new Cinema();
$cinema->aggiungiFilm("TotalRecall", 100);
$cinema->aggiungiFilm("PercyJackson", 50);
$cinema->aggiungiFilm("Divergent", 0);

$cinema->prenotaPosto("Divergent");
$cinema->prenotaPosto("TotalRecall");
$cinema->prenotaPosto("Avatar"); // non è inserito errore

$cinema->mostraPrenotazioni();

?>
