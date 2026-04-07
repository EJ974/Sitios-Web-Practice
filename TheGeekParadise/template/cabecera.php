<?php
if (!isset($baseUrl)) {
  $baseUrl = '/TheGeekParadise';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TheGeekParadise</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>/estilos/style.css?v=1.2">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <!-- Animate On Scroll -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">


  <!-- Fancybox -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Honk&family=Lilita+One&family=Luckiest+Guy&family=Sigmar&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Honk&family=Lilita+One&family=Londrina+Solid:wght@100;300;400;900&family=Luckiest+Guy&family=Sigmar&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Honk&family=Lilita+One&family=Londrina+Solid:wght@100;300;400;900&family=Luckiest+Guy&family=Sigmar&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Honk&family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">

</head>
<body>

<header>
  <nav class="navbar navbar-expand-lg bg-dark fixed-top" data-bs-theme="dark">
    <div class="container-fluid">
      <!-- LOGO -->
      <a class="navbar-brand" href="<?php echo $baseUrl; ?>/index.php">
        <img src="<?php echo $baseUrl; ?>/logo/logoheaven.png" alt="Logo" class="logo-responsive d-inline-block align-text-top">
      </a>

      <!-- HAMBURGUESA -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- MENÚ -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarColor02">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="<?php echo $baseUrl; ?>/index.php">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="mainDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Catálogo</a>
            <ul class="dropdown-menu dropdown-animated" aria-labelledby="mainDropdown">
              <li><a class="dropdown-item" href="<?php echo $baseUrl; ?>/secciones/catalogo/mascaras/mascaras.php">Máscaras</a></li>
              <li><a class="dropdown-item" href="<?php echo $baseUrl; ?>/secciones/catalogo/bodys/bodys.php">Bodys</a></li>
              <li><a class="dropdown-item" href="<?php echo $baseUrl; ?>/secciones/catalogo/vestimenta/vestimenta.php">Vestimenta</a></li>
              <li><a class="dropdown-item" href="<?php echo $baseUrl; ?>/secciones/catalogo/alimentos/alimentos.php">Alimentos</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link active" href="<?php echo $baseUrl; ?>/secciones/sobre nosotros/sobre_nosotros.php">Sobre Nosotros</a></li>
          <li class="nav-item"><a class="nav-link active" href="<?php echo $baseUrl; ?>/index.php#contacto">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
