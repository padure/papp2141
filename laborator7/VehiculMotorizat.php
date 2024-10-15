<?php
    include_once './Vehicul.php';

    abstract class VehiculMotorizat implements Vehicul {
        protected $marca; 
        protected $model; 
        protected $anFabricatie; 
        protected $capacitateMotor;

        public function __construct($marca, $model, $anFabricatie, $capacitateMotor){
            $this->marca = $marca;
            $this->model = $model;
            $this->anFabricatie = $anFabricatie;
            $this->capacitateMotor = $capacitateMotor;
        }
        public function porneste(){
            return "Porneste";
        }
        public function opreste(){
            return "Opreste";
        }
        public function afiseazaDetalii(){
            return "$this->marca, $this->model, $this->anFabricatie, $this->capacitateMotor";
        }
        abstract public function tipCombustibil();
    } 
?>