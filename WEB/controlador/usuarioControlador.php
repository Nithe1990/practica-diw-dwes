<?
    //si se está cargando como editar, mostrar en los campos, los datos de la sesión.
    if(isset($_POST['guardarCambios'])){
        $curl = curl_init();
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($curl, CURLOPT_URL, URLAPI."usuario/".$_POST['idUsuario']);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $res = curl_exec($curl);
            //print_r($res);
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
?>