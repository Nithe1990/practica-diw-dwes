<?

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

        public static function validaUsuario($usu, $contrasena){
            $sql = "select * from usuario where user = ? AND contrasena = ? AND activo = 1";
            $datos = array($usu, $contrasena);
            $resultado = parent::ejecutar($sql, $datos);
            $usuario = $resultado->fetch(PDO::FETCH_ASSOC);
            if($usuario) return $usuario;
            return null;
        }

        public static function findByUser($usu){
            $sql = "select * from usuario where user = ?";
            $datos = array($usu);
            $resultado = parent::ejecutar($sql, $datos);
            $usuario = $resultado->fetch(PDO::FETCH_ASSOC);
            if($usuario) return $usuario;
            return null;
        }

        public static function findByRol($rol){
            $sql = "select * from usuario where rol = ?";
            $datos = array($rol);
            $resultado = parent::ejecutar($sql, $datos);
            $arrayUsuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);
            return $arrayUsuarios;
        }

        public static function findByFecha($fecha){
            $sql = "select * from usuario where fecha_nacimiento >= ?";
            $datos = array($fecha);
            $resultado = parent::ejecutar($sql, $datos);
            $arrayUsuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);
            return $arrayUsuarios;
        }

        public function orderByFecha($fecha){
            $sql = "select * from usuarios order by fecha " .$fecha.";";
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