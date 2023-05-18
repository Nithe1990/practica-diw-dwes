<?
    $expresion = "/^(?=.*[A-Z].*[A-Z])(?=.*[!@#$&*])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8,}$/";

     //comprueba que se ha metido tanto usuario como contraseña
     if (isset($_POST['user']) && isset($_POST['contrasena'])) {
        if(empty($_POST['user'])){
            //notificar que el usuario está vacío
            $errorUser = "Debe añadirse un nombre de usuario";
        }

        if(empty($_POST['contrasena'])){
            //notificar que la contraseña está vacía
            $errorContrasena = "Debe añadirse una contraseña";
        }elseif(!preg_match($expresion, $_POST['contrasena'])){
            //notificar que la contraseña no es válida
            $errorContrasena = "La contraseña debe contener como mínimo 8 caracteres, 2 mayúsculas, un caracter especial, 2 números y 3 minúsculas";
        }else{
            //comprobar credenciales
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($curl, CURLOPT_URL, URLAPI."usuario?usuario=".$_POST['user']."&contrasena=".$_POST['contrasena']);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $res = curl_exec($curl);
            //print_r($res);
            curl_close($curl);
            $usu = json_decode($res, true);
            //si existe el usuario, crearle sesión
            if($usu != null){                
                $_SESSION['idUsuario'] = $usu['idUsuario'];
                $_SESSION['user'] = $usu['user'];
                $_SESSION['rol'] = $usu['rol'];
                $_SESSION['email'] = $usu['email'];
                $_SESSION['telefono'] = $usu['telefono'];
                $_SESSION['fecha_nacimiento'] = $usu['fecha_nacimiento'];

                //cookie para que recuerde el nombre de usuario. 30 Días
                if (isset($_POST['recordar']) && $_POST['recordar'] == 'recordar'){
                    setcookie("username", $_POST['user'], time() + (86400 * 30));
                }

                 //asignarle a session controlador index controlador y principal controlador
            $_SESSION['controlador'] = "./controlador/principalControlador.php";
            $_SESSION['vista'] = "./vista/principal.php";
            }else{
                echo "usuario incorrecto";
            }
           
           
        }
    }elseif(isset($_GET['crear'])){
        $_SESSION['controlador'] = "./controlador/usuarioControlador.php";
        $_SESSION['vista'] = "./vista/signin.php";
        
    }
?>