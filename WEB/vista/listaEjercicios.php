<main class="container">
    <section class="d-md-flex justify-content-md-end mb-3">
        <select class="form-select w-auto me-2 mb-3 mb-md-0">
            <option selected>Todos</option>
            <option value="pierna">Pierna</option>
            <option value="biceps">Bíceps</option>
            <option value="triceps">Tríceps</option>
            <option value="hombro">Hombro</option>
            <option value="pecho">Pecho</option>
            <option value="espalda">Espalda</option>
            <option value="estiramiento">Estiramiento</option>
            <option value="cardio">Cardio</option>
        </select>
        <div class="input-group w-auto">
            <input type="text" name="busquedaEjercicio" id="txtBusquedaEjercicio" class="form-control">
            <button class="btn btn-secondary" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
            </button>
        </div>
    </section>
    <section class="row mb-3">
        <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="row">
                        <span class="col">Ejercicio 1</span>
                        <div class="col text-end">
                            <?
                                if($_SESSION['rol'] == 'administrador'){
                                    require "./vista/fragmentos/admEj.html";
                                }elseif($_SESSION['rol'] == 'monitor'){
                                    ?><button type="button" class="btn btn-primary">Añadir</button><?
                                }
                            ?>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <span class="col">Ejercicio 2</span>
                        <div class="col text-end">
                            <?
                                if($_SESSION['rol'] == 'administrador'){
                                    require "./vista/fragmentos/admEj.html";
                                }elseif($_SESSION['rol'] == 'monitor'){
                                    ?><button type="button" class="btn btn-primary">Añadir</button><?
                                }
                            ?>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <span class="col">Ejercicio 3</span>
                        <div class="col text-end">
                            <?
                                if($_SESSION['rol'] == 'administrador'){
                                    require "./vista/fragmentos/admEj.html";
                                }elseif($_SESSION['rol'] == 'monitor'){
                                    ?><button type="button" class="btn btn-primary">Añadir</button><?
                                }
                            ?>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <span class="col">Ejercicio 4</span>
                        <div class="col text-end">
                            <?
                                if($_SESSION['rol'] == 'administrador'){
                                    require "./vista/fragmentos/admEj.html";
                                }elseif($_SESSION['rol'] == 'monitor'){
                                    ?><button type="button" class="btn btn-primary">Añadir</button><?
                                }
                            ?>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="row">
                        <span class="col">Ejercicio 5</span>
                        <div class="col text-end">
                            <?
                                if($_SESSION['rol'] == 'administrador'){
                                    require "./vista/fragmentos/admEj.html";
                                }elseif($_SESSION['rol'] == 'monitor'){
                                    ?><button type="button" class="btn btn-primary">Añadir</button><?
                                }
                            ?>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <span class="col">Ejercicio 6</span>
                        <div class="col text-end">
                            <?
                                if($_SESSION['rol'] == 'administrador'){
                                    require "./vista/fragmentos/admEj.html";
                                }elseif($_SESSION['rol'] == 'monitor'){
                                    ?><button type="button" class="btn btn-primary">Añadir</button><?
                                }
                            ?>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <span class="col">Ejercicio 7</span>
                        <div class="col text-end">
                            <?
                                if($_SESSION['rol'] == 'administrador'){
                                    require "./vista/fragmentos/admEj.html";
                                }elseif($_SESSION['rol'] == 'monitor'){
                                    ?><button type="button" class="btn btn-primary">Añadir</button><?
                                }
                            ?>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <span class="col">Ejercicio 8</span>
                        <div class="col text-end">
                            <?
                                if($_SESSION['rol'] == 'administrador'){
                                    require "./vista/fragmentos/admEj.html";
                                }elseif($_SESSION['rol'] == 'monitor'){
                                    ?><button type="button" class="btn btn-primary">Añadir</button><?
                                }
                            ?>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <div class="row">
    <nav class="col d-flex justify-content-center">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" id="pgPrimero" href="#" aria-label="Primero">&laquo Primero</a></li>
            <li class="page-item"><a class="page-link" id="pgAnterior" href="#" aria-label="Anterior">&lt; Anterior</a></li>
            <li class="page-item"><a class="page-link" id="pgSiguiente" href="#" aria-label="Siguiente">Siguiente &gt;</a></li>
            <li class="page-item"><a class="page-link" id="pgUltimo" href="#" aria-label="Último">Último &raquo;</a></li>
        </ul>
    </nav>
    <?
        if($_SESSION['rol'] == "administrador"){
            ?>
                <button class="col-auto btn btn-sencodary rounded-circle me-3"><a href="index.php?ejercicio">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="grey" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                </svg>
                </a></button>
            <?
        }
    ?>
    </div>
</main>