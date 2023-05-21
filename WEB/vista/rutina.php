<style>
    .transparente{background-color: transparent;
        border: none;}
</style>

<main class="container">
    <!-- calendario -->
    <?
        if($_SESSION['rol'] == "alumno"){
            ?><section class="d-flex justify-content-center mb-3"><?require "./vista/fragmentos/calendario.html";?></section><?
        }else{
            ?>
                <section class="row mb-3">
                    <?
                        if($_SESSION['rol'] == "administrador"){
                            ?>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="input-group w-auto">
                                        <input type="text" name="busquedaAlumno" id="txtBusquedaAlumno" class="form-control" placeholder="Nombre del alumno">
                                        <button class="btn btn-secondary" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            <?
                        }elseif($_SESSION['rol'] == "monitor"){
                            ?><h2>Alumno 1</h2><?
                        }
                    ?>
                    <div class="col-md-4 text-center mb-3 mb-md-0">
                        <label for="dpFechaInicio" class="form-label">Fecha inicio</label>
                        <input type="date" name="fechaInicio" id="dpFechaInicio">
                    </div>
                    <div class="col-md-4 text-center">
                        <label for="dpFechaFin" class="form-label">Fecha fin</label>
                        <input type="date" name="fechaFin" id="dpFechaFin">
                    </div>
                </section>
            <?
        }
    ?>
    <!-- sección de ejercicios -->
    <section class="row mb-3">
        <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="container row">
                        <span class="text-start col">Ejercicio 1</span>
                        <?
                            if($_SESSION['rol'] == "alumno"){
                                ?>
                                    <button type="button" class="btn btn-primary col-auto text-end" data-bs-toggle="modal" data-bs-target="#modVideo">Vídeo</button>
                                <?
                            }elseif($_SESSION['rol'] == "administrador"){
                                ?>
                                <div class="col-auto">
                                    <button class="col transparente">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="red" class="bi bi-dash-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
                                            </svg>
                                    </button>
                                </div>
                                <?
                            }
                        ?>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="container row">
                        <span class="text-start col">Ejercicio 2</span>
                        <?
                            if($_SESSION['rol'] == "alumno"){
                                ?>
                                    <button type="button" class="btn btn-primary col-auto text-end">Vídeo</button>
                                <?
                            }elseif($_SESSION['rol'] == "administrador"){
                                ?>
                                <div class="col-auto">
                                <button class="col transparente">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="red" class="bi bi-dash-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
                                        </svg>
                                </button>
                                    </div>
                                    <?
                            }
                        ?>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="container row">
                        <span class="text-start col">Ejercicio 3</span>
                        <?
                            if($_SESSION['rol'] == "alumno"){
                                ?>
                                <button type="button" class="btn btn-primary col-auto text-end">Vídeo</button>
                                <?
                            }elseif($_SESSION['rol'] == "administrador"){
                                ?>
                                <div class="col-auto">
                                        <button class="col transparente">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="red" class="bi bi-dash-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
                                        </svg>
                                </button>
                                    </div>
                                    <?
                            }
                        ?>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="container row">
                        <span class="text-start col">Ejercicio 4</span>
                        <?
                            if($_SESSION['rol'] == "alumno"){
                                ?>
                                <button type="button" class="btn btn-primary col-auto text-end">Vídeo</button>
                                <?
                            }elseif($_SESSION['rol'] == "administrador"){
                                ?>
                                <div class="col-auto">
                                        <button class="col transparente">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="red" class="bi bi-dash-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
                                        </svg>
                                </button>
                                    </div>
                                    <?
                            }
                        ?>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="container row">
                        <span class="text-start col">Ejercicio 5</span>
                        <?
                            if($_SESSION['rol'] == "alumno"){
                                ?>
                                <button type="button" class="btn btn-primary col-auto text-end">Vídeo</button>
                                <?
                            }elseif($_SESSION['rol'] == "administrador"){
                                ?>
                                <div class="col-auto">
                                        <button class="col transparente">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="red" class="bi bi-dash-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
                                        </svg>
                                </button>
                                    </div>
                                    <?
                            }
                        ?>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="container row">
                        <span class="text-start col">Ejercicio 6</span>
                        <?
                            if($_SESSION['rol'] == "alumno"){
                                ?>
                                <button type="button" class="btn btn-primary col-auto text-end">Vídeo</button>
                                <?
                            }elseif($_SESSION['rol'] == "administrador"){
                                ?>
                                <div class="col-auto">
                                        <button class="col transparente">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="red" class="bi bi-dash-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
                                        </svg>
                                </button>
                                    </div>
                                    <?
                            }
                        ?>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="container row">
                        <span class="text-start col">Ejercicio 7</span>
                        <?
                            if($_SESSION['rol'] == "alumno"){
                                ?>
                                <button type="button" class="btn btn-primary col-auto text-end">Vídeo</button>
                                <?
                            }elseif($_SESSION['rol'] == "administrador"){
                                ?>
                                <div class="col-auto">
                                        <button class="col transparente">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="red" class="bi bi-dash-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
                                        </svg>
                                </button>
                                    </div>
                                    <?
                            }
                        ?>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="container row">
                        <span class="text-start col">Ejercicio 8</span>
                        <?
                            if($_SESSION['rol'] == "alumno"){
                                ?>
                                <button type="button" class="btn btn-primary col-auto text-end">Vídeo</button>
                                <?
                            }elseif($_SESSION['rol'] == "administrador"){
                                ?>
                                <div class="col-auto">
                                        <button class="col transparente">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="red" class="bi bi-dash-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
                                        </svg>
                                </button>
                                    </div>
                                    <?
                            }
                        ?>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- modal de vídeo -->
    <div class="modal" id="modVideo" tabindex="-1" aria-hidden="true" aria-labelledby="modalVideo">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe width="1080" height="720" src="https://www.youtube.com/embed/JhcjQHkjklA?autoplay=1"></iframe>
                </div>
            </div>
        </div>
    </div>
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