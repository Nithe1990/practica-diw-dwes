<?
    class AlumnoRutina{
        private $idAlumnoRutina;
        private $idAlumno;
        private $idRutina;

        public function __construct($idAlumno, $idRutina){
            $this->idAlumno = $idAlumno;
            $this->idEvento = $idRutina;
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