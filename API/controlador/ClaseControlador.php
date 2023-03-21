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
            $recurso = self::comprobarRecurso();
            if(count($recurso) == 2){
                if(!$parametros){
                    $lista = ClaseDAO::findAll();
                    $data = json_encode($lista);
                    self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));
                }else{
                    self::respuesta('', array('HTTP/1.1 400 No se ha utilizado un filtro correcto'));
                }
            }

            if(count($recurso) == 3){
                $clase = ClaseDAO::findById($recurso[2]);
                $data = json_encode($clase);
                self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));
            }
        }

        public function crear(){
            $dato = json_decode(file_get_contents('php://input'), true);
            if(isset($dato['activo']) && isset($dato['sala']) && isset($dato['plazas']) && isset($dato['plazas_ocupadas']) 
            && isset($dato['fecha_inicio']) && isset($dato['fecha_fin']) && isset($dato['idTipo']) && 
            isset($dato['idMonitor'])){
                $clase = new Clase($dato['sala'], $dato['plazas'], $dato['fecha_inicio'], $dato['fecha_fin'], $dato['idTipo'], $dato['idMonitor'])
            }
        }
    }
?>