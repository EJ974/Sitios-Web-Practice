<?php include $_SERVER['DOCUMENT_ROOT'] . '/TheGeekParadise/template/cabecera.php'; ?>

<main class="text-center">
  <img src="/TheGeekParadise/contenido_principal_img/2.png" alt="Imagen destacada" class="img-main mx-auto d-block img-fluid">
</main>

<!-- CARRUSEL -->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="/TheGeekParadise/carruseles_img/C1.png" class="d-block w-100" alt="Slide 1">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="/TheGeekParadise/carruseles_img/C2.png" class="d-block w-100" alt="Slide 2">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/TheGeekParadise/carruseles_img/C3.png" class="d-block w-100" alt="Slide 3">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>


<!-- SECCIÓN DE CONTACTO -->
<section id="contacto" class="text-white py-5 contacto-fondo">
  <div class="container">
    <h2 class="text-center mb-4 titulo-contacto">Contacto</h2>
    <div class="row justify-content-center">
      <div class="col-md-6 text-center titulo-contacto-descripcion">
        <p><strong>E m a i l:</strong> contacto@thegeekparadise.com</p>
        <p><strong>T e l é f o no:</strong> +54 379 123 4567</p>
        <p><strong>D i r e c c i ón:</strong> Av. Otaku 123, Corrientes, Argentina</p>
        <p><strong>I n s t a g r am:</strong> <a href="https://www.instagram.com/scar.solutions999/" target="_blank" class="text-info">@thegeekparadise</a></p>
      </div>
    </div>
  </div>
</section>


<!-- Script para submenu en móviles -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const dropdownToggles = document.querySelectorAll('.dropdown-submenu > a');

    dropdownToggles.forEach(function (toggle) {
      toggle.addEventListener('click', function (e) {
        const submenu = this.nextElementSibling;

        if (window.innerWidth < 768) {
          e.preventDefault();
          document.querySelectorAll('.dropdown-submenu .dropdown-menu').forEach(function (menu) {
            if (menu !== submenu) {
              menu.style.display = 'none';
            }
          });
          submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
        }
      });
    });
  });
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/TheGeekParadise/template/pie.php'; ?>
