<?
    class TipoClase{
        private $idTipo;
        private $activo;
        private $nombre;
        private $descripcion;

        public function __construct($nombre, $descripcion){
            $this->activo = true;
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
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