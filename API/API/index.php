<?
    require_once "./config/configuracion.php";

    $recurso = ControladorPadre::comprobarRecurso();
    if($recurso){
        switch ($recurso[1]) {
            case 'alumno_clase':
                $controlador = new AlumnoClaseControlador();
                $controlador->controlar();
                break;
            
            case 'alumno_evento':
                $controlador = new AlumnoEventoControlador();
                $controlador->controlar();
                break;

            case 'alumno_rutina':
                $controlador = new AlumnoRutinaControlador();
                $controlador->controlar();
                break;
            
            case 'clase':
                $controlador = new ClaseControlador();
                $controlador->controlar();
                break;

            case 'ejercicio':
                $controlador = new EjercicioControlador();
                $controlador->controlar();
                break;

            case 'evento':
                $controlador = new EventoControlador();
                $controlador->controlar();
                break;

            case 'rutina':
                $controlador = new RutinaControlador();
                $controlador->controlar();
                break;

            case 'rutina_ejercicio':
                $controlador = new RutinaEjercicioControlador();
                $controlador->controlar();
                break;

            case 'tipo_clase':
                $controlador = new TipoClaseControlador();
                $controlador->controlar();
                break;

            case 'usuario':
                $controlador = new UsuarioControlador();
                $controlador->controlar();
                break;
            
            default:
                
        }
    }
?>