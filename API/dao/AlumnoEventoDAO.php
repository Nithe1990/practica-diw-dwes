<?


    class AlumnoEventoDAO extends Factory implements DAO{
        public static function findAll(){
            $sql = "select * from alumno_evento;";
            $datos = array();
            $resultado = parent::ejecutar($sql, $datos);
            $arrayAlumnoEvento = $resultado->fetchAll(PDO::FETCH_ASSOC);
            return $arrayAlumnoEvento;
        }

        public static function findById($id){
            $sql = "select * from alumno_evento where idAlumno_evento = ?";
            $datos = array($id);
            $resultado = parent::ejecutar($sql, $datos);
            $alumnoEvento = $resultado->fetch(PDO::FETCH_ASSOC);
            if($alumnoEvento) return $alumnoEvento;
            return null;
        }

        public static function insert($objeto){
            $sql = "insert into clase values (?,?,?)";
            $objeto = (array)$objeto;
            $datos = array();
            foreach ($objeto as $atributo) array_push($datos,$atributo);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }

        public static function update($objeto){
            $sql = "update alumno_evento set idAlumno = ?, idEvento = ? where idAlumno_evento = ?";
            $datos = array($objeto->idAlumno, $objeto->idEvento, $objeto->idAlumnoEvento);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }

        public static function delete($id){
            $sql = "delete from alumno_evento where idAlumno_evento = ?";
            $datos = array($id);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }
    }
?>