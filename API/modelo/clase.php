<?
    class Clase{
        private $idClase;
        private $activo;
        private $sala;
        private $plazas;
        private $plazasOcupadas;
        private $fechaInicio;
        private $fechaFin;
        private $idTipo;
        private $idMonitor;

        public function __construct($sala, $plazas, $fechaInicio, $fechaFin, $idTipo, $idMonitor){
            $this->activo = true;
            $this->sala = $sala;
            $this->plazas = $plazas;
            $this->plazasOcupadas = 0;
            $this->fechaInicio = $fechaInicio;
            $this->fechaFin = $fechaFin;
            $this->idTipo = $idTipo;
            $this->idMonitor = $idMonitor;
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