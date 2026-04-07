function abrirCerrarEvento(idEvento) {
    let evento = document.getElementById(idEvento);
    if (evento) {
        if (evento.classList.contains('show')) {
            evento.classList.remove('show');
        } else {
            cerrarEventoAbierto();
            evento.classList.add('show');
            eventoAbierto = idEvento;
        }
    }
}

function cerrarEvento() {
    if (eventoAbierto) {
        let eventoAnterior = document.getElementById(eventoAbierto);
        if (eventoAnterior) {
            eventoAnterior.classList.remove('show');
        }
        eventoAbierto = null;
    }
}


