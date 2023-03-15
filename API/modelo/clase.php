<?
    class Clase{
        private $idClase;
        private $activo;
        private $sala;
        private $plazas;
        private $plazasOcupadas;
        private $fechaInicio;
        private $fechaFin;
        private $tipoClase;
        private $monitor;

        public function __construct($sala, $plazas, $fechaInicio, $fechaFin, $tipoClase, $monitor){
            $this->activo = true;
            $this->sala = $sala;
            $this->plazas = $plazas;
            $this->plazasOcupadas = 0;
            $this->fechaInicio = $fechaInicio;
            $this->fechaFin = $fechaFin;
            $this->tipoClase = $tipoClase;
            $this->monitor = $monitor;
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