<?php
    class Persona
    {
        public $nombre;
        public $edad;
        public $sexo;

        public function __construct(string $nombre, int $edad, string $sexo){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->sexo = $sexo;
        }

        public function saludar(){
            return 'Hola, mi nombre es '.$this->nombre.'<br>';
        }

        public static function mayor_de_edad($edad){
            return ($edad >= 18 ) ? 'es mayor de edad<br><br>' : 'NO es mayor de edad<br><br>';
        }
    }
    
    $persona1 = new Persona('maria', 18, 'femenina');

    echo $persona1->saludar();
    
    echo Persona::mayor_de_edad($persona1->edad);

    class Estudiante extends Persona 
    {
        public $carrera;

        public function __construct(string $nombre, int $edad, string $sexo, string $carrera){
            parent::__construct($nombre, $edad, $sexo);
            $this->carrera = $carrera;
        }

        public function estudiar(){
            return 'Estoy estudiando '.$this->carrera.'<br>';
        }
    }

    $estudiante1 = new Estudiante('juan', 21, 'hombre', 'derecho');

    echo $estudiante1->saludar();
    echo $estudiante1->estudiar();

?>