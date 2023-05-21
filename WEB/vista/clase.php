<main class="container">
    <form action="index.php" method="post">
        <div class="row mb-3">
            <div class="form-floating col-12 col-md-8 mb-md-0 mb-3">
                <input class="form-control" type="text" name="sala" id="txtSala" placeholder="Cancha">
                <label for="txtSala">Sala</label>
            </div>
            <div class="col-12 col-md-4">
                <label for="spnPlazas">Plazas</label>
                <input type="number" name="plazas" id="spnPlazas" min="1" value="1">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 col-md-6 text-center mb-md-0 mb-3">
                <label for="dpFechaInicio">Fecha inicio</label>
                <input type="datetime-local" name="fechaInicio" id="dpFechaInicio">
            </div>
            <div class="col-12 col-md-6 text-center">
                <label for="dpFechaFin">Fecha fin</label>
                <input type="datetime-local" name="fechaFin" id="dpFechaFin">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-6 row">
                <div class="col-auto">
                    <label for="cbTipo">Tipo</label>
                </div>
                <div class="col">
                    <select name="tipo" id="cbTipo" class="form-select">
                        <option selected>Tipo</option>
                        <option value="1">Tipo 1</option>
                        <option value="2">Tipo 2</option>
                        <option value="3">Tipo 3</option>
                        <option value="4">Tipo 4</option>
                    </select>
                </div>
            </div>
            <div class="col-6 text-center">
                <label for="cbMonitor">Monitor</label>
                <select name="monitor" id="cbMonitor">
                    <option value="ej3" selected>ej3</option>
                    <option value="0">Lorem impsum</option>
                    <option value="1">Lorem impsum</option>
                    <option value="2">Lorem impsum</option>
                    <option value="3">Lorem impsum</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <button type="reset" class="btn btn-light col-12 col-md-auto">Reiniciar</button>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-evenly justify-content-md-end">
                <button type="button" class="btn btn-danger col-auto me-md-3">Cancelar</button>
                <button type="submit" class="btn btn-primary col-auto">Aceptar</button>
            </div>
        </div>
    </form>
</main>