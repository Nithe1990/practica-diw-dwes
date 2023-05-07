<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <main class="container">
        <form action="">
            <section class="form-floating mb-3">
                <input type="text" class="form-control" id="txtlogin" placeholder="usuario@mail.com">
                <label for="txtlogin">Usuario</label>
            </section>
            <section class="form-floating mb-3">
                <input type="password" class="form-control" id="txtContrasena" placeholder="0000" onpaste="return false">
                <label for="txtContrasena">Contraseña</label>
            </section>
            <section class="form-floating mb-3">
                <input type="password" class="form-control" id="txtReContrasena" placeholder="0000" onpaste="return false">
                <label for="txtReContrasena">Repetir contraseña</label>
            </section>
            <section class="form-floating mb-3">
                <input type="email" class="form-control" id="txtEmail" placeholder="alguien@mail.com">
                <label for="txtEmail">Email</label>
            </section>
            <section class="form-floating mb-3">
                <input type="tel" class="form-control" id="txtTelefono" placeholder="555000123" pattern="[0-9]{9}">
                <label for="txtTelefono">Teléfono</label>
            </section>
            <section class="form-floating mb-3">
                <input type="datetime-local" class="form-control" id="calFechaNacimiento" placeholder="01/01/2000">
                <label for="calFechaNacimiento">Fecha de nacimiento</label>
            </section>
            <div>
                <section class="col">
                    <input type="reset" value="Limpiar" class="btn btn-secondary">
                </section>
                <section class="col text-end">
                    <button class="btn btn-danger">Cancelar</button>
                    <input type="submit" value="Registrarse" class="btn btn-primary" id="btnAceptar">
                </section>
            </div>
        </form>
    </main>
</body>
</html>