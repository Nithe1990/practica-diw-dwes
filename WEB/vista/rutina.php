<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container-fluid">
    <main class="text-center">
        <!-- sección de ejercicios -->
        <section class="row mb-3">
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="container row">
                            <span class="text-start col">Ejercicio 1</span>
                            <button type="button" class="btn btn-primary col-auto text-end" data-bs-toggle="modal" data-bs-target="#modVideo">Vídeo</button>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="container row">
                            <span class="text-start col">Ejercicio 2</span>
                            <button type="button" class="btn btn-primary col-auto text-end">Vídeo</button>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="container row">
                            <span class="text-start col">Ejercicio 3</span>
                            <button type="button" class="btn btn-primary col-auto text-end">Vídeo</button>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="container row">
                            <span class="text-start col">Ejercicio 4</span>
                            <button type="button" class="btn btn-primary col-auto text-end">Vídeo</button>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="container row">
                            <span class="text-start col">Ejercicio 5</span>
                            <button type="button" class="btn btn-primary col-auto text-end">Vídeo</button>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="container row">
                            <span class="text-start col">Ejercicio 6</span>
                            <button type="button" class="btn btn-primary col-auto text-end">Vídeo</button>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="container row">
                            <span class="text-start col">Ejercicio 7</span>
                            <button type="button" class="btn btn-primary col-auto text-end">Vídeo</button>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="container row">
                            <span class="text-start col">Ejercicio 8</span>
                            <button type="button" class="btn btn-primary col-auto text-end">Vídeo</button>
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
                        <!-- <iframe width="1080" height="720" src="https://www.youtube.com/embed/JhcjQHkjklA?autoplay=1"></iframe> -->
                    </div>
                </div>
            </div>
        </div>
        <nav class="d-flex justify-content-center">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#" aria-label="Primero">&laquo Primero</a></li>
                <li class="page-item"><a class="page-link" href="#" aria-label="Anterior">&lt; Anterior</a></li>
                <li class="page-item"><a class="page-link" href="#" aria-label="Siguiente">Siguiente &gt;</a></li>
                <li class="page-item"><a class="page-link" href="#" aria-label="Último">Último &raquo;</a></li>
            </ul>
        </nav>
    </main>
    <script src="../webroot/js/rutina.js"></script>
</body>
</html>