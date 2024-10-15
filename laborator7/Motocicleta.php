<?php
    require_once './VehiculMotorizat.php';

    class Motocicleta extends VehiculMotorizat{
        const COMBUSTIBIL = "Motorina";
        
        public function tipCombustibil(){
            return self::COMBUSTIBIL;
        }
        public function afiseazaDetalii(){
            return parent::afiseazaDetalii() . " " .$this->tipCombustibil();
        }
    }
?>