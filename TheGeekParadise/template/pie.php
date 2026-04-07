  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Fancybox -->
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

  <script>
    // Inicializa Fancybox
    if (window.Fancybox) {
      Fancybox.bind('[data-fancybox]', {
        // Opcional: configuración adicional
      });
    }
  </script>

     <script>
     const lightbox = GLightbox({ selector: '.glightbox' });
     </script>

    <script>
  document.addEventListener('DOMContentLoaded', function () {
    const submenuLinks = document.querySelectorAll('.dropdown-submenu > a');

    submenuLinks.forEach(link => {
      link.addEventListener('click', function (e) {
        e.preventDefault();

        // Cierra otros submenús abiertos si querés solo uno a la vez
        document.querySelectorAll('.dropdown-submenu').forEach(sub => {
          if (sub !== this.parentElement) {
            sub.classList.remove('show-submenu');
          }
        });

        // Abre o cierra este submenú
        this.parentElement.classList.toggle('show-submenu');
      });
    });
  });
</script>


</body>
<footer class="bg-dark text-dark text-center py-3 mt-4">
    <p class="mb-0">© 2025 The Geek Paradise. Todos los derechos reservados.</p>
  </footer>

</html>
