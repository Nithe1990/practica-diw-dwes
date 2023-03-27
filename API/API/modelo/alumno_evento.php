<?
    class AlumnoEvento{
        private $idAlumnoEvento;
        private $idAlumno;
        private $idEvento;

        public function __construct($idAlumno, $idEvento){
            $this->idAlumno = $idAlumno;
            $this->idEvento = $idEvento;
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