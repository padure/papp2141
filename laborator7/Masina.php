<?php
    require_once './VehiculMotorizat.php';

    class Masina extends VehiculMotorizat{
        public function tipCombustibil(){
            return "Benzina";
        }
        public function afiseazaDetalii(){
            return parent::afiseazaDetalii() . " " .$this->tipCombustibil();
        }
    }
?>