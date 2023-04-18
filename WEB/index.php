<?
require "./configuracion/configuracion.php";
    //si se pulsa el botón acceder, llama a loginControlador
    if(isset($_POST['acceder'])){
        require "./controlador/loginControlador.php";
    }
    include 'vista/layout.php';
?>