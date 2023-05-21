<main class="container">
    <form action="" method="post">
        <div class="row mb-3">
            <div class="form-floating col-12 col-md-6 mb-3 mb-md-0">
                <input type="text" name="login" id="txtLogin" placeholder="usuario" class="form-control">
                <label for="txtlogin">Nombre de usuario</label>
            </div>
            <div class="form-floating col-12 col-md-6">
                <input type="password" class="form-control" id="txtContrasena" placeholder="0000" name="pass">
                <label for="txtContrasena">Contraseña</label>
            </div>
        </div>
        <div class="row mb-3">
            <div class="form-floating col-12 col-md-6 mb-3 mb-md-0">
                <input type="email" name="mail" id="txtMail" class="form-control" placeholder="ej@mail.com">
                <label for="txtMail">Email</label>
            </div>
            <div class="form-floating col-12 col-md-6">
                <input type="tel" name="telefono" id="txtTelefono" placeholder="555000000" class="form-control">
                <label for="txtTelefono">Teléfono</label>
            </div>
        </div>
        <div class="form-floating">
            <input type="date" name="fechaNacimiento" id="dpFechaNacimiento" placeholder="01/01/2000" class="form-control">
            <label for="dpFechaNacimiento">Fecha de nacimiento</label>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <button type="reset" class="btn btn-light col-12 col-md-auto">Limpiar</button>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-evenly justify-content-md-end">
            <a href="index.php?home" class="col-auto me-md-3">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>
            <button type="submit" class="btn btn-primary">Aceptar</button>
            </div>
        </div>
    </form>
</main>