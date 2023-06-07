<?php
    class Figura{
        public $color;
        public $area;

        public function __construct(string $color, int $area){
            $this->color = $color;
            $this->area = $area;
        }

        public function calcular_area(){
            return 'El area de la figura es '.$this->area.'m2<br>';
        }
    }

    $figura1 = new Figura('naranja', 45);
    echo $figura1->calcular_area();

    class Circulo extends Figura
    {
        public $radio;

        public function __construct(string $color, int $area, int $radio){
            parent::__construct($color, $area);
            $this->radio = $radio;
        }

        public function calcular_area(){
            $radio_cuadrado = pow($this->radio, 2);
            $area = 3.1416*$radio_cuadrado;
            $this->area = $area;
        
            return 'El area de la figura es '.$this->area.'cm2<br>';
        }
    }

    $circulo1 = new Circulo('azul', 0, 4);
    echo $circulo1->calcular_area();

    class Rectangulo extends Figura
    {
        public $largo;
        public $ancho;

        public function __construct(string $color, int $area, int $largo, int $ancho){
            parent::__construct($color, $area);
            $this->largo = $largo;
            $this->ancho = $ancho;
        }

        public function calcular_area(){;
            $area = $this->largo*$this->ancho;
            $this->area = $area;
        
            return 'El area de la figura es '.$this->area.'cm2<br>';
        }
    }

    $rectangulo1 = new Rectangulo('azul', 0, 8,10);
    echo $rectangulo1->calcular_area();

?>