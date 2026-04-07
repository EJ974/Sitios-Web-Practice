<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosplayers</title>
    <!-- Enlace al archivo CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

<!-- Estilos Titulo Presentacion (el ultimo es el que esta en uso)-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Bungee+Inline&family=Bungee+Spice&family=Concert+One&family=Fascinate+Inline&family=Faster+One&family=Fredericka+the+Great&family=Frijole&family=Honk&family=Kavoon&family=Luckiest+Guy&family=Passion+One:wght@400;700;900&family=Rampart+One&family=Righteous&family=Rubik+Doodle+Shadow&family=Shojumaru&display=swap" rel="stylesheet">
   
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Bungee+Inline&family=Bungee+Spice&family=Concert+One&family=Fascinate+Inline&family=Faster+One&family=Fredericka+the+Great&family=Frijole&family=Honk&family=Kavoon&family=Luckiest+Guy&family=Passion+One:wght@400;700;900&family=Rampart+One&family=Righteous&family=Rubik+Doodle+Shadow&family=Shojumaru&display=swap" rel="stylesheet">
<!-- Estilos personalizados -->
    <style>
        /* Estilo predeterminado para la fuente en pantallas grandes */
.navbar-nav .nav-link {
    font-size: 2.0vw; /* Tamaño de fuente para pantallas grandes */
}

/* Media query para pantallas más pequeñas, como las de dispositivos móviles */
@media (max-width: 768px) {
    .navbar-nav .nav-link {
        font-size: 5.6vw; /* Tamaño de fuente para pantallas más pequeñas */
    }
}
    </style>

<style>
/* Estilo base para dispositivos grandes FOOTER */
.texto-grande {
    font-size: 28px; /* Tamaño más grande para pantallas grandes */
}

/* Media query para dispositivos más pequeños FOOTER */
@media (max-width: 768px) {
    .texto-grande {
        font-size: 18px; /* Tamaño más pequeño para pantallas pequeñas */
    }
}
</style>

<style>
/* Estilo base para dispositivos grandes FOOTER 2*/
.texto-grande2 {
    font-size: 40px; /* Tamaño más grande para pantallas grandes */
}

/* Media query para dispositivos más pequeños FOOTER 2*/
@media (max-width: 768px) {
    .texto-grande2 {
        font-size: 20px; /* Tamaño más pequeño para pantallas pequeñas */
    }
}
</style>


<!-- Estilo  Color Menu Hamburguesa -->
<style>
.navbar-toggler-icon {
    transition: transform 0.5s ease; /* Establece una transición para el cambio de transformación */
}

.navbar-toggler[aria-expanded="true"] img {
    animation: rotateBack 0.5s linear forwards; /* Aplica la animación para rotar la imagen hacia atrás */
}

@keyframes rotateBack {
    0% {
        transform: rotate(90deg); /* Inicia la rotación en 90 grados */
    }
    100% {
        transform: rotate(0deg); /* Termina la rotación volviendo a 0 grados */
    }
}


.navbar-toggler {
    box-shadow: 5px 5px 5px rgba(0, 0, 0, 2.8);
    border-radius: 10px;
    border-color: black !important; /* Establece el color del borde del botón */
    border-width: 4px !important; /* Establece el grosor del borde del botón */
}




</style>

<!-- Imagen de titulo responsive -->
<style>
       .container {
            text-align: center;
        }

        .responsive-image {
            width: 100%;
            height: auto;
            max-width: 800px; /* Ancho máximo deseado para la imagen */
        }
    </style>

<!-- Nombre de los Cosplayers responsive -->
<style>
/* Estilo para pantallas grandes (monitores) */
@media (min-width: 992px) {
    .responsive-text {
        font-size: 60px; /* Tamaño para pantallas grandes */
    }
}

