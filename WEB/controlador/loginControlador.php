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
            print_r($res);
            curl_close($curl);
            $usu = json_decode($res, true);
            //crear sesión
            //si existe el usuario, crearle sesión
            if(isset($usu)){                
                $_SESSION['idUsuario'] = $usu['idUsuario'];
                $_SESSION['user'] = $usu['user'];
                $_SESSION['rol'] = $usu['rol'];
            }else{
                echo "usuario incorrecto";
            }
            //asignarle a session controlador index controlador y principal controlador
            

            var_dump($_SESSION);
        }
    }else{

    }
?>