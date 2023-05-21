<style>
    a{text-decoration: none;}
</style>
<main class="container">
    <form method="POST" action="index.php">
    <div class="row mb-5">
        <div class="form-floating col">
            <input class="form-control" type="text" name="nombreEjercicio" id="txtNombreEjercicio" placeholder="spinning">
            <label for="txtNombreEjercicio">Nombre</label>
        </div>
        <div class="col d-flex justify-content-center">
            <select class="form-select w-auto">
                <option selected value="pierna">Pierna</option>
                <option value="biceps">Bíceps</option>
                <option value="triceps">Tríceps</option>
                <option value="hombro">Hombro</option>
                <option value="pecho">Pecho</option>
                <option value="espalda">Espalda</option>
                <option value="estiramiento">Estiramiento</option>
                <option value="cardio">Cardio</option>
            </select>
        </div>
        <div class="col">
            <input class="form-control w-auto" type="file" id="formFile">
        </div>
    </div>
    <div class="text-end">
        <a href="index.php?listaEjercicios">
            <button type="button" class="btn btn-danger">Cancelar</button>
        </a>
        <button type="button" class="btn btn-primary">Aceptar</button>
    </div>
    </form>
</main>