<?
session_start();

require "./configuracion/configuracion.php";
    //si se pulsa el botón acceder, llama a loginControlador
    //si el usuario no está validado, en su sesión vista poner el login
    if(isset)
    if(isset($_POST['acceder'])){
        //en su sesión controlador, ponerlo en login controlador
        require "./controlador/loginControlador.php";
    }
    //requerir session controlador
    include 'vista/layout.php';
?>