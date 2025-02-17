let lastOpened = null; // Guarda el último botón abierto

function toggleDescripcion(btn) {
    let row = btn.parentElement;
    let corta = row.querySelector('.descripcion-corta');
    let completa = row.querySelector('.descripcion-completa');

    // Si hay una descripción abierta diferente, la cerramos
    if (lastOpened && lastOpened !== btn) {
        let lastRow = lastOpened.parentElement;
        let lastCorta = lastRow.querySelector('.descripcion-corta');
        let lastCompleta = lastRow.querySelector('.descripcion-completa');

        lastCorta.style.display = 'inline';
        lastCompleta.style.display = 'none';
        lastOpened.innerText = '...';
    }

    // Alternar visibilidad de la descripción actual
    if (completa.style.display === 'none') {
        corta.style.display = 'none';
        completa.style.display = 'inline';
        btn.innerText = '▲';
        lastOpened = btn; // Guardamos el botón abierto
    } else {
        corta.style.display = 'inline';
        completa.style.display = 'none';
        btn.innerText = '...';
        lastOpened = null; // No hay ninguna descripción abierta
    }
}