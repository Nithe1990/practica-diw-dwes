<?
 

    class EjercicioDAO extends Factory implements DAO{
        public static function findAll(){
            $sql = "select * from ejercicio;";
            $datos = array();
            $resultado = parent::ejecutar($sql, $datos);
            $arrayEjercicios = $resultado->fetchAll(PDO::FETCH_ASSOC);
            return $arrayEjercicios;
        }

        public static function findById($id){
            $sql = "select * from ejercicio where idEjercicio = ?";
            $datos = array($id);
            $resultado = parent::ejecutar($sql, $datos);
            $ejercicio = $resultado->fetch(PDO::FETCH_ASSOC);
            if($ejercicio) return $ejercicio;
            return null;
        }

        public static function insert($objeto){
            $sql = "insert into ejercicio values (?,?,?,?,?)";
            $objeto = (array)$objeto;
            $datos = array();
            foreach ($objeto as $atributo) array_push($datos,$atributo);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }

        public static function update($objeto){
            $sql = "update ejercicio set activo = ?, nombre = ?, tipo = ?, video = ? where idEjercicio = ?";
            $datos = array($objeto->activo, $objeto->nombre, $objeto->tipo, $objeto->video, $objeto->idEjercicio);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }

        public static function delete($id){
            $sql = "delete from ejercicio where idEjercicio = ?";
            $datos = array($id);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }
    }
?>