<?php

class Account {
    private $saldo;
    private $movimenti;
     
 
    private function stampaStatoAttualeConto() {
        echo "Stato attuale del conto:\n";
        foreach ($this->movimenti as $movimento) {
            echo $movimento . "\n";
        }
        echo "Saldo attuale: €" . $this->saldo . "\n";
    }

    public function __construct($saldoIniziale) {
        $this->saldo = $saldoIniziale;
        $this->movimenti = [];
        $this->movimenti[] = "Saldo iniziale: €" . $saldoIniziale; 
    }
 
    public function deposita($importo) {
        if ($importo > 0) {
            $this->saldo += $importo;
            $this->movimenti[] = "Deposito: €" . $importo; // Traccia il deposito
        }
    }

    public function preleva($importo) {
        if ($importo > 0 && $importo <= $this->saldo) {
            $this->saldo -= $importo;
            $this->movimenti[] = "Prelievo: €" . $importo;
            return $importo;
        }
        return 0;
    }

    public function getSaldo() {
        $this->stampaStatoAttualeConto();
        return $this->saldo;
    }
}

$account = new Account(2000);
$account->deposita(2000);
$account->preleva(50);
$account->preleva(1950);

$account->getSaldo();
?>