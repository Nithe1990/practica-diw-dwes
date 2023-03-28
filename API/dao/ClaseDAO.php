<?


    class ClaseDAO extends Factory implements DAO{
        public static function findAll(){
            $sql = "select * from clase;";
            $datos = array();
            $resultado = parent::ejecutar($sql, $datos);
            $arrayClases = $resultado->fetchAll(PDO::FETCH_ASSOC);
            return $arrayClases;
        }

        public static function findById($id){
            $sql = "select * from clase where idClase = ?";
            $datos = array($id);
            $resultado = parent::ejecutar($sql, $datos);
            $clase = $resultado->fetch(PDO::FETCH_ASSOC);
            if($clase) return $clase;
            return null;
        }

        public static function insert($objeto){
            $sql = "insert into clase values (?,?,?,?,?,?,?,?)";
            $objeto = (array)$objeto;
            $datos = array();
            foreach ($objeto as $atributo) array_push($datos,$atributo);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }

        public static function update($objeto){
            $sql = "update clase set activo = ?, sala = ?, plazas = ?, plazas_ocupadas = ?, fecha_inicio = ?, fecha_fin = ?, idTipo = ?, idMonitor = ? where idClase = ?";
            $datos = array($objeto->activo, $objeto->sala, $objeto->plazas, $objeto->plazas_ocupadas, $objeto->fecha_inicio, $objeto->fecha_fin, $objeto->idTipo, $objeto->idMonitor, $objeto->idClase);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }

        public static function delete($id){
            $sql = "delete from clase where idClase = ?";
            $datos = array($id);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }
    }
?>