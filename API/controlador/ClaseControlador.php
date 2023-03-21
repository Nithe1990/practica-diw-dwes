<?
    class ClaseControlador extends ControladorPadre{
        public function controlar(){
            switch ($_SERVER['REQUEST_METHOD']) {
                case 'GET':
                    $this->consultar();
                    break;
                
                case 'POST':
                    $this->crear();
                    break;

                case 'PUT':
                    $this->modificar();
                    break;

                case 'DELETE':
                    $this->borrar();
                    break;

                default:
                    ControladorPadre::respuesta('', array('HTTP/1.1 400 No se ha utilizado el metodo correcto'));
            }
        }

        public function consultar(){
            $parametros = $this->parametros();
            $recurso = self::recurso();
            $lista = ClaseDAO
        }
    }
?>