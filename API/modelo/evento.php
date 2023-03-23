<?
    class Evento{
        private $idEvento;
        private $activo;
        private $titular;
        private $descripcion;
        private $fechaInicio;
        private $fechaFin;

        public function __construct($titular, $descripcion, $fechaInicio, $fechaFin){
            $this->activo = true;
            $this->titular = $titular;
            $this->descripcion = $descripcion;
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