<?
session_start();

require "./configuracion/configuracion.php";
    //si se pulsa el botón acceder, llama a loginControlador
    //si el usuario no está validado, en su sesión vista poner el login
    
    if(empty($_SESSION) || (!isset($_SESSION['idUsuario'] ) && !isset($_REQUEST['crearUsuario'])) ){
        $_SESSION['vista'] = "./vista/login.php";
        $_SESSION['controlador'] = "./controlador/loginControlador.php";
    }elseif(isset($_POST['acceder'])){
        //en su sesión controlador, ponerlo en login controlador
        $_SESSION['controlador'] = "./controlador/loginControlador.php";
    }elseif(isset($_GET['logout'])){
        session_destroy();
        header('Location: ./index.php');
    }elseif(isset($_GET['editar'])){
        $_SESSION['controlador'] = "./controlador/usuarioControlador.php";
        $_SESSION['vista'] = "./vista/signin.php";
    }elseif(isset($_GET['home']) && isset($_SESSION['idUsuario'])){
        $_SESSION['controlador'] =  "./controlador/principalControlador.php";
        $_SESSION['vista'] = "./vista/principal.php";
    }elseif(isset($_GET['rutina'])){
        $_SESSION['vista'] = "./vista/rutina.php";
    }elseif(isset($_GET['reservas'])){
        $_SESSION['vista'] = "./vista/reservas.php";
    }elseif(isset($_GET['historialClases'])){
        $_SESSION['vista'] = "./vista/historialclases.php";
    }elseif(isset($_GET['eventos'])){
        $_SESSION['vista'] = "./vista/eventos.php";
    }elseif(isset($_GET['ev'])){
        $_SESSION['vista'] = "./vista/detallesEvento.php";
    }elseif(isset($_GET['anadirEvento'])){
        $_SESSION['vista'] = "./vista/anadirEvento.php";
    }elseif(isset($_GET['listaEjercicios'])){
        $_SESSION['vista'] = "./vista/listaEjercicios.php";
    }elseif(isset($_GET['ejercicio'])){
        $_SESSION['vista'] = "./vista/ejercicio.php";
    }elseif(isset($_GET['clase'])){
        $_SESSION['vista'] = "./vista/clase.php";
    }
    //requerir session controlador
    require $_SESSION['controlador'];
    include 'vista/layout.php';
?>