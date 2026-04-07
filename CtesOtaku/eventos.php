<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <!-- Enlace al archivo CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Sans+MS&display=swap" rel="stylesheet">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Honk:SHLN@50.2&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Honk:SHLN@50.2&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Bungee+Spice&family=Honk&family=Luckiest+Guy&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Bungee+Spice&family=Fredericka+the+Great&family=Honk&family=Luckiest+Guy&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Bungee+Inline&family=Bungee+Spice&family=Fredericka+the+Great&family=Honk&family=Luckiest+Guy&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
    <!-- Estilos personalizados -->
    
       <style>
  .card-body img {
    max-width: 100%;
    max-height: 200px; /* Altura máxima deseada */
    width: auto;
    height: auto;
  }
</style>

<!------------------------------------------->

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
<!------------------------------------------------------------------------------->

<!-- Estilos para agrandar o achicar los titulos de los eventos dependiendo de la ventana -->
<style>
/* Estilos para el texto responsive */
.responsive-text {
    font-size: 3vw; /* Tamaño predeterminado para ventanas grandes */
}

/* Media query para ventanas pequeñas */
@media (max-width: 768px) {
    .responsive-text {
        font-size: 10vw; /* Tamaño para ventanas pequeñas */
    }
}


</style>
<!------------------------------------------------------------------------------->



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
            transition: transform 0.5s ease;
        }

        .navbar-toggler[aria-expanded="true"] img {
            animation: rotateBack 0.5s linear forwards;
        }

        @keyframes rotateBack {
            0% {
                transform: rotate(90deg);
            }
            100% {
                transform: rotate(0deg);
            }
        }

        .navbar-toggler {
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 2.8);
            border-radius: 10px;
            border-color: black !important;
            border-width: 4px !important;
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

<!-- Estilo  boton despliegue Descripcion -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Bungee+Inline&family=Bungee+Spice&family=Concert+One&family=Fascinate+Inline&family=Fredericka+the+Great&family=Frijole&family=Honk&family=Kavoon&family=Luckiest+Guy&family=Passion+One:wght@400;700;900&family=Rampart+One&family=Righteous&family=Rubik+Doodle+Shadow&family=Shojumaru&display=swap" rel="stylesheet">
 <!---------------------------------------->


 <!-- Estilo  boton despliegue Descripcion GRANDE - PEQUEÑO -->
 <style>
    /* Estilo predeterminado para el botón y el texto */
    .btn-responsive {
        font-size: 2vw; /* Tamaño predeterminado para el botón */
    }

    /* Estilos específicos para pantallas pequeñas */
    @media (max-width: 768px) {
        .btn-responsive {
            font-size: 4vw; /* Tamaño para pantallas pequeñas */
        }

    }

    /* Estilos específicos para pantallas medianas */
    @media (min-width: 769px) and (max-width: 992px) {
        .btn-responsive {
            font-size: 1.8vw; /* Tamaño para pantallas medianas */
        }

    }

    /* Estilos específicos para pantallas grandes */
    @media (min-width: 993px) {
        .btn-responsive {
            font-size: 0.9vw; /* Tamaño para pantallas grandes */
        }

    
    }
</style>


</head>
<body style="background-image: url('img/wp9684212-anime-compilation-wallpapers.jpg'); background-size: cover; background-position: center;">
        <!-- Navbar con menú hamburguesa -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-image: url('img/14622639415_5a7908cd34_o.jpg'); background-size: cover; background-position: center; border-bottom: 1px solid rgba(255, 255, 255, 0.1); box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);">
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


<div class="jumbotron" style="background-image: url(''); background-size: auto 100%; background-position: center; text-align: center; text-shadow: -1px -1px 0 #000000, 1px -1px 0 #000000, -1px 1px 0 #000000, 6px 6px 0 #000000;">
    <h1 class="display-3 fs-md-4 fs-lg-5 fs-xl-6" style="color: white; font-family: 'Bungee Spice', sans-serif; font-size: 6vw; margin-top: 2vw; max-width: 100%;">Conoce a tus Eventos Favoritos</h1>
</div>




<div class="container">
  <div class="row">

