<?php
    require_once './VehiculMotorizat.php';

    class GestionareVehicule{
        private static $vehicole = [];

        public static function adauga(VehiculMotorizat $vehiculMotorizat){
            self::$vehicole[] = $vehiculMotorizat;
        }

        public static function afiseaza(){
            foreach(self::$vehicole as $vehicol){
                echo $vehicol->afiseazaDetalii();
                echo "<hr>";
            }
        }
    }
?>