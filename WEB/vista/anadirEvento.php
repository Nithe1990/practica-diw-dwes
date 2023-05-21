<form method="POST" action="index.php?eventos">
    <div class="d-flex justify-content-around mb-2">
        <div class="form-floating">
            <input class="form-control" type="text" name="titular" id="txtTitular" placeholder="Titular">
            <label for="txtTitular">Titular</label>
        </div>
        <div>
            <label for="dpFecha">Fecha inicio</label>
            <input type="date" name="fechaInicio" id="dpFechaInicio">
        </div>
        <div>
            <label for="dpFecha">Fecha fin</label>
            <input type="date" name="fechaFin" id="dpFechaFin">
        </div>
    </div>
    <div class="form-floating ms-3 me-3 mb-3">
        <textarea class="form-control" placeholder="Descripción" name="descripcion" id="txtDescripcion" cols="30" rows="50"></textarea>
        <label for="txtDescripcion">Descripción</label>
    </div>
    <div class="row ms-3 me-3">
        <div class="col"><input class="btn btn-light" type="reset" value="Limpiar"></div>
        <div class="col text-end">
            <a href="index.php?eventos">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>
            <input class="btn btn-primary" type="submit" value="Añadir" name="añadir">
            </a>
        </div>
    </div>
</form>