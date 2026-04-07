<?php include("template/cabecera.php"); ?>

<body style="background-image: url('img/wp9684212-anime-compilation-wallpapers.jpg'); background-size: cover; background-position: center;">
    <!-- Navbar con menú hamburguesa -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-image: url('img/14622639415_5a7908cd34_o.jpg'); background-size: cover; background-position: center; border-bottom: 1px solid rgba(255, 255, 255, 0.1); box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);">
    <div class="container-fluid">
        <!-- Botón para el menú hamburguesa -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="font-size: 3vw; background: linear-gradient(to right, #ff3300, #ff6600, #ff9933); ">
        <img src="img/carpincho.png" alt="Menú" style="width: 40px;">
        </button>
        <!-- Nombre o logo de tu aplicación -->
        <img src="img/Drew_Feig-removebg-preview.png" alt="logo" class="logo img-fluid" style="width: 140px; height: auto; margin-top: 20px; margin-left: 4px;">
        <!-- Menú de navegación -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100 text-center">
                <li class="nav-item">
                    <a class="nav-link honk-font" href="inicio.php" style="color: white; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; font-family: 'Honk', system-ui; font-weight: 400; font-style: normal; font-variation-settings: 'MORF' 15, 'SHLN' 50.2;">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="eventos.php" style="color: white; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; font-family: 'Honk', system-ui; font-weight: 400; font-style: normal; font-variation-settings: 'MORF' 15, 'SHLN' 50.2;">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="stands.php" style="color: white; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; font-family: 'Honk', system-ui; font-weight: 400; font-style: normal; font-variation-settings: 'MORF' 15, 'SHLN' 50.2;">Stands</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cosplayers.php" style="color: white; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; font-family: 'Honk', system-ui; font-weight: 400; font-style: normal; font-variation-settings: 'MORF' 15, 'SHLN' 50.2;">Cosplayers</a>
                </li>
            </ul>
        </div>
    </div>
</nav>








<!-- Titulo / Anuncio -->
<div class="jumbotron p-3 mb-5" style="background-image: url(''); background-size: auto 100%; background-position: center; text-align: center; text-shadow: -1px -1px 0 #FF0000, 1px -1px 0 #FF0000, -1px 1px 0 #FF0000, 6px 6px 0 #FF0000;">
    <h1 class="display-3 fs-md-4 fs-lg-5 fs-xl-6" style="color: white; font-family: 'Bangers', cursive, sans-serif; font-size: 7vw; margin-top: 2vw; max-width: 100%;">Próximos Eventos !!!</h1>
</div>



<!-- Carrusel de imágenes -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="max-width: 800px; margin: auto;">
    <div class="carousel-inner">
        <div class="carousel-item">
            <img src="img/Carrusel1.png" class="d-block w-100" style="max-height: 900px;" alt="...">
        </div>
        <div class="carousel-item active">
            <img src="img/Carrusel4.png" class="d-block w-100" style="max-height: 900px;" alt="...">
        </div>  
        <div class="carousel-item">
            <img src="img/Carrusel6.png" class="d-block w-100" style="max-height: 900px;" alt="...">
        </div>  
        <div class="carousel-item">
            <img src="img/KanimePakatopia.jpg" class="d-block w-100" style="max-height: 900px;" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>

<!-- Línea de separación transparente -->
<div style="border-top: 1px solid rgba(0, 0, 0, 0.0); margin: 20px auto;"></div>


    <!-- Incluye el archivo JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>













</body>

<?php include("template/pie.php"); ?>
