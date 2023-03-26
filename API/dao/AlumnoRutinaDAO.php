<?
    require_once "./DAO.php";
    require_once "./factory.php";

    class AlumnoRutinaDAO extends Factory implements DAO{
        public static function findAll(){
            $sql = "select * from alumno_rutina;";
            $datos = array();
            $resultado = parent::ejecutar($sql, $datos);
            $arrayAlumnoRutina = $resultado->fetchAll(PDO::FETCH_ASSOC);
            return $arrayAlumnoRutina;
        }

        public static function findById($id){
            $sql = "select * from alumno_rutina where idAlumno_rutina = ?";
            $datos = array($id);
            $resultado = parent::ejecutar($sql, $datos);
            $alumnoRutina = $resultado->fetch(PDO::FETCH_ASSOC);
            if($alumnoRutina) return $alumnoRutina;
            return null;
        }

        public static function insert($objeto){
            $sql = "insert into alumno_rutina values (?,?,?)";
            $objeto = (array)$objeto;
            $datos = array();
            foreach ($objeto as $atributo) array_push($datos,$atributo);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }

        public static function update($objeto){
            $sql = "update alumno_rutina set idAlumno = ?, idRutina = ? where idAlumno_rutina = ?";
            $datos = array($objeto->idAlumno, $objeto->idRutina, $objeto->idAlumnoRutina);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }

        public static function delete($id){
            $sql = "delete from alumno_rutina where idAlumno_rutina = ?";
            $datos = array($id);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }
    }
?>