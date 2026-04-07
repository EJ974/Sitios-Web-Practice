<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nadir</title>
    <!-- Enlace al archivo CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

<!-- Estilos Titulo Presentacion -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Bungee+Inline&family=Bungee+Spice&family=Concert+One&family=Fascinate+Inline&family=Faster+One&family=Fredericka+the+Great&family=Frijole&family=Honk&family=Kavoon&family=Luckiest+Guy&family=Passion+One:wght@400;700;900&family=Rampart+One&family=Righteous&family=Rubik+Doodle+Shadow&family=Shojumaru&display=swap" rel="stylesheet">

<title>Perfil de Cosplayer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">

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


<!-- Estilo para la info del cosplayer-->
<style>
.info-bar {
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 15px;
            margin: 20px 0;
            text-align: center;
            font-family: 'Luckiest Guy', cursive;
            border-radius: 10px;
        }
        .info-bar span {
            display: block;
            font-size: 1.2em;
        }
        .profile-header {
            font-family: 'Luckiest Guy', cursive;
            color: white;
            text-shadow: 2px 2px 4px #000000;
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-details {
    font-family: 'Bangers', sans-serif;
    text-shadow: 2px 2px 4px #000000; /* Aumentar sombra del texto */
    text-align: justify;
    margin: 20px 0;
    background: rgba(0, 0, 0, 0.7);
    padding: 20px;
    border-radius: 10px;
    color: #FFFFFF; /* Cambiar el color del texto a blanco */
    font-size: 1.5em; /* Aumentar el tamaño del texto */
    letter-spacing: 0px; /* Reducir el espacio entre letras */
    line-height: 1.3; /* Ajustar la altura de línea */
    word-spacing: 0px; /* Reducir el espacio entre palabras */
}

        .text-responsive {
            max-width: 100%; /* Establecer el ancho máximo del texto */
            overflow-wrap: break-word; /* Permitir el salto de línea dentro de palabras largas */
            word-wrap: break-word; /* Hacer que las palabras largas se envuelvan */
        }

        .carousel-item img {
            max-height: 900px;
            object-fit: cover;
            border-radius: 10px;
        }
        .attribution {
            font-size: 0.8em;
            text-align: center;
            margin-top: 20px;
        }
        .attribution a {
            color: white;
            text-decoration: underline;
        }
    </style>

      <!-- Estilo para el header del copslayer/ Su nombre -->
    <style>
            .profile-header {
            font-size: 3vw; /* Tamaño relativo en dispositivos móviles */
            color: #FFD700; /* Color base del texto */
            text-shadow: 3px 3px 6px #000000; /* Sombra para el texto */
            font-family: 'Luckiest Guy', cursive; /* Fuente llamativa */
            margin-top: 20px;
            margin-bottom: 20px;
            text-align: center;
            background: transparent; /* Fondo transparente */
            padding: 10px;
            border-radius: 10px;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;

            -webkit-text-stroke: 6px red; /* Borde negro */
        }


        .profile-header {
    font-size: 20vw; /* Tamaño relativo en dispositivos móviles */
                        }

     @media (min-width: 768px) {
    .profile-header {
        font-size: 10rem; /* Tamaño fijo en pantallas más grandes (a partir de 768px) */
    }
}
    </style>

      <!-- Estilo para la barra del cosplayer con su info -->
    <style>
        .info-bar span {
    max-width: 100%; /* Establecer el ancho máximo del texto */
    overflow-wrap: break-word; /* Permitir el salto de línea dentro de palabras largas */
    word-wrap: break-word; /* Hacer que las palabras largas se envuelvan */
}
    </style>

    <!-- Estilo para la columna izquierda -->
    <style>
        .left-column {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .list-group-item {
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.2);
            margin-bottom: 10px;
            border-radius: 5px;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
        }

        .list-group-item:hover {
            background: rgba(255, 255, 255, 0.2);
            transition: background 0.3s;
        }

        .badge {
            background-color: #FFD700;
            color: #000;
            font-size: 1em;
        }

        .badge.bg-primary {
            background-color: #007bff;
        }

        .mini-image {
            width: 24px;
            height: 24px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .carousel-inner img {
            max-height: 1200px;  /* Ajusta esta altura según tus necesidades */
            object-fit: cover;
            width: 500%;
        }

        .carousel {
            width: 230%;
            max-width: 200%;
            margin: auto;
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

<body style="background-image: url('/CtesOtaku/img/bodyCosplayer3.jpg'); background-size: cover; background-position: center;">
    <!-- Navbar con menú hamburguesa -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-image: url('/CtesOtaku/img/cart7Cos.jpg'); background-size: cover; background-position: center; border-bottom: 1px solid rgba(255, 255, 255, 0.1); box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);">
        <div class="container-fluid">
            <!-- Botón para el menú hamburguesa -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="font-size: 3vw; background: linear-gradient(to right, #ff3300, #ff6600, #ff9933);">
                <img src="/CtesOtaku/img/carpincho.png" alt="Menú" style="width: 30px; height: auto;">
            </button>
            <!-- Nombre o logo de tu aplicación -->
            <img src="/CtesOtaku/img/Drew_Feig-removebg-preview.png" alt="logo" class="logo img-fluid" style="width: 140px; height: auto; margin-top: 20px; margin-left: 4px;">
            <!-- Menú de navegación -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav w-100 text-center">
                    <li class="nav-item">
                        <a class="nav-link honk-font" href="/CtesOtaku/inicio.php" style="color: white; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; font-family: 'Honk', system-ui; font-weight: 400; font-style: normal; font-variation-settings: 'MORF' 15, 'SHLN' 50.2;">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/CtesOtaku/eventos.php" style="color: white; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; font-family: 'Honk', system-ui; font-weight: 400; font-style: normal; font-variation-settings: 'MORF' 15, 'SHLN' 50.2;">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/CtesOtaku/stands.php" style="color: white; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; font-family: 'Honk', system-ui; font-weight: 400; font-style: normal; font-variation-settings: 'MORF' 15, 'SHLN' 50.2;">Stands</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/CtesOtaku/cosplayers.php" style="color: white; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; font-family: 'Honk', system-ui; font-weight: 400; font-style: normal; font-variation-settings: 'MORF' 15, 'SHLN' 50.2;">Cosplayers</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  


     <!-- Header -->
     <div class="container">
        <h1 class="profile-header">Nadir</h1>
    </div>

    <div class="container">
        <div class="row">
            <!-- Columna izquierda -->
            <div class="col-md-4">
                <div class="left-column">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center" style="font-family: Bangers, system-ui; font-weight: 400; font-style: normal; text-align: justify; font-size: 25px; color: #FFFFF; -webkit-text-stroke: 2px black;">
                                <img src="/CtesOtaku/img/iconoJurado.png" alt="mini image" class="mini-image">
                                Jurado
                            </div>
                            <span class="badge bg-primary rounded-pill">0</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center" style="font-family: Bangers, system-ui; font-weight: 400; font-style: normal; text-align: justify; font-size: 25px; color: #FFFFF; -webkit-text-stroke: 2px black;">
                                <img src="/CtesOtaku/img/iconoParticipacionConcurso.png" alt="mini image" class="mini-image">
                                Participación en Concursos
                            </div>
                            <span class="badge bg-primary rounded-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center" style="font-family: Bangers, system-ui; font-weight: 400; font-style: normal; text-align: justify; font-size: 25px; color: #FFFFF; -webkit-text-stroke: 2px black;">
                                <img src="/CtesOtaku/img/iconoConcursosGanados.png" alt="mini image" class="mini-image">
                                Concursos Ganados
                            </div>
                            <span class="badge bg-primary rounded-pill">1</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center" style="font-family: Bangers, system-ui; font-weight: 400; font-style: normal; text-align: justify; font-size: 25px; color: #FFFFF; -webkit-text-stroke: 2px black;">
                                <img src="/CtesOtaku/img/iconoAñosdeCosplay.png" alt="mini image" class="mini-image">
                                Años de Cosplay
                            </div>
                            <span class="badge bg-primary rounded-pill">1</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Sección de Fotos -->
            <div class="col-md-4">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/CtesOtaku/imgCosplayers/nadir1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/CtesOtaku/imgCosplayers/nadir2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/CtesOtaku/imgCosplayers/nadir3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/CtesOtaku/imgCosplayers/nadir4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/CtesOtaku/imgCosplayers/nadir5.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/CtesOtaku/imgCosplayers/nadir6.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/CtesOtaku/imgCosplayers/nadir7.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/CtesOtaku/imgCosplayers/nadir8.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/CtesOtaku/imgCosplayers/nadir9.jpg" class="d-block w-100" alt="...">
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
            </div>




    <!-- Detalles del Cosplayer -->
    <div class="container">
        <div class="profile-details">
        <p class="card-text text-responsive">
        Holaa buenas soy nadir Gabriel González soy cosplayer hace 2 años y soy de corrientes capital, y yo empecé
         en el mundo del cosplay por qué me gusta caracterizar los personajes que me gustan y además hace bastante
          tipo yo siempre quise hasta que un día me animé y bueno de más está decir que hoy en día no me arrepiento
           de nada, aprendí mucho y me esforcé, conocí gente buena y seguí sus concejos, sobre todo nunca me rendí y
            doy lo mejor cada vez más y para más o menos pensar en cuántos concurso participe creo que 20 más o menos
             y los que fui jurado creo que 5 veces y en las veces que fui jurado siempre doy buenos consejos, 
             recomendaciones y lo que pueden mejorar, por qué sé lo que siente cuando es la primera vez que competís
              ya que estuve en se papel y nada más que decir solo que a las personas que quieran entrar en este mundo
               del cosplay que lo intenten y no se desanimen si no ganan o por algún otro motivo, lo importante siempre
                es divertirse y pasarla bien cuando interpretan a un personaje siempre la mejor.
                  </p>
        </div>
    </div>

 
 <!-- Barra de Información -->
 <div class="container">
        <div class="info-bar row">
            <div class="col-md-3">
                <span>Jurado: Sí/No</span>
            </div>
            <div class="col-md-3">
                <span>Participacion en Concursos: 10</span>
            </div>
            <div class="col-md-3">
                <span>Concursos Ganados: 5</span>
            </div>
            <div class="col-md-3">
                <span>Años de Cosplay: 3</span>
            </div>
        </div>
    </div>

    <!-- Línea de separación transparente -->
    <div style="border-top: 1px solid rgba(0, 0, 0, 0.0); margin: 20px auto;"></div>

    <!-- Incluye el archivo JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
<footer style="background-image: url('/CtesOtaku/img/fondoFooter.jpg'); background-size: cover; background-position: center; padding: 5vw; text-align: center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-15" style="background-color: rgba(0, 0, 0, 0.5); padding: 5vw; border-radius: 6%;">
                <div class="text-center" style="overflow: hidden;">
                    <h4 class="texto-grande" style="color: white; text-shadow: -5px -5px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000; font-family: 'Shojumaru', system-ui; font-weight: 400; font-style: normal;">¿Queres aparecer en Eventos Friki como Stand o Evento?</h4>
                    <p class="texto-grande2" style="color: white; text-shadow: -5px -5px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000; font-family: 'Passion One', sans-serif; font-weight: 400; font-style: normal;">
                        Escribinos a nuestras Redes:
                    </p>
                    <!-- Botón de WhatsApp -->
                    <a href="https://wa.me/3794774418" target="_blank" style="margin-right: 20px;">
                        <img src="/CtesOtaku/img/wasap.png" alt="WhatsApp" style="background-image: url('/CtesOtaku/img/anaranjado.jpg'); margin-top: -10px; width: 10vw; max-width: 80px; height: auto; background-size: cover; background-position: center; padding: -2vw; border-radius: 50%;">
                    </a>

                    <!-- Botón de Instagram -->
                    <a href="https://www.instagram.com/expo.otaku/" target="_blank">
                        <img src="/CtesOtaku/img/instagram.png" alt="Instagram" style="background-image: url('/CtesOtaku/img/anaranjado.jpg'); margin-top: -10px; width: 10vw; max-width: 80px; height: auto; background-size: cover; background-position: center; padding: -2vw; border-radius: 50%;">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <p>Imagen de fondo por <a href="https://www.freepik.es/foto-gratis/hermosas-nubes-arte-digital_144644721.htm#fromView=search&page=1&position=0&uuid=467b6107-6606-4168-a544-4335192e828c">Imagen de freepik</a></p>
    <p>Imagen de cabecera por <a href="https://www.freepik.es/foto-gratis/piezas-ajedrez-abstractas-estilo-arte-digital_186742727.htm#fromView=search&page=1&position=21&uuid=e64e542e-fcb3-4057-8cbe-47ddeadc3f55">Imagen de freepik</a></p>
</footer>



