<?
    // modelo
    require_once "./API/modelo/alumno_clase.php";
    require_once "./API/modelo/alumno_evento.php";
    require_once "./API/modelo/alumno_rutina.php";
    require_once "./API/modelo/clase.php";
    require_once "./API/modelo/ejercicio.php";
    require_once "./API/modelo/evento.php";
    require_once "./API/modelo/rutina.php";
    require_once "./API/modelo/rutina_ejercicio.php";
    require_once "./API/modelo/tipoClase.php";
    require_once "./API/modelo/usuario.php";

    // controlador
    require_once "./API/controlador/AlumnoClaseControlador.php";
    require_once "./API/controlador/AlumnoEventoControlador.php";
    require_once "./API/controlador/AlumnoRutinaControlador.php";
    require_once "./API/controlador/ClaseControlador.php";
    require_once "./API/controlador/EjercicioControlador.php";
    require_once "./API/controlador/EventoControlador.php";
    require_once "./API/controlador/RutinaControlador.php";
    require_once "./API/controlador/RutinaEjercicioControlador.php";
    require_once "./API/controlador/TipoClaseControlador.php";
    require_once "./API/controlador/UsuarioControlador.php";

    // DAOs
    require_once "./API/dao/AlumnoClaseDAO.php";
    require_once "./API/dao/AlumnoEventoDAO.php";
    require_once "./API/dao/AlumnoRutinaDAO.php";
    require_once "./API/dao/ClaseDAO.php";
    require_once "./API/dao/EjercicioDAO.php";
    require_once "./API/dao/EventoDAO.php";
    require_once "./API/dao/RutinaDAO.php";
    require_once "./API/dao/RutinaEjercicioDAO.php";
    require_once "./API/dao/TipoClaseDAO.php";
    require_once "./API/dao/UsuarioDAO.php";
?>