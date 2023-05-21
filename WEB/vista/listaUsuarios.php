<style>
    .transparente{background-color: transparent;
        border: none;}
    .indecorado{text-decoration: none;}
</style>

<main class="container">
    <div class="row mb-3">
    <?
        $n = 0;
        for($i = 0;$i < 2;$i++){
            ?><div class="col-md-6">
                <ul class="list-group">
                    <?
                        for($j = 0; $j < 4; $j++){
                            ?>
                                <li class="list-group-item">
                                    <div class="row">
                                        <span class="col"><?
                                            $n++;
                                            if($_GET['adus'] == "alumno"){
                                                echo "Alumno " . $n;
                                            }elseif($_GET['adus'] == "monitor"){
                                                echo "Monitor " . $n;
                                            }
                                        ?></span>
                                        <div class="col text-end">
                                            <a href="index.php?usuario" class="indecorado">
                                                <button class="transparente">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                                    </svg>
                                                </button>
                                            </a>
                                            <button class="transparente">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="red" class="bi bi-dash-circle-fill" viewBox="0 0 16 16">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            <?
                        }
                    ?>
                </ul>
            </div><?
        }
    ?>
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
        <button class="col-auto btn btn-sencodary rounded-circle me-3"><a href="index.php?usuario">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="grey" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                </svg>
                </a></button>
    </div>
</main>