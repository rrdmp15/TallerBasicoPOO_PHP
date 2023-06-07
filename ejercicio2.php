<?php
    class Animal
    {
        public $nombre;
        public $edad;
        public $sonido;

        public function __construct(string $nombre, int $edad, string $sonido){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->sonido = $sonido;
        }

        public function hacer_sonido(){
            return $this->sonido.'<br>';
        }
    }
    
    $animal1 = new Animal('tigrito', 30, 'ROARRR');

    echo $animal1->hacer_sonido();

    class Perro extends Animal
    {
        public $raza;

        public function __construct(string $nombre, int $edad, string $sonido, string $raza){
            parent::__construct($nombre, $edad, $sonido);
            $this->raza = $raza;
        }

        public function mover_cola(){
            return $this->nombre.' esta moviendo la cola<br>';
        }
    }

    $perro1 = new Perro('Firulais', 9, 'Woof', 'Pastor Aleman');

    echo $perro1->mover_cola();
    
?>