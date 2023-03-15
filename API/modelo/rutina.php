<?
    class Rutina{
        private $idRutina;
        private $activo;
        private $fechaInicio;
        private $fechaFin;

        public function __construct($fechaInicio, $fechaFin){
            $this->activo = true;
            $this->fechaInicio = $fechaInicio;
            $this->fechaFin = $fechaFin;
        }
        
        public function __get($atributo){
            if(array_key_exists($atributo, get_object_vars($this))){
                return $this->$atributo;
            }
        }

        public function __set($atributo, $valor){
            if(array_key_exists($atributo, get_object_vars($this))){
                $this->$atributo = $valor;
            }
        }
    }
?>