<!-- Primer Evento -->
<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
    <div class="card h-100 d-flex flex-column" style="background-image: url('img/f0f4973ad8adca268f9b9feb95d1a980.jpg'); background-size: cover; background-position: center;">
        <h4 class="card-header text-center responsive-text" style="background-image: url('img/anaranjado.jpg'); font-family: 'Luckiest Guy', cursive; font-weight: 400; font-style: normal; margin-top: 0px; margin-left: 0px; color: #FF0000; text-shadow: -3px -3px 0 #000,1px -1px 0 #000,-5px  5px 0 #000,1px  1px 0 #000;">Expo Otaku</h4>
        <div class="card-body flex-grow-1 d-flex flex-column" style="background: transparent;">
            <img src="img/ExpoOtakuu.jpg" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
            <!-- Agregar el botón para desplegar el párrafo -->
            <button class="btn btn-link mt-3 btn-responsive fw-bold" onclick="abrirCerrarEvento('texto-expoOtaku')" data-bs-toggle="collapse" data-bs-target="#texto-expoOtaku" aria-expanded="false" aria-controls="texto-expoOtaku" style="color: white; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; font-family: 'Luckiest Guy', cursive; font-weight: 400; font-style: normal;">
            Acerca de Nuestro Evento
            </button>

            <!-- Contenido del párrafo, inicialmente oculto -->
            <div class="collapse" id="texto-expoOtaku">
                <p class="card-text text-responsive" style="font-family: Bangers, system-ui; font-weight: 400; font-style: normal; text-align: justify; color: #000000; letter-spacing: -0.0px;">
                Expo Otaku es un emocionante evento que celebra la pasión por el anime y la cultura japonesa en todas sus formas.
                    <br>Ofrece una experiencia única que une a fans de todas las edades en un ambiente lleno de energía y creatividad, con actividades que
                    van desde concursos de cosplay hasta presentaciones de baile K-pop, Expo Otaku es el lugar perfecto para sumergirse en el vibrante mundo
                    del entretenimiento japonés y crear recuerdos inolvidables junto a amigos y familiares.
                </p>
            </div>
        </div>
        <div class="mt-auto p-3 d-flex justify-content-center" style="background-image: url('img/anaranjado.jpg'); ">
            <a href="https://www.instagram.com/expo.otaku/" class="btn btn-sm btn-primary btn-responsive" style="font-family: 'Bungee Inline', sans-serif;" target="_blank">
                Redes sociales😊
            </a>
        </div>
    </div>
</div>

 <!-- Segundo Evento  -->
 <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
    <div class="card h-100 d-flex flex-column" style="background-image: url('img/f0f4973ad8adca268f9b9feb95d1a980.jpg'); background-size: cover; background-position: center;">
        <h4 class="card-header text-center responsive-text" style="background-image: url('img/anaranjado.jpg'); font-family: 'Luckiest Guy', cursive; font-weight: 400; font-style: normal; margin-top: 0px; margin-left: 0px; color: #FF0000; text-shadow: -3px -3px 0 #000,1px -1px 0 #000,-5px  5px 0 #000,1px  1px 0 #000;">Animefest</h4>
        <div class="card-body flex-grow-1 d-flex flex-column" style="background: transparent;">
            <img src="img/ANIMEFESTT.png" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
            <!-- Agregar el botón para desplegar el párrafo -->
            <button class="btn btn-link mt-3 btn-responsive fw-bold" onclick="abrirCerrarEvento('texto-animefest')" data-bs-toggle="collapse" data-bs-target="#texto-animefest" aria-expanded="false" aria-controls="texto-animefest" style="color: white; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; font-family: 'Luckiest Guy', cursive; font-weight: 400; font-style: normal;">
            Acerca de Nuestro Evento
            </button>
            <!-- Contenido del párrafo, inicialmente oculto -->
            <div class="collapse" id="texto-animefest">
                <p class="card-text text-responsive" style="font-family: Bangers, system-ui; font-weight: 400; font-style: normal; text-align: justify; color: #000000; letter-spacing: -0.0px;">
                    ¥ Eventos de Anime en Corrientes ¥《Frikis conociendo a otros frikis 》
                                  `` para que pasen una tarde increíble 
                                  Conociendo más de la cultura japonesa ``
                </p>
            </div>
        </div>
        <div class="mt-auto p-3 d-flex justify-content-center" style="background-image: url('img/anaranjado.jpg'); ">
            <a href="https://www.instagram.com/animefestcts/" class="btn btn-sm btn-primary btn-responsive" style="font-family: 'Bungee Inline', sans-serif;" target="_blank">
                Redes sociales😊
            </a>
        </div>
    </div>
