<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?
        function editar(){
            if(isset($_GET['editar'])){
                return true;
            }
            return false;
        }
    ?>
    <main class="container">
        <form action="index.php" method="$_POST">
            <section class="form-floating mb-3">
                <?if (editar())?><input type="hidden" id="ocId" name="idUsuario" value="<?if(editar()) echo $_SESSION['idUsuario']?>">
                <input type="text" class="form-control" id="txtlogin" placeholder="usuario@mail.com" name="login" value="<?
                    if(editar()){
                        echo $_SESSION['user'];
                    }
                ?>">
                <?if(isset)?>
                <label for="txtlogin">Usuario</label>
            </section>
            <section class="form-floating mb-3">
                <input type="password" class="form-control" id="txtContrasena" placeholder="0000" name="pass">
                <label for="txtContrasena">Contraseña</label>
            </section>
            <section class="form-floating mb-3">
                <input type="password" class="form-control" id="txtReContrasena" placeholder="0000" name="comprobar">
                <label for="txtReContrasena">Repetir contraseña</label>
            </section>
            <section class="form-floating mb-3">
                <input type="email" class="form-control" id="txtEmail" placeholder="alguien@mail.com" name="mail" value="<?
                    if(editar()) echo $_SESSION['email'];
                ?>">
                <label for="txtEmail">Email</label>
            </section>
            <section class="form-floating mb-3">
                <input type="tel" class="form-control" id="txtTelefono" placeholder="555000123" pattern="[0-9]{9}" name="telefono" value="<?
                    if(editar()) echo $_SESSION['telefono'];
                ?>">
                <label for="txtTelefono">Teléfono</label>
            </section>
            <section class="form-floating mb-3">
                <input type="date" class="form-control" id="calFechaNacimiento" placeholder="01/01/2000" name="fechaNacimiento" value="<?
                    if(editar()) echo date("Y-m-d", strtotime($_SESSION['fecha_nacimiento']));
                ?>">
                <label for="calFechaNacimiento">Fecha de nacimiento</label>
            </section>
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
</body>
</html>