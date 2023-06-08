<?php
    class Empleado{
        public $nombre;
        public $edad;
        public $sueldo;
        private static $contador = 0;

        public function __construct(string $nombre, int $edad,int $sueldo){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->sueldo = $sueldo;
            self::$contador++;
            $this->id = self::$contador; 
        }

        public function calcular_salario_anual(){
            $salario_anual = $this->sueldo*12;
            $salario_anual = number_format($salario_anual, 2, ',', '.');
            return 'El empleado gana '.$salario_anual.'USD al año<br>';
        }

        public static function generarIdEmpleado() {
            return self::$contador.'<br>';
        }
        
        public function getId() {
            return $this->id.'<br>';
        }
    }

    $empleado1 = new Empleado('Karla', 23, 1200);
    echo $empleado1->calcular_salario_anual();
    echo 'El ID del empleado es '.$empleado1->generarIdEmpleado();

    class Gerente extends Empleado
    {
        public $departamento;

        public function __construct(string $nombre, int $edad, int $sueldo, string $departamento){
            parent::__construct($nombre, $edad, $sueldo);
            $this->departamento = $departamento;
        }

        public function calcular_salario_anual(){
            $salario_mensual_porcentaje=(10 / 100) * $this->sueldo;
            $salario_mensual = $this->sueldo + $salario_mensual_porcentaje;
            $salario_anual = $salario_mensual*12;
            $salario_anual = number_format($salario_anual, 2, ',', '.');
            return 'El Gerente gana '.$salario_anual.'USD al año<br>';
        }
    }

    $gerente1 = new Gerente('Max', 35, 1200, 'Ventas');
    echo $gerente1->calcular_salario_anual();
    

?>