</div>


 <!-- Tercer Evento -->
 <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
    <div class="card h-100 d-flex flex-column" style="background-image: url('img/f0f4973ad8adca268f9b9feb95d1a980.jpg'); background-size: cover; background-position: center;">
        <h4 class="card-header text-center responsive-text" style="background-image: url('img/anaranjado.jpg'); font-family: 'Luckiest Guy', cursive; font-weight: 400; font-style: normal; margin-top: 0px; margin-left: 0px; color: #FF0000; text-shadow: -3px -3px 0 #000,1px -1px 0 #000,-5px  5px 0 #000,1px  1px 0 #000;">GeekFest</h4>
        <div class="card-body flex-grow-1 d-flex flex-column" style="background: transparent;">
            <img src="img/GEEKFEST.jpg" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
            <!-- Agregar el botón para desplegar el párrafo -->
            <button class="btn btn-link mt-3 btn-responsive fw-bold" data-bs-toggle="collapse" data-bs-target="#texto-geekfest" aria-expanded="false" aria-controls="texto-geekfest" style="color: white; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; font-family: 'Luckiest Guy', cursive; font-weight: 400; font-style: normal;">
                Acerca de Nuestro Evento
            </button>
            <!-- Contenido del párrafo, inicialmente oculto -->
            <div class="collapse" id="texto-geekfest">
                <p class="card-text text-responsive" style="font-family: Bangers, system-ui; font-weight: 400; font-style: normal; text-align: justify; color: #000000; letter-spacing: -0.0px;">
                    
                </p>
            </div>
        </div>
        <div class="mt-auto p-3 d-flex justify-content-center" style="background-image: url('img/anaranjado.jpg'); ">
            <a href="https://www.instagram.com/geekfestctes/" class="btn btn-sm btn-primary btn-responsive" style="font-family: 'Bungee Inline', sans-serif;" target="_blank">
                Redes sociales😊
            </a>
        </div>
    </div>
</div>

<!-- Cuarto Evento -->
<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
    <div class="card h-100 d-flex flex-column" style="background-image: url('img/f0f4973ad8adca268f9b9feb95d1a980.jpg'); background-size: cover; background-position: center;">
        <h4 class="card-header text-center responsive-text" style="background-image: url('img/anaranjado.jpg'); font-family: 'Luckiest Guy', cursive; font-weight: 400; font-style: normal; margin-top: 0px; margin-left: 0px; color: #FF0000; text-shadow: -3px -3px 0 #000,1px -1px 0 #000,-5px  5px 0 #000,1px  1px 0 #000;">CBK</h4>
        <div class="card-body flex-grow-1 d-flex flex-column" style="background: transparent;">
            <img src="img/CBK.jpg" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
            <!-- Agregar el botón para desplegar el párrafo -->
            <button class="btn btn-link mt-3 btn-responsive fw-bold" data-bs-toggle="collapse" data-bs-target="#texto-cbk" aria-expanded="false" aria-controls="texto-cbk" style="color: white; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; font-family: 'Luckiest Guy', cursive; font-weight: 400; font-style: normal;">
                Acerca de Nuestro Evento
            </button>
            <!-- Contenido del párrafo, inicialmente oculto -->
            <div class="collapse" id="texto-cbk">
                <p class="card-text text-responsive" style="font-family: Bangers, system-ui; font-weight: 400; font-style: normal; text-align: justify; color: #000000; letter-spacing: -0.0px;">
                ☆Juntadas Kpopers☆ 
                <br>Tardes únicas  que podes pasar con tus amigos escuchando la música que mas te gusta ♡
                </p>
            </div>
        </div>
        <div class="mt-auto p-3 d-flex justify-content-center" style="background-image: url('img/anaranjado.jpg'); ">
            <a href="https://www.instagram.com/cbkpop_/" class="btn btn-sm btn-primary btn-responsive" style="font-family: 'Bungee Inline', sans-serif;" target="_blank">
                Redes sociales😊
            </a>
        </div>
    </div>
</div>

