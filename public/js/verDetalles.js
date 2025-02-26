document.addEventListener('DOMContentLoaded', () => {
    const filas = document.querySelectorAll('tbody tr');
    const btnVerDetalles = document.getElementById('btn-ver-detalles');
    const btnEliminar = document.getElementById('btn-eliminar');
    const errorMessage = document.getElementById('select-row-message');
    const mostrarId = document.getElementById('mostrar-id');
    const tabla = document.querySelector('table');
    let filaSeleccionada = null;

    // Seleccionar fila al hacer clic
    filas.forEach(fila => {
        fila.addEventListener('click', () => {
            filas.forEach(f => f.classList.remove('selected'));
            fila.classList.add('selected');
            filaSeleccionada = fila;
            btnVerDetalles.classList.add('active');
            btnEliminar.classList.add('active');
            errorMessage.style.display = 'none';

            const id = filaSeleccionada.cells[0].textContent.trim();
            mostrarId.textContent = `ID seleccionado: ${id}`;
        });
    });

    // CORRECCIÓN: Modificar esta condición
    document.addEventListener('click', (e) => {
        const clickEnBotones = e.target.closest('#btn-ver-detalles') || e.target.closest('#btn-eliminar');
        if (!tabla.contains(e.target) && !clickEnBotones) {
            filas.forEach(f => f.classList.remove('selected'));
            btnVerDetalles.classList.remove('active');
            btnEliminar.classList.remove('active');
            filaSeleccionada = null;
            errorMessage.style.display = 'none';
            mostrarId.textContent = "";
        }
    });

    // Resto del código sin cambios...
    btnVerDetalles.addEventListener('click', (e) => {
        if (!filaSeleccionada) {
            e.preventDefault();
            errorMessage.textContent = "⚠️ Seleccione una fila primero";
            errorMessage.style.display = 'block';
            setTimeout(() => errorMessage.style.display = 'none', 3000);
        } else {
            const id = filaSeleccionada.cells[0].textContent.trim();
            window.location.href = `/detalles-empresa/${id}`;
        }
    });
    
    btnEliminar.addEventListener('click', (e) => {
        e.preventDefault();
        
        if (!filaSeleccionada) {
            errorMessage.textContent = "⚠️ Seleccione una fila primero";
            errorMessage.style.display = 'block';
            setTimeout(() => errorMessage.style.display = 'none', 3000);
            return;
        }

        const id = filaSeleccionada.cells[0].textContent.trim();
        
        if (confirm('¿Está seguro de eliminar esta empresa?')) {
            window.location.href = `empresas/eliminar/${id}`;
        }
    });
});