/* Estilo para pantallas pequeñas (celulares) */
@media (max-width: 576px) {
    .responsive-text {
        font-size: 50px; /* Tamaño para pantallas pequeñas */
    }
}
</style>


 <!-- Estilo  Fuente para Footer -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Bungee+Inline&family=Bungee+Spice&family=Concert+One&family=Fascinate+Inline&family=Fredericka+the+Great&family=Frijole&family=Honk&family=Kavoon&family=Luckiest+Guy&family=Rampart+One&family=Rubik+Doodle+Shadow&family=Shojumaru&display=swap" rel="stylesheet">
 <!---------------------------------------->


 <!-- Estilo  Fuente para Footer2 -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Bungee+Inline&family=Bungee+Spice&family=Concert+One&family=Fascinate+Inline&family=Fredericka+the+Great&family=Frijole&family=Honk&family=Kavoon&family=Luckiest+Guy&family=Passion+One:wght@400;700;900&family=Rampart+One&family=Rubik+Doodle+Shadow&family=Shojumaru&display=swap" rel="stylesheet">
 <!---------------------------------------->

</head>
<body style="background-image: url('img/BodyCosplay4.jpeg'); background-size: cover; background-position: center;">
    <!-- Navbar con menú hamburguesa -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-image: url('img/fondoNav2.jpg'); background-size: cover; background-position: center; border-bottom: 1px solid rgba(255, 255, 255, 0.1); box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);">
    <div class="container-fluid">
        <!-- Botón para el menú hamburguesa -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="font-size: 3vw; background: linear-gradient(to right, #ff3300, #ff6600, #ff9933); ">
        <img src="img/carpincho.png" alt="Menú" style="width: 30px; height: auto;">
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
<div class="container">
        <img src="img/COS2.png" alt="Titulo Cosplayers" class="responsive-image">
</div>



<!-- Vista de Cosplayers-->
<div class="container">
  <div class="row">
    <!-- Primer Cosplayer -->
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
    <div class="card h-100 d-flex flex-column" style="background-image: url('img/cart3Cos.jpg'); background-size: cover; background-position: center;">
        <h4 class="card-header text-center responsive-text" style="background-image: url('img/cart4Cos.jpg'); background-color: transparent; font-family: 'Luckiest Guy', cursive; font-weight: 400; font-style: normal; color: #FFFFFF; -webkit-text-stroke: 1px #000; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; font-size: 30px;">Nadir</h4>
        <div class="card-body flex-grow-1 d-flex flex-column" style="background: transparent;">
            <img src="imgCosplayers/nadirPrincipal.jpg" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
            <!-- Agregar el botón para desplegar el párrafo -->
            <a href="cosplayers/nadir.php" target="_blank" class="btn btn-link mt-3 btn-responsive btn-responsive fw-bold" style="color: white; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; font-family: 'Luckiest Guy', cursive; font-weight: 400; font-style: normal;">
                Acerca de mi
            </a>
            <!-- Contenido del párrafo, inicialmente oculto -->
            <div class="collapse" id="texto-aincrad">
                <p class="card-text text-responsive" style="font-family: Bangers, system-ui; font-weight: 400; font-style: normal; text-align: justify; font-size: 19px; color: #000000;">
                <strong>Productos sublimados:</strong> tazas, jarros térmicos, remeras sublimadas, gorras, fundas para celular, mousepads, llaveros, botellas, vasos, bolsos, monederos.
                <br>
                <strong>Papelería:</strong> Polaroids, photocards, posters, stickers, tiras de fotos, planchas de stickers.
                </p>
            </div>
        </div>
        <div class="mt-auto p-3 d-flex justify-content-center" style="background-image: url('img/cart4Cos.jpg'); ">
            <a href="url_de_tus_redes_sociales" class="btn btn-sm btn-primary btn-responsive" onclick="abrirMiniVentanaAincrad()" style="font-family: 'Bungee Inline', sans-serif;">
                Redes sociales😊
            </a>
        </div>
    </div>
    </div>
       



    
</div>
</div>

</div>






    
 





 


<!-- Línea de separación transparente -->
<div style="border-top: 1px solid rgba(0, 0, 0, 0.0); margin: 20px auto;"></div>


    <!-- Incluye el archivo JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



</body>

<?php include("template/pie.php"); ?>
