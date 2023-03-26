<?
    require_once "./DAO.php";
    require_once "./factory.php";

    class UsuarioDAO extends Factory implements DAO{
        public static function findAll(){
            $sql = "select * from usuario;";
            $datos = array();
            $resultado = parent::ejecutar($sql, $datos);
            $arrayUsuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);
            return $arrayUsuarios;
        }

        public static function findById($id){
            $sql = "select * from usuario where idUsuario = ?";
            $datos = array($id);
            $resultado = parent::ejecutar($sql, $datos);
            $usuario = $resultado->fetch(PDO::FETCH_ASSOC);
            if($usuario) return $usuario;
            return null;
        }

        public static function insert($objeto){
            $sql = "insert into usuario values (?,?,?,?,?,?,?,?)";
            $objeto = (array)$objeto;
            $datos = array();
            foreach ($objeto as $atributo) array_push($datos,$atributo);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }

        public static function update($objeto){
            $sql = "update usuario set activo = ?, user = ?, contrasena = ?, rol = ?, email = ?, telefono = ?, fecha_nacimiento = ? where idUsuario = ?";
            $datos = array($objeto->activo, $objeto->user, $objeto->contrasena, $objeto->rol, $objeto->email, $objeto->telefono, $objeto->fecha_nacimimiento, $objeto->idUsuario);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }

        public static function delete($id){
            $sql = "delete from usuario where idUsuario = ?";
            $datos = array($id);
            $resultado = parent::ejecutar($sql, $datos);
            if($resultado->rowCount() == 0) return false;
            return true;
        }
    }
?>