<?
    class Usuario{
        private $idUsuario;
        private $activo;
        private $user;
        private $contrasena;
        private $rol;
        private $email;
        private $telefono;
        private $fechaNacimiento;

        public function __construct($user, $contrasena, $rol, $email, $telefono, $fechaNacimiento){
            $this->activo = true;
            $this->user = $user;
            $this->contrasena = $contrasena;
            $this->rol = $rol;
            $this->email = $email;
            $this->telefono = $telefono;
            $this->fechaNacimiento = $fechaNacimiento;
        }
        
        public function __get($atributo){
            if(array_key_exists($atributo, get_object_vars($this))){
                return $this->$atributo;
            }
        }

        public function __set($atributo, $valor){
            if(array_key_exists($atributo, get_object_vars($this))){
                $this->$atributo = $valor;
            }
        }
    }
?>