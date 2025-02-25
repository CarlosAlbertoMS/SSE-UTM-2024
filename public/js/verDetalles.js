document.addEventListener('DOMContentLoaded', () => {
    const filas = document.querySelectorAll('tbody tr');
    const btnVerDetalles = document.getElementById('btn-ver-detalles');
    const errorMessage = document.getElementById('select-row-message');
    const mostrarId = document.getElementById('mostrar-id'); // Referencia al div
    const tabla = document.querySelector('table');
    let filaSeleccionada = null;

    // Seleccionar fila al hacer clic
    filas.forEach(fila => {
        fila.addEventListener('click', () => {
            filas.forEach(f => f.classList.remove('selected'));
            fila.classList.add('selected');
            filaSeleccionada = fila;
            btnVerDetalles.classList.add('active');
            errorMessage.style.display = 'none';

            // Extraer el ID y mostrarlo en pantalla
            const id = filaSeleccionada.cells[0].textContent.trim();
            mostrarId.textContent = `ID seleccionado: ${id}`;
        });
    });

    // Deseleccionar al hacer clic fuera de la tabla
    document.addEventListener('click', (e) => {
        if (!tabla.contains(e.target) && !e.target.closest('#btn-ver-detalles')) {
            filas.forEach(f => f.classList.remove('selected'));
            btnVerDetalles.classList.remove('active');
            filaSeleccionada = null;
            errorMessage.style.display = 'none';
            mostrarId.textContent = ""; // Limpiar el mensaje
        }
    });

    // Extraer solo el ID al hacer clic en "Ver Detalles"
    btnVerDetalles.addEventListener('click', (e) => {
        if (!filaSeleccionada) {
            e.preventDefault();
            errorMessage.style.display = 'block';
            setTimeout(() => errorMessage.style.display = 'none', 3000);
        } else {
            const id = filaSeleccionada.cells[0].textContent.trim();
            mostrarId.textContent = `ID seleccionado: ${id}`;
            window.location.href = `/detalles-empresa/${id}`;
        }
    });
});