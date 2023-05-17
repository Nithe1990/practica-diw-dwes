<?
    function validaFormulario(){
        $expresion = "/^(?=.*[A-Z].*[A-Z])(?=.*[!@#$&*])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8,}$/";
    
        // controla que se han rellenado todos los campos
        if(empty($_POST['login']) || empty($_POST['pass']) || empty($_POST['comprobar']) || empty($_POST['mail']) || empty($_POST['telefono']) || empty($_POST['fechaNacimiento'])){
            if(empty($_POST['login'])){
                //notificar que el usuario está vacío
                $errorUser = "Debe añadirse un nombre de usuario";
            }
        
            if(empty($_POST['pass'])){
                //notificar que el campo de contraseña está vacío
                $errorPass = "Debe introducirse la contraseña";
            }elseif(!preg_match($expresion, $_POST['pass'])){
                // notificar que la contraseña no cumple los requisitos
                $errorPass = "La contraseña debe contener como mínimo 8 caracteres, 2 mayúsculas, un caracter especial, 2 números y 3 minúsculas";
            }

            if(empty($_POST['comprobar'])){
                //notificar que el campo de contraseña está vacío
                $errorRepe = "Debe introducirse la contraseña";
            }elseif($_POST['pass'] != $_POST['comprobar']){
                // notificar que la contraseña y su repetición no coinciden
                $errorRepe = "Las contraseñas no coinciden";
            }
        
            if(empty($_POST['mail'])){
                // notificar que el email esta vacío
                $errorMail = "Introduzca una cuenta de correo electrónico";
            }
        
            if(empty($_POST['telefono'])){
                // notificar que no se ha introducido el teléfono
                $errorTlf = "Introduzca un número de teléfono";
            }
        
            if(empty($_POST['fechaNacimiento'])){
                // notificar que no se ha introducido una fecha de nacimiento
                $errorFecha = "Introduzca una fecha de nacimiento";
            }

            return false;
        }else{
            return true;
        }
    }

    if(validaFormulario()){
        //si se está cargando como editar, mostrar en los campos, los datos de la sesión.
        if(isset($_POST['guardarCambios'])){
            $curl = curl_init();
                curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
                curl_setopt($curl, CURLOPT_URL, URLAPI."usuario/".$_POST['idUsuario']);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $res = curl_exec($curl);
                curl_close($curl);
                $usu = json_decode($res, true);
    
            //si se le ha dado a guardar cambios, llamar al curl con el put
            //$data = array('usuario' => );
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($curl, CURLOPT_URL, URLAPI."usuario/".$_SESSION['idUsuario']);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $res = curl_exec($curl);
            curl_close($curl);
        //si se le ha dado a registrar, llamar al curl con el post y crear el usuario
        }elseif(isset($_GET['crearUsuario'])){
            $array = array("user" => $_REQUEST['login'], "contrasena" => $_REQUEST['pass'], "rol" => "alumno", "email" => $_REQUEST['mail'], "telefono" => $_REQUEST['telefono'], "fecha_nacimiento" => $_REQUEST['fechaNacimiento']);
            $array = json_encode($array);
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, URLAPI."usuario");
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $array);
            $res = curl_exec($curl);
            curl_close($curl);
        }
    }
?>