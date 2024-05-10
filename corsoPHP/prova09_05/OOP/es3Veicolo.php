<?php


class Veicolo {
    public $ruote = 4;
    }

    class Moto extends Veicolo { 
        public function numeroDiRuote() { 
            return $this->ruote;
     }
     
    }

    $moto1 = new Moto();
    echo $moto1->numeroDiRuote();
?>