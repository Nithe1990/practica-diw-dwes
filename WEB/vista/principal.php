<head>
    <style>
      .card{width: 20rem; height: auto;}
    </style>
    <title>Página principal</title>
</head>
<body class="container-fluid">
      <main class="d-flex flex-column align-items-center">
        <!-- sección de fotos del centro -->
        <section class="text-center mb-3">
          <h2>El centro</h2>
          <div id="crsSitio" class="carousel carousel-dark slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#crsSitio" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#crsSitio" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#crsSitio" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/WEB/webroot/imágenes/ftb.jpg" alt="fútbol" class="d-block">
              </div>
              <div class="carousel-item">
                <img src="/WEB/webroot/imágenes/pressbanca.jpg" alt="pressbanca" class="d-block">
              </div>
              <div class="carousel-item">
                <img src="/WEB/webroot/imágenes/running.jpg" alt="running" class="d-block">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#crsSitio" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#crsSitio" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </section>
        <!-- sección de eventos -->
        <section class="text-center mb-3">
          <h2>Eventos</h2>
          <div id="crsEventos" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#crsEventos" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#crsEventos" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#crsEventos" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/WEB/webroot/imágenes/eventoCarrera.jpg" alt="carrera" class="d-block">
                <div class="carousel-caption d-none d-md-block">
                  <p>Carrera contra el cáncer</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/WEB/webroot/imágenes/evFbSala.jpg" alt="fútbol sala" class="d-block">
                <div class="carousel-caption d-none d-md-block">
                  <p>Torneo de fútbol sala</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/WEB/webroot/imágenes/paintball.jpg" alt="paintball" class="d-block">
                <div class="carousel-caption d-none d-md-block">
                  <p>Paintball: batalla campal</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#crsEventos" data-bs-slide="next">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#crsEventos" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </section>
        <!-- sección de deportes -->
        <section class="text-center">
          <h2>Deportes</h2>
          <div id="crsDeportes" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#crsDeportes" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#crsDeportes" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#crsDeportes" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="d-flex">
                  <div class="card me-2">
                    <img src="/WEB/webroot/imágenes/ftb.jpg" class="card-img-top" alt="fútbol">
                    <div class="card-body">
                      <p class="card-text">Fútbol</p>
                    </div>
                  </div>
                  <div class="card me-2">
                    <img src="/WEB/webroot/imágenes/pressbanca.jpg" class="card-img-top" alt="pressbanca">
                    <div class="card-body">
                      <p class="card-text">Pressbanca</p>
                    </div>
                  </div>
                  <div class="card me-2">
                    <img src="/WEB/webroot/imágenes/running.jpg" class="card-img-top" alt="running">
                    <div class="card-body">
                      <p class="card-text">Running</p>
                    </div>
                </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="d-flex">
                  <div class="card me-2">
                    <img src="/WEB/webroot/imágenes/evFbSala.jpg" class="card-img-top" alt="fútbol sala">
                    <div class="card-body">
                      <p class="card-text">Fútbol sala</p>
                    </div>
                  </div>
                  <div class="card me-2">
                    <img src="/WEB/webroot/imágenes/paintball.jpg" class="card-img-top" alt="paintball">
                    <div class="card-body">
                      <p class="card-text">Paintball</p>
                    </div>
                  </div>
                  <div class="card me-2">
                    <img src="/WEB/webroot/imágenes/eventoCarrera.jpg" class="card-img-top" alt="atletismo">
                    <div class="card-body">
                      <p class="card-text">Atletismo</p>
                    </div>
                </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="d-flex">
                  <div class="card me-2">
                    <img src="/WEB/webroot/imágenes/ftb.jpg" class="card-img-top" alt="fútbol">
                    <div class="card-body">
                      <p class="card-text">Fútbol</p>
                    </div>
                  </div>
                  <div class="card me-2">
                    <img src="/WEB/webroot/imágenes/pressbanca.jpg" class="card-img-top" alt="pressbanca">
                    <div class="card-body">
                      <p class="card-text">Pressbanca</p>
                    </div>
                  </div>
                  <div class="card me-2">
                    <img src="/WEB/webroot/imágenes/running.jpg" class="card-img-top" alt="running">
                    <div class="card-body">
                      <p class="card-text">Running</p>
                    </div>
                </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#crsDeportes" data-bs-slide="next">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#crsDeportes" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </section>
      </main>
  </body>
</html>