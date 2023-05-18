<head>
    <link rel="stylesheet" href="./webroot/css/signin.css">
</head>

<?
    function editar(){
        if(isset($_GET['editar'])){
            return true;
        }
        return false;
    }
?>
<main class="container">
    <form action="index.php" method="POST">
        <section class="form-floating mb-3">
            <?if (editar())?><input type="hidden" id="ocId" name="idUsuario" value="<?if(editar()) echo $_SESSION['idUsuario']?>">
            <input type="text" class="form-control" id="txtlogin" placeholder="usuario@mail.com" name="login" value="<?
                if(editar()){
                    echo $_SESSION['user'];
                }
            ?>">
            <label for="txtlogin">Usuario</label>
        </section>
        <span>
            <?if(isset($errores["errorUser"])) echo $errores["errorUser"]?>
        </span>
        <section class="form-floating mb-3">
            <input type="password" class="form-control" id="txtContrasena" placeholder="0000" name="pass">
            <label for="txtContrasena">Contraseña</label>
        </section>
        <span>
            <?if(isset($errores["errorPass"])) echo $errores["errorPass"]?>
        </span>
        <section class="form-floating mb-3">
            <input type="password" class="form-control" id="txtReContrasena" placeholder="0000" name="comprobar">
            <label for="txtReContrasena">Repetir contraseña</label>
        </section>
        <span>
            <?if(isset($errores["errorRepe"])) echo $errores["errorRepe"]?>
        </span>
        <section class="form-floating mb-3">
            <input type="email" class="form-control" id="txtEmail" placeholder="alguien@mail.com" name="mail" value="<?
                if(editar()) echo $_SESSION['email'];
            ?>">
            <label for="txtEmail">Email</label>
        </section>
        <span>
            <?if(isset($error["errorMail"])) echo $errores["errorMail"]?>
        </span>
        <section class="form-floating mb-3">
            <input type="tel" class="form-control" id="txtTelefono" placeholder="555000123" pattern="[0-9]{9}" name="telefono" value="<?
                if(editar()) echo $_SESSION['telefono'];
            ?>">
            <label for="txtTelefono">Teléfono</label>
        </section>
        <span>
            <?if(isset($errores["errorTlf"])) echo $errores["errorTlf"]?>
        </span>
        <section class="form-floating mb-3">
            <input type="date" class="form-control" id="calFechaNacimiento" placeholder="01/01/2000" name="fechaNacimiento" value="<?
                if(editar()) echo date("Y-m-d", strtotime($_SESSION['fecha_nacimiento']));
            ?>">
            <label for="calFechaNacimiento">Fecha de nacimiento</label>
        </section>
        <span>
            <?if(isset($errores["errorFecha"])) echo $errores["errorFecha"]?>
        </span>
        <div>
            <section class="col">
                <input type="reset" value="Limpiar" class="btn btn-secondary">
            </section>
            <section class="col text-end">
                <button class="btn btn-danger">Cancelar</button>
                <?
                    if(editar()){
                        ?><input type="submit" value="Guardar cambios" class="btn btn-primary" id="btnGuardar" name="guardarCambios"><?
                    }else{
                        ?><input type="submit" value="Aceptar" class="btn btn-primary" id="btnAceptar" name="crearUsuario"><?
                    }
                ?>
            </section>
        </div>
    </form>
</main>