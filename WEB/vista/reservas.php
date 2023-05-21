<main class="container row">
    <section class="col-auto">
        <?require "./vista/fragmentos/calendario.html";?>
    </section>
    <section class="col">
        <ul class="list-group">
            <li class="list-group-item">
                <div class="row">
                    <span class="col">Lorem ipsum</span>
                    <span class="col">Lorem ipsum</span>
                    <?
                        if($_SESSION['rol'] == "administrador"){
                            ?>
                                <div class="col"><?require "./vista/fragmentos/admClases.html"?></div>
                            <?
                        }elseif($_SESSION['rol'] == "alumno"){
                            ?>
                            <div class="form-check form-switch col">
                                <label class="form-check-label" for="chk1">Reservar</label>
                                <input type="checkbox" class="form-check-input" role="switch" id="chk1">
                            </div>
                            <?
                        }
                    ?>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <span class="col">Lorem ipsum</span>
                    <span class="col">Lorem ipsum</span>
                    <?
                        if($_SESSION['rol'] == "administrador"){
                            ?>
                                <div class="col"><?require "./vista/fragmentos/admClases.html"?></div>
                            <?
                        }elseif($_SESSION['rol'] == "alumno"){
                            ?>
                            <div class="form-check form-switch col">
                                <label class="form-check-label" for="chk2">Reservar</label>
                                <input type="checkbox" class="form-check-input" role="switch" id="chk2">
                            </div>
                            <?
                        }
                    ?>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <span class="col">Lorem ipsum</span>
                    <span class="col">Lorem ipsum</span>
                    <?
                        if($_SESSION['rol'] == "administrador"){
                            ?>
                                <div class="col"><?require "./vista/fragmentos/admClases.html"?></div>
                            <?
                        }elseif($_SESSION['rol'] == "alumno"){
                            ?>
                            <div class="form-check form-switch col">
                                <label class="form-check-label" for="chk3">Reservar</label>
                                <input type="checkbox" class="form-check-input" role="switch" id="chk3">
                            </div>
                            <?
                        }
                    ?>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <span class="col">Lorem ipsum</span>
                    <span class="col">Lorem ipsum</span>
                    <?
                        if($_SESSION['rol'] == "administrador"){
                            ?>
                                <div class="col"><?require "./vista/fragmentos/admClases.html"?></div>
                            <?
                        }elseif($_SESSION['rol'] == "alumno"){
                            ?>
                            <div class="form-check form-switch col">
                                <label class="form-check-label" for="chk4">Reservar</label>
                                <input type="checkbox" class="form-check-input" role="switch" id="chk4">
                            </div>
                            <?
                        }
                    ?>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <span class="col">Lorem ipsum</span>
                    <span class="col">Lorem ipsum</span>
                    <?
                        if($_SESSION['rol'] == "administrador"){
                            ?>
                                <div class="col"><?require "./vista/fragmentos/admClases.html"?></div>
                            <?
                        }elseif($_SESSION['rol'] == "alumno"){
                            ?>
                            <div class="form-check form-switch col">
                                <label class="form-check-label" for="chk5">Reservar</label>
                                <input type="checkbox" class="form-check-input" role="switch" id="chk5">
                            </div>
                            <?
                        }
                    ?>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <span class="col">Lorem ipsum</span>
                    <span class="col">Lorem ipsum</span>
                    <?
                        if($_SESSION['rol'] == "administrador"){
                            ?>
                                <div class="col"><?require "./vista/fragmentos/admClases.html"?></div>
                            <?
                        }elseif($_SESSION['rol'] == "alumno"){
                            ?>
                            <div class="form-check form-switch col">
                                <label class="form-check-label" for="chk6">Reservar</label>
                                <input type="checkbox" class="form-check-input" role="switch" id="chk6">
                            </div>
                            <?
                        }
                    ?>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <span class="col">Lorem ipsum</span>
                    <span class="col">Lorem ipsum</span>
                    <?
                        if($_SESSION['rol'] == "administrador"){
                            ?>
                                <div class="col"><?require "./vista/fragmentos/admClases.html"?></div>
                            <?
                        }elseif($_SESSION['rol'] == "alumno"){
                            ?>
                            <div class="form-check form-switch col">
                                <label class="form-check-label" for="chk7">Reservar</label>
                                <input type="checkbox" class="form-check-input" role="switch" id="chk7">
                            </div>
                            <?
                        }
                    ?>
                </div>
            </li>
        </ul>
    </section>
</main>
<?
    if($_SESSION['rol'] == "administrador"){
        ?>
            <div class="d-flex justify-content-end">
            <button class="col-auto btn btn-sencodary rounded-circle me-3"><a href="index.php?clase">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="grey" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                </svg>
                </a></button>
            </div>
        <?
    }
?>
