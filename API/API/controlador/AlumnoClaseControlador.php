<?
    class AlumnoClaseControlador extends ControladorPadre{
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
                    $lista = AlumnoClaseDAO::findAll();
                    $data = json_encode($lista);
                    self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));
                }else{
                    self::respuesta('', array('HTTP/1.1 400 No se ha utilizado un filtro correcto'));
                }
            }

            if(count($recurso) == 3){
                $alumnoClase = AlumnoClaseDAO::findById($recurso[2]);
                $data = json_encode($alumnoClase);
                self::respuesta($data, array('Content-Type: application/json', 'HTTP/1.1 200 OK'));
            }
        }

        public function crear(){
            $dato = json_decode(file_get_contents('php://input'), true);
            if(isset($dato['idAlumno']) && isset($dato['idClase']) && isset($dato['calificacion'])){
                $alumnoClase = new AlumnoClase($dato['idAlumno'], $dato['idClase'], $dato['calificacion']);
                if(AlumnoClaseDAO::insert($alumnoClase)){
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
                if(isset($dato['idAlumno']) && isset($dato['idClase']) && isset($dato['calificacion'])){
                    $alumnoClase = new AlumnoClase($dato['idAlumno'], $dato['idClase'], $dato['calificacion']);
                    $alumnoClase->idAlumnoClase = $recurso[2];
                    if(AlumnoClaseDAO::update($alumnoClase)){
                        self::respuesta('', array('Content-Type: application/json', 'HTTP/1.1 201 Registro modificado'));
                    }else{
                        self::respuesta('', array('Content-Type: application/json', 'HTTP/1.1 200 Registro no encontrado'));
                    }
                }else{
                    self::respuesta('', array('HTTP/1.1 400 El recurso está mal formado /alumno_clase/{id}'));
                }
            }
        }

        public function borrar(){
            $recurso = self::comprobarRecurso();
            if(count($recurso) == 3){
                if(!AlumnoClaseDAO::delete($recurso[2])){
                    self::respuesta('', array('Content-Type: application/json', 'HTTP/1.1 204 No se ha borrado ningun registro'));
                }else{
                    self::respuesta('', array('Content-Type: application/json', 'HTTP/1.1 204 Registro borrado'));
                }
            }else{
                self::respuesta('', array('HTTP/1.1 400 El recurso está mal formado /alumno_clase/{id}'));
            }
        }
    }
?>