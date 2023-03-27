<?
    class AlumnoClase{
        private $idAlumnoClase;
        private $idAlumno;
        private $idClase;
        private $calificacion;

        public function __construct($idAlumno, $idClase, $calificacion){
            $this->idAlumno = $idAlumno;
            $this->idClase = $idClase;
            $this->calificacion = $calificacion;
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