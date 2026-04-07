function abrirMiniVentanaDaegutaan() {
// Abre una nueva ventana con las dimensiones especificadas
let ventana = window.open('daegutanredes.php', 'Mini Ventana', 'width=400,height=400');

// Calcula las coordenadas para centrar la ventana en la pantalla
let left = (window.screen.width - 400) / 2;
let top = (window.screen.height - 400) / 2;

// Centra la ventana en la pantalla
ventana.moveTo(left, top);
}
