<?
    class RutinaEjercicioControlador extends ControladorPadre{
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
                    $lista = RutinaEjercicioDAO::findAll();
                    $data = json_encode($lista);
                    self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));
                }else{
                    self::respuesta('', array('HTTP/1.1 400 No se ha utilizado un filtro correcto'));
                }
            }

            if(count($recurso) == 3){
                $rutinaEjercicio = RutinaEjercicioDAO::findById($recurso[2]);
                $data = json_encode($rutinaEjercicio);
                self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));
            }
        }

        public function crear(){
            $dato = json_decode(file_get_contents('php://input'), true);
            if(isset($dato['idRutina']) && isset($dato['idEjercicio']) && isset($dato['kilos']) &&
            isset($dato['repeticiones'])){
                $rutinaEjercicio = new RutinaEjercicio($dato['idRutina'], $dato['idEjercicio'], $dato['kilos'], $dato['repeticiones']);
                if(RutinaEjercicioDAO::insert($rutinaEjercicio)){
                    self::respuesta('', array('Content-Type: application/json', 'HTTP/1.1 201 CREADO'));
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
                if(isset($dato['idRutina']) && isset($dato['idEjercicio']) && isset($dato['kilos']) &&
                isset($dato['repeticiones'])){
                    $rutinaEjercicio = new RutinaEjercicio($dato['idRutina'], $dato['idEjercicio'], $dato['kilos'], $dato['repeticiones']);
                    $rutinaEjercicio->idRutinaEjercicio = $recurso[2];
                    if(RutinaEjercicioDAO::update($rutinaEjercicio)){
                        self::respuesta('', array('Content-Type: application/json', 'HTTP/1.1 201 Registro modificado'));
                    }else{
                        self::respuesta('', array('Content-Type: application/json', 'HTTP/1.1 200 Registro no encontrado'));
                    }
                }else{
                    self::respuesta('', array('HTTP/1.1 400 El recurso está mal formado /rutina_ejercicio/{id}'));
                }
            }
        }

        public function borrar(){
            $recurso = self::comprobarRecurso();
            if(count($recurso) == 3){
                if(!RutinaEjercicioDAO::delete($recurso[2])){
                    self::respuesta('', array('Content-Type: application/json', 'HTTP/1.1 204 No se ha borrado ningun registro'));
                }else{
                    self::respuesta('', array('Content-Type: application/json', 'HTTP/1.1 204 Registro borrado'));
                }
            }else{
                self::respuesta('', array('HTTP/1.1 400 El recurso está mal formado /rutina_ejercicio/{id}'));
            }
        }
    }
?>