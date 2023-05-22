<main class="container">
    <div class="row mb-3">
        <div class="col-8 btn-group d-none d-md-inline text-end" role="group">
            <input type="radio" class="btn-check" name="rgOrden1" id="rbRegistrados" autocomplete="off" checked>
            <label class="btn btn-outline-primary" for="rbRegistrados">Registrados</label>
            <input type="radio" class="btn-check" name="rgOrden1" id="rbSinRegistrar" autocomplete="off">
            <label class="btn btn-outline-primary" for="rbSinRegistrar">Sin registrar</label>
            <input type="radio" class="btn-check" name="rgOrden1" id="rbAlfabetico" autocomplete="off">
            <label class="btn btn-outline-primary" for="rbAlfabetico">Alfabético</label>
            <input type="radio" class="btn-check" name="rgOrden1" id="rbRegistro" autocomplete="off">
            <label class="btn btn-outline-primary" for="rbRegistro">Fecha de registro</label>
        </div>
        <div class="col-12 col-md-4 mb-3 mb-md-0">
            <div class="input-group w-100">
                <input type="text" name="busquedaEjercicio" id="txtBusquedaEjercicio" class="form-control">
                <button class="btn btn-secondary" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                </button>
            </div>
        </div>
        <div class="col-12 btn-group-vertical d-block d-md-none" role="group">
        <input type="radio" class="btn-check" name="rgOrden2" id="rbRegistrados" autocomplete="off" checked>
            <label class="btn btn-outline-primary" for="rbRegistrados">Registrados</label>
            <input type="radio" class="btn-check" name="rgOrden2" id="rbSinRegistrar" autocomplete="off">
            <label class="btn btn-outline-primary" for="rbSinRegistrar">Sin registrar</label>
            <input type="radio" class="btn-check" name="rgOrden2" id="rbAlfabetico" autocomplete="off">
            <label class="btn btn-outline-primary" for="rbAlfabetico">Alfabético</label>
            <input type="radio" class="btn-check" name="rgOrden2" id="rbRegistro" autocomplete="off">
            <label class="btn btn-outline-primary" for="rbRegistro">Fecha de registro</label>
        </div>
    </div>

    <div class="row mb-3">
        <?
            $n = 0;
            for($i = 0;$i < 2;$i++){
                ?>
                    <div class="col-md-6">
                        <ul class="list-group">
                            <?
                                for($j = 0;$j < 3;$j++){
                                    ?>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <span class="col"><?
                                                    $n++;
                                                    echo "Alumno ".$n;
                                                ?></span>
                                                <div class="form-check form-switch col d-flex justify-content-center">
                                                    <input class="form-check-input checkVerificar" type="checkbox" role="switch" checked>
                                                </div>
                                                <span class="col text-end">
                                                    <a href="index.php?rutina">Rutina</a>
                                                </span>
                                            </div>
                                        </li>
                                    <?
                                }
                            ?>
                        </ul>
                    </div>
                <?
            }
        ?>
    </div>
    <nav class="col d-flex justify-content-center">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#" aria-label="Primero">&laquo Primero</a></li>
            <li class="page-item"><a class="page-link" href="#" aria-label="Anterior">&lt; Anterior</a></li>
            <li class="page-item"><a class="page-link" href="#" aria-label="Siguiente">Siguiente &gt;</a></li>
            <li class="page-item"><a class="page-link" href="#" aria-label="Último">Último &raquo;</a></li>
        </ul>
    </nav>
</main>