<!-- Quinto Evento -->
<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
    <div class="card h-100 d-flex flex-column" style="background-image: url('img/f0f4973ad8adca268f9b9feb95d1a980.jpg'); background-size: cover; background-position: center;">
        <h4 class="card-header text-center responsive-text" style="background-image: url('img/anaranjado.jpg'); font-family: 'Luckiest Guy', cursive; font-weight: 400; font-style: normal; margin-top: 0px; margin-left: 0px; color: #FF0000; text-shadow: -3px -3px 0 #000,1px -1px 0 #000,-5px  5px 0 #000,1px  1px 0 #000;">OneForFest</h4>
        <div class="card-body flex-grow-1 d-flex flex-column" style="background: transparent;">
            <img src="img/OneForFestT.jpg" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
            <!-- Agregar el botón para desplegar el párrafo -->
            <button class="btn btn-link mt-3 btn-responsive fw-bold" data-bs-toggle="collapse" data-bs-target="#texto-oneforfest" aria-expanded="false" aria-controls="texto-oneforfest" style="color: white; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; font-family: 'Luckiest Guy', cursive; font-weight: 400; font-style: normal;">
                Acerca de Nuestro Evento
            </button>
            <!-- Contenido del párrafo, inicialmente oculto -->
            <div class="collapse" id="texto-oneforfest">
                <p class="card-text text-responsive" style="font-family: Bangers, system-ui; font-weight: 400; font-style: normal; text-align: justify; color: #000000; letter-spacing: -0.0px;">
                La one for fest, es un evento que trata de mejorar con cada edición teniendo en cuenta cosas nuevas cada vez, queremos ir creciendo y trayendo mejores cosas con el tiempo, y a su ves ser un espacio seguro y divertido para todos aquellos que quieren pasar una linda tarde en nuestro evento.
                </p>
            </div>
        </div>
        <div class="mt-auto p-3 d-flex justify-content-center" style="background-image: url('img/anaranjado.jpg'); ">
            <a href="https://www.instagram.com/one.for.fest/" class="btn btn-sm btn-primary btn-responsive" style="font-family: 'Bungee Inline', sans-serif;" target="_blank">
                Redes sociales😊
            </a>
        </div>
    </div>
</div>

<!-- Sexto Evento -->
<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
    <div class="card h-100 d-flex flex-column" style="background-image: url('img/f0f4973ad8adca268f9b9feb95d1a980.jpg'); background-size: cover; background-position: center;">
        <h4 class="card-header text-center responsive-text" style="background-image: url('img/anaranjado.jpg'); font-family: 'Luckiest Guy', cursive; font-weight: 400; font-style: normal; margin-top: 0px; margin-left: 0px; color: #FF0000; text-shadow: -3px -3px 0 #000,1px -1px 0 #000,-5px  5px 0 #000,1px  1px 0 #000;">Mang Fest</h4>
        <div class="card-body flex-grow-1 d-flex flex-column" style="background: transparent;">
            <img src="img/MANGFEST.jpg" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
            <!-- Agregar el botón para desplegar el párrafo -->
            <button class="btn btn-link mt-3 btn-responsive fw-bold" data-bs-toggle="collapse" data-bs-target="#texto-mangfest" aria-expanded="false" aria-controls="texto-mangfest" style="color: white; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; font-family: 'Luckiest Guy', cursive; font-weight: 400; font-style: normal;">
                Acerca de Nuestro Evento
            </button>
            <!-- Contenido del párrafo, inicialmente oculto -->
            <div class="collapse" id="texto-mangfest">
                <p class="card-text text-responsive" style="font-family: Bangers, system-ui; font-weight: 400; font-style: normal; text-align: justify; color: #000000; letter-spacing: -0.0px;">
                
                </p>
            </div>
        </div>
        <div class="mt-auto p-3 d-flex justify-content-center" style="background-image: url('img/anaranjado.jpg'); ">
            <a href="https://www.instagram.com/mang.fest/" class="btn btn-sm btn-primary btn-responsive" style="font-family: 'Bungee Inline', sans-serif;" target="_blank">
                Redes sociales😊
            </a>
        </div>
    </div>
</div>

<!-- Septimo Evento -->
<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
    <div class="card h-100 d-flex flex-column" style="background-image: url('img/f0f4973ad8adca268f9b9feb95d1a980.jpg'); background-size: cover; background-position: center;">
        <h4 class="card-header text-center responsive-text" style="background-image: url('img/anaranjado.jpg'); font-family: 'Luckiest Guy', cursive; font-weight: 400; font-style: normal; margin-top: 0px; margin-left: 0px; color: #FF0000; text-shadow: -3px -3px 0 #000,1px -1px 0 #000,-5px  5px 0 #000,1px  1px 0 #000;">K🪐Universe</h4>
        <div class="card-body flex-grow-1 d-flex flex-column" style="background: transparent;">
            <img src="img/K_UNIVERSE.jpg" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
            <!-- Agregar el botón para desplegar el párrafo -->
            <button class="btn btn-link mt-3 btn-responsive fw-bold" data-bs-toggle="collapse" data-bs-target="#texto-kuniverse" aria-expanded="false" aria-controls="texto-kuniverse" style="color: white; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; font-family: 'Luckiest Guy', cursive; font-weight: 400; font-style: normal;">
                Acerca de Nuestro Evento
            </button>
            <!-- Contenido del párrafo, inicialmente oculto -->
            <div class="collapse" id="texto-kuniverse">
                <p class="card-text text-responsive" style="font-family: Bangers, system-ui; font-weight: 400; font-style: normal; text-align: justify; color: #000000; letter-spacing: -0.0px;">
                Evento celebración a la cultura asiática: K-pop, anime, cosplay, K-dance, juegos y más 🥳.
                </p>
            </div>
        </div>
        <div class="mt-auto p-3 d-flex justify-content-center" style="background-image: url('img/anaranjado.jpg'); ">
            <a href="https://www.instagram.com/kuniverse_event/" class="btn btn-sm btn-primary btn-responsive" style="font-family: 'Bungee Inline', sans-serif;" target="_blank">
                Redes sociales😊
            </a>
        </div>
    </div>
</div>

<!-- Octavo Evento -->
<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
    <div class="card h-100 d-flex flex-column" style="background-image: url('img/f0f4973ad8adca268f9b9feb95d1a980.jpg'); background-size: cover; background-position: center;">
        <h4 class="card-header text-center responsive-text" style="background-image: url('img/anaranjado.jpg'); font-family: 'Luckiest Guy', cursive; font-weight: 400; font-style: normal; margin-top: 0px; margin-left: 0px; color: #FF0000; text-shadow: -3px -3px 0 #000,1px -1px 0 #000,-5px  5px 0 #000,1px  1px 0 #000;">Asian Expo</h4>
        <div class="card-body flex-grow-1 d-flex flex-column" style="background: transparent;">
            <img src="img/ASIANEXPOO.jpg" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
            <!-- Agregar el botón para desplegar el párrafo -->
            <button class="btn btn-link mt-3 btn-responsive fw-bold" data-bs-toggle="collapse" data-bs-target="#texto-asianexpo" aria-expanded="false" aria-controls="texto-asianexpo" style="color: white; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000; font-family: 'Luckiest Guy', cursive; font-weight: 400; font-style: normal;">
                Acerca de Nuestro Evento
            </button>
            <!-- Contenido del párrafo, inicialmente oculto -->
            <div class="collapse" id="texto-asianexpo">
                <p class="card-text text-responsive" style="font-family: Bangers, system-ui; font-weight: 400; font-style: normal; text-align: justify; color: #000000; letter-spacing: -0.0px;">
                    Asian Expo es un evento enfocado principalmente en el anime, pero también incluimos lo que es kpop.
               <br> Encontrarás actividades como baile, karaoke; tanto en estilo kpop como en jpop y cpop, dibujo y cosplay, así también como juegos donde el público puede 
                    participar de forma gratuita pero a su vez pueden pasar por los variados stands para ver sus productos.
                </p>
            </div>
        </div>
        <div class="mt-auto p-3 d-flex justify-content-center" style="background-image: url('img/anaranjado.jpg'); ">
            <a href="https://www.instagram.com/asian_expo_/" class="btn btn-sm btn-primary btn-responsive" style="font-family: 'Bungee Inline', sans-serif;" target="_blank">
                Redes sociales😊
            </a>
        </div>
    </div>
</div>





  </div>
</div>


    <!-- Incluye el archivo JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>




</body>

<?php include("template/pie.php"); ?>
