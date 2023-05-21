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
