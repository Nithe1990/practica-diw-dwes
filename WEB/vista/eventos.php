    <ul class="list-group container mb-3">
        <li class="list-group-item text-center">
            <h2>Carrera contra el cáncer</h2>
            <img src="./webroot/imágenes/eventoCarrera.jpg" alt="" width="360" height="auto">
            <a href="index.php?ev=1">Ver más</a>
        </li>
        <li class="list-group-item text-center">
            <h2>Torneo de fútbol sala</h2>
            <img src="./webroot/imágenes/evFbSala.jpg" alt="" width="360" height="auto">
            <a href="index.php?ev=2">Ver más</a>
        </li>
        <li class="list-group-item text-center">
            <h2>Paintball: batalla campal</h2>
            <img src="./webroot/imágenes/paintball.jpg" alt="" width="360" height="auto">
            <a href="index.php?ev=3">Ver más</a>
        </li>
    </ul>
    <div class="row">
        <nav class="col d-flex justify-content-center">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#" aria-label="Primero">&laquo Primero</a></li>
                <li class="page-item"><a class="page-link" href="#" aria-label="Anterior">&lt; Anterior</a></li>
                <li class="page-item"><a class="page-link" href="#" aria-label="Siguiente">Siguiente &gt;</a></li>
                <li class="page-item"><a class="page-link" href="#" aria-label="Último">Último &raquo;</a></li>
            </ul>
        </nav>
    <?
        if($_SESSION['rol'] == "administrador"){
            ?>
                <button class="col-auto btn btn-sencodary rounded-circle me-3"><a href="index.php?anadirEvento">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="grey" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                </svg>
                </a></button>
            <?
        }
    ?>
    </div>