<?
    require_once "./DAO.php";
    require_once "./factory.php";

    class RutinaEjercicioDAO extends Factory implements DAO{
        public static function findAll(){
            $sql = "select * from rutina_ejercicio;";
            $datos = array();
            $resultado = parent::ejecutar($sql, $datos);
            $arrayRutinaEjercicio = $resultado->fetchAll(PDO::FETCH_ASSOC);
            return $arrayRutinaEjercicio;
        }

        public static function findById($id){
            $sql = "select * from rutina_ejercicio where idRutina_ejercicio = ?";
            $datos = array($id);
            $resultado = parent::ejecutar($sql, $datos);
            $rutinaEjercicio = $resultado->fetch(PDO::FETCH_ASSOC);
            if($rutinaEjercicio) return $rutinaEjercicio;
            return null;
        }

        public static function insert($objeto){
            $sql = "insert into rutina_ejercicio values (?,?,?,?,?)";
            $objeto = (array)$objeto;
            $datos = array();
            foreach ($objeto as $atributo) array_push($datos,$atributo);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }

        public static function update($objeto){
            $sql = "update rutina_ejercicio set idRutina = ?, idEjercicio = ?, kilos = ?, repeticiones = ? where idRutina_ejercicio = ?";
            $datos = array($objeto->idRutina, $objeto->idEjercicio, $objeto->kilos, $objeto->repeticiones, $objeto->idRutinaEjercicio);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }

        public static function delete($id){
            $sql = "delete from rutina_ejercicio where idRutina_ejercicio = ?";
            $datos = array($id);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }
    }
?>