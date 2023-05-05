<?
session_start();

require "./configuracion/configuracion.php";
    //si se pulsa el botón acceder, llama a loginControlador
    //si el usuario no está validado, en su sesión vista poner el login
    
    if(empty($_SESSION) || !isset($_SESSION['idUsuario']) ){
        $_SESSION['vista'] = "./vista/login.php";
        $_SESSION['controlador'] = "./controlador/loginControlador.php";
    }elseif(isset($_POST['acceder'])){
        //en su sesión controlador, ponerlo en login controlador
        $_SESSION['controlador'] = "./controlador/loginControlador.php";
    }elseif(isset($_GET['logout'])){
        session_destroy();
        header('Location: ./index.php');
    }elseif(isset($_GET['editar'])){
        require "./controlador/usuarioControlador.php";
        $_SESSION['vista'] = "./vista/signin.php";
    }elseif(isset($_GET['home']) && isset($_SESSION['idUsuario'])){
        $_SESSION['controlador'] =  "./controlador/principalControlador.php";
        $_SESSION['vista'] = "./vista/principal.php";
    }
    //requerir session controlador
    require $_SESSION['controlador'];
    include 'vista/layout.php';
?>