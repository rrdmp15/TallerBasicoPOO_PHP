<?php
    class Vehiculo{
        public $marca;
        public $modelo;
        public $velocidad;


        public function __construct(string $marca, string $modelo,int $velocidad){
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->velocidad = $velocidad;
        }

        public function acelerar(){
            $acelerado = $this->velocidad+10;
            return 'la velocidad ha aumentado en 10km/h ahora la velocidad del vehiculo es '.$acelerado.'km/h<br>';
        }

        public static function convertirKmHEnMph(int $velocidad){
            return 'la velocidad es '.$velocidad/1.60934.'Mp/h<br>';
        } 
    }

    $vehiculo1 = new Vehiculo('Ford', 'Fiesta', 50);
    echo $vehiculo1->acelerar();
    echo Vehiculo::convertirKmHEnMph($vehiculo1->velocidad);

    class Coche extends Vehiculo
    {
        public $combustible;

        public function __construct(string $marca, string $modelo, int $velocidad, int $combustible){
            parent::__construct($marca, $modelo, $velocidad);
            $this->combustible = $combustible;
        }

        public function acelerar(){
            $acelerado = $this->velocidad+20;
            return 'la velocidad ha aumentado en 10km/h ahora la velocidad del vehiculo es '.$acelerado.'km/h<br>';
        }
    }

    $coche1 = new Coche('Audi', 'A1', 80, 50);
    echo $coche1->acelerar();
    
?>
