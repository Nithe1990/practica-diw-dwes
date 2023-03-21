<?
    require_once "./DAO.php";
    require_once "./factory.php";

    class TipoClaseDAO extends Factory implements DAO{
        public static function findAll(){
            $sql = "select * from tipo_clase;";
            $datos = array();
            $resultado = parent::ejecutar($sql, $datos);
            $arrayClases = $resultado->fetchAll(PDO::FETCH_ASSOC);
            return $arrayClases;
        }

        public static function findById($id){
            $sql = "select * from tipo_clase where idTipo = ?";
            $datos = array($id);
            $resultado = parent::ejecutar($sql, $datos);
            $clase = $resultado->fetch(PDO::FETCH_ASSOC);
            if($clase) return $clase;
            return null;
        }

        public static function insert($objeto){
            $sql = "insert into tipo_clase values (?,?,?,?)";
            $objeto = (array)$objeto;
            $datos = array();
            foreach ($objeto as $atributo) array_push($datos,$atributo);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }

        public static function update($objeto){
            $sql = "update tipo_clase set activo = ?, nombre = ?, descripcion = ? where idTipo = ?";
            $datos = array($objeto->activo, $objeto->nombre, $objeto->descripcion, $objeto->idTipo);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }

        public static function delete($id){
            $sql = "delete from tipo_clase where idTipo = ?";
            $datos = array($id);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }
    }
?>