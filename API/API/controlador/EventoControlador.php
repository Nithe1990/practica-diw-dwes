<?
    class EventoControlador extends ControladorPadre{
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
                    $lista = EventoDAO::findAll();
                    $data = json_encode($lista);
                    self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));
                }else{
                    self::respuesta('', array('HTTP/1.1 400 No se ha utilizado un filtro correcto'));
                }
            }

            if(count($recurso) == 3){
                $evento = EventoDAO::findById($recurso[2]);
                $data = json_encode($evento);
                self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));
            }
        }

        public function crear(){
            $dato = json_decode(file_get_contents('php://input'), true);
            if(isset($dato['activo']) && isset($dato['titular']) && isset($dato['descripcion']) && 
            isset($dato['fecha_inicio']) && isset($dato['fecha_fin'])){
                $evento = new Evento($dato['titular'], $dato['descripcion'], $dato['fecha_inicio'], $dato['fecha_fin']);
                if(EventoDAO::insert($evento)){
                    self::respuesta('', array('Content-Type: application/json', 'HTTP/1.1 201 Registro creado'));
                }else{
                    self::respuesta('', array('HTTP/1.1 400 Formato JSON incorrecto'));
                }
            }
        }

        public function modificar(){
            $recurso = self::comprobarRecurso();
            if(count($recurso) == 3){
                $body = file_get_contents('php://input');
                $dato = json_decode($body, true);
                if(isset($dato['activo']) && isset($dato['titular']) && isset($dato['descripcion']) && 
                isset($dato['fecha_inicio']) && isset($dato['fecha_fin'])){
                    $evento = new Evento($dato['titular'], $dato['descripcion'], $dato['fecha_inicio'], $dato['fecha_fin']);
                    $evento->idEvento = $recurso[2];
                    if(EventoDAO::update($evento)){
                        self::respuesta('', array('Content-Type: application/json', 'HTTP/1.1 201 Registro modificado'));
                    }else{
                        self::respuesta('', array('Content-Type: application/json', 'HTTP/1.1 200 Registro no encontrado'));
                    }
                }else{
                    self::respuesta('', array('HTTP/1.1 400 El recurso está mal formado /evento/{id}'));
                }
            }
        }

        public function borrar(){
            $recurso = self::comprobarRecurso();
            if(count($recurso) == 3){
                if(!EventoDAO::delete($recurso[2])){
                    self::respuesta('', array('Content-Type: application/json', 'HTTP/1.1 204 No se ha borrado ningun registro'));
                }else{
                    self::respuesta('', array('Content-Type: application/json', 'HTTP/1.1 204 Registro borrado'));
                }
            }else{
                self::respuesta('', array('HTTP/1.1 400 El recurso está mal formado /evento/{id}'));
            }
        }
    }
?>