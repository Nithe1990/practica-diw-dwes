<?
    class ControladorPadre{
        public function comprobarRecurso(){
            if(isset($_SERVER['PATH_INFO'])){
                $uri = $_SERVER['PATH_INFO'];
                $uri = explode('/',$uri);
                return $uri;
            }else{
                ControladorPadre::respuesta('',array('HTTP/1.1 400 No se ha indicado recurso'));
                return null;
            }
        }

        protected function parametros(){        
            $par = $_GET;        
            return $par;
        }

        public static function respuesta($datos,$httpHeaders=array()){
            foreach ($httpHeaders as $value) {
                header($value);
            }
            echo $datos;
            exit;
        }
    }
?>