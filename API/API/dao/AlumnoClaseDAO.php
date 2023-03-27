<?

    class AlumnoClaseDAO extends Factory implements DAO{
        public static function findAll(){
            $sql = "select * from alumno_clase;";
            $datos = array();
            $resultado = parent::ejecutar($sql, $datos);
            $arrayAlumnoClase = $resultado->fetchAll(PDO::FETCH_ASSOC);
            return $arrayAlumnoClase;
        }

        public static function findById($id){
            $sql = "select * from alumno_clase where idAlumno_clase = ?";
            $datos = array($id);
            $resultado = parent::ejecutar($sql, $datos);
            $alumnoClase = $resultado->fetch(PDO::FETCH_ASSOC);
            if($alumnoClase) return $alumnoClase;
            return null;
        }

        public static function insert($objeto){
            $sql = "insert into alumno_clase values (?,?,?,?)";
            $objeto = (array)$objeto;
            $datos = array();
            foreach ($objeto as $atributo) array_push($datos,$atributo);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }

        public static function update($objeto){
            $sql = "update alumno_clase set idAlumno = ?, idClase = ?, calificacion = ?, where idAlumno_clase = ?";
            $datos = array($objeto->idAlumno, $objeto->idclase, $objeto->calificacion, $objeto->idAlumnoClase);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }

        public static function delete($id){
            $sql = "delete from alumno_clase where idAlumno_clase = ?";
            $datos = array($id);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }
    }
?>