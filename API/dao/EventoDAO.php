<?
    require_once "./DAO.php";
    require_once "./factory.php";

    class EventoDAO extends Factory implements DAO{
        public static function findAll(){
            $sql = "select * from evento;";
            $datos = array();
            $resultado = parent::ejecutar($sql, $datos);
            $arrayClases = $resultado->fetchAll(PDO::FETCH_ASSOC);
            return $arrayClases;
        }

        public static function findById($id){
            $sql = "select * from evento where idEvento = ?";
            $datos = array($id);
            $resultado = parent::ejecutar($sql, $datos);
            $clase = $resultado->fetch(PDO::FETCH_ASSOC);
            if($clase) return $clase;
            return null;
        }

        public static function insert($objeto){
            $sql = "insert into evento values (?,?,?,?,?,?)";
            $objeto = (array)$objeto;
            $datos = array();
            foreach ($objeto as $atributo) array_push($datos,$atributo);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }

        public static function update($objeto){
            $sql = "update evento set activo = ?, titular = ?, descripcion = ?, fecha_inicio = ?, fecha_fin = ? where idEvento = ?";
            $datos = array($objeto->activo, $objeto->titular, $objeto->descripcion, $objeto->fecha_inicio, $objeto->fecha_fin, $objeto->idEvento);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }

        public static function delete($id){
            $sql = "delete from evento where idEvento = ?";
            $datos = array($id);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }
    }
?>