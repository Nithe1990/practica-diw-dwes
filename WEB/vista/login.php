<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./webroot/css/login.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>    
    <main class="container mb-5">
        <form method="POST" action="index.php" class="mt-5 p-2 border border-dark rounded">
            <section class="form-floating mb-3">
                <input type="text" class="form-control" id="txtlogin" placeholder="usuario@mail.com" name="user">
                <label for="txtlogin">Usuario</label>
            </section>
            <span>
                <?
                    if(isset($errorUser)) echo $errorUser;
                ?>
            </span>
            <section class="form-floating mb-3">
                <input type="password" class="form-control" id="txtContrasena" placeholder="0000" name="contrasena">
                <label for="txtContrasena">Contraseña</label>
            </section>
            <span><?if(isset($errorContrasena)) echo $errorContrasena;?></span>
            <div class="row d-flex justify-content-evenly mb-3">
                <div class="col text-center">
                    <input type="checkbox" name="recordar" id="cbRecordar" value="recordar">
                    <label for="cbRecordar">Recuérdame</label>
                </div>
                <div class="col text-center">
                    <input type="submit" value="Acceder" name="acceder" class="btn btn-primary">
                </div>
                <div class="text-center">
                    <a href="">Crear cuenta</a>
                </div>
            </div>
        </form>
    </main>
</body>
</html>