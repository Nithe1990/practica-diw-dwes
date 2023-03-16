<?
    class RutinaEjercicio{
        private $idRutinaEjercicio;
        private $idRutina;
        private $idEjercicio;
        private $kilos;
        private $repeticiones;

        public function __construct($idRutina, $idEjercicio, $kilos, $repeticiones){
            $this->idRutina = $idRutina;
            $this->idEjercicio = $idEjercicio;
            $this->kilos = $kilos;
            $this->repeticiones = $repeticiones;
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