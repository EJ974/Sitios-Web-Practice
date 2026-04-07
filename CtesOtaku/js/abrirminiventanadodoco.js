function abrirMiniVentanaDodocoStore() {
    // Cierra todas las ventanas abiertas antes de abrir una nueva
    cerrarTodasVentanas();

// Abre una nueva ventana con las dimensiones especificadas
let ventana = window.open('dodocostoreredes.php', 'Mini Ventana', 'width=400,height=400');

// Calcula las coordenadas para centrar la ventana en la pantalla
let left = (window.screen.width - 400) / 2;
let top = (window.screen.height - 400) / 2;

// Centra la ventana en la pantalla
ventana.moveTo(left, top);
}