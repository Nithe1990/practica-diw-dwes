<?
    class Ejercicio{
        private $idEvento;
        private $activo;
        private $nombre;
        private $tipo;
        private $video;

        public function __construct($nombre, $tipo, $video){
            $this->activo = true;
            $this->nombre = $nombre;
            $this->tipo = $tipo;
            $this->video = $video;
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