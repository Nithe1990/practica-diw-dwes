<?
    class RutinaDAO extends Factory implements DAO{
        public static function findAll(){
            $sql = "select * from rutina;";
            $datos = array();
            $resultado = parent::ejecutar($sql, $datos);
            $arrayRutinas = $resultado->fetchAll(PDO::FETCH_ASSOC);
            return $arrayRutinas;
        }

        public static function findById($id){
            $sql = "select * from rutina where idRutina = ?";
            $datos = array($id);
            $resultado = parent::ejecutar($sql, $datos);
            $rutina = $resultado->fetch(PDO::FETCH_ASSOC);
            if($rutina) return $rutina;
            return null;
        }

        public static function insert($objeto){
            $sql = "insert into rutina values (?,?,?,?)";
            $objeto = (array)$objeto;
            $datos = array();
            foreach ($objeto as $atributo) array_push($datos,$atributo);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }

        public static function update($objeto){
            $sql = "update rutina set activo = ?, fecha_inicio = ?, fecha_fin = ? where idRutina = ?";
            $datos = array($objeto->activo, $objeto->fecha_inicio, $objeto->fecha_fin, $objeto->idRutina);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }

        public static function delete($id){
            $sql = "delete from rutina where idRutina = ?";
            $datos = array($id);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }
    }
?>