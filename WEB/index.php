<?
    $expresion = "^(?=.*[A-Z].*[A-Z])(?=.*[!@#$&*])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8}$";

    //si se pulsa el botón acceder, llama a loginControlador
    if(isset($_POST['acceder'])){
        //comprueba que se ha metido tanto usuario como contraseña
        if (isset($_POST['user']) && isset($_POST['contrasena'])) {
            if(empty($_POST['user'])){
                //notificar que el usuario está vacío
            }

            if(empty($_POST['contrasena'])){
                //notificar que la contraseña está vacía
            }elseif(!preg_match($expresion, $_POST['contrasena'])){
                //notificar que la contraseña no es válida
            }else{
                //comprobar credenciales
            }
        }else{

        }
    }
    include 'vista/layout.php';
?>