<?
    require_once "./config/conexion.php";

    class Factory{
        public static function ejecutar($sql, $datos){
            try {
                $conexion = new PDO("mysql:host=".HOST.";dbname=".BBDD,USER,PASS);
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute($datos);
            } catch (Exception $e) {
                $sentencia = null;
                if($e->getCode() == 2002 || $e->getCode() == 1049){
                    ControladorPadre::respuesta('', array('HTTP/1.1 500 Error delo servidor'));
                }else{
                    ControladorPadre::respuesta('', array('HTTP/1.1 400 Alguno de los parametros es erróneo' .$e->getMessage()));
                }
            }finally{
                unset($conexion);
                return $sentencia;
            }
        }
    }
?>