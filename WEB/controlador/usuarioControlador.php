<?
    //si se está cargando como editar, mostrar en los campos, los datos de la sesión.
    if(isset($_GET['editar'])){
        //obtenemos el DOM
        $documento = new DOMDocument('1.0', 'utf-8');
        $documento -> preserveWhiteSpace = FALSE;
        @$documento ->loadHTMLFile("./vista/signin.php");

        //introducimos los datos de la sesión en cada campo
        $documento -> getElementById("txtLogin") -> value = $_SESSION['user'];
        $documento -> getElementById("txtEmail") -> value = $_SESSION['email'];
        $documento -> getElementById("txtTelefono") -> value = $_SESSION['telefono'];
        $documento -> getElementById("calFechaNacimiento") -> value = $_SESSION['fecha_nacimiento'];

        //cambiar el texto del botón "Registrarse" por "Guardar cambios"
        $documento -> getElementById("btnAceptar") -> value = "Guardar cambios";

        //si se le ha dado a guardar cambios, llamar al curl con el put
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($curl, CURLOPT_URL, URLAPI."usuario?idUsuario=".$_SESSION['idUsuario']);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($curl);
        curl_close($curl);
    //si se le ha dado a registrar, llamar al curl con el post y crear el usuario
    }elseif($_GET['crear']){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    }

?>