<?
    // modelo
    require_once "./modelo/alumno_clase.php";
    require_once "./modelo/alumno_evento.php";
    require_once "./modelo/alumno_rutina.php";
    require_once "./modelo/clase.php";
    require_once "./modelo/ejercicio.php";
    require_once "./modelo/evento.php";
    require_once "./modelo/rutina.php";
    require_once "./modelo/rutina_ejercicio.php";
    require_once "./modelo/tipoClase.php";
    require_once "./modelo/usuario.php";

    // controlador
    require_once "./controlador/ControladorPadre.php";
    require_once "./controlador/AlumnoClaseControlador.php";
    require_once "./controlador/AlumnoEventoControlador.php";
    require_once "./controlador/AlumnoRutinaControlador.php";
    require_once "./controlador/ClaseControlador.php";
    require_once "./controlador/EjercicioControlador.php";
    require_once "./controlador/EventoControlador.php";
    require_once "./controlador/RutinaControlador.php";
    require_once "./controlador/RutinaEjercicioControlador.php";
    require_once "./controlador/TipoClaseControlador.php";
    require_once "./controlador/UsuarioControlador.php";

    // DAOs
    require_once "./dao/DAO.php";
    require_once "./dao/factory.php";
    require_once "./dao/AlumnoClaseDAO.php";
    require_once "./dao/AlumnoEventoDAO.php";
    require_once "./dao/AlumnoRutinaDAO.php";
    require_once "./dao/ClaseDAO.php";
    require_once "./dao/EjercicioDAO.php";
    require_once "./dao/EventoDAO.php";
    require_once "./dao/RutinaDAO.php";
    require_once "./dao/RutinaEjercicioDAO.php";
    require_once "./dao/TipoClaseDAO.php";
    require_once "./dao/UsuarioDAO.php";
?>