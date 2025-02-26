document.addEventListener("DOMContentLoaded", function () {
    const filas = document.querySelectorAll("tbody tr");
    const btnVerDetalles = document.getElementById("btn-ver-detalles");
    const btnEditar = document.getElementById("btn-editar");

    let idSeleccionado = null; // Variable para almacenar la matrícula seleccionada

    // Evento para seleccionar una fila
    filas.forEach((fila) => {
        fila.addEventListener("click", function () {
            filas.forEach(f => f.classList.remove("selected")); // Quitar selección previa
            fila.classList.add("selected"); // Agregar selección a la actual
            idSeleccionado = fila.cells[0].textContent.trim(); // Obtener matrícula (columna 0)
        });
    });

    // Evento para el botón "Ver Detalles"
    btnVerDetalles.addEventListener("click", function (e) {
        if (idSeleccionado) {
            window.location.href = `/egresados/${idSeleccionado}/ver`;
        } else {
            e.preventDefault();
            alert("⚠️ Por favor, selecciona un egresado primero.");
        }
    });

    // Evento para el botón "Editar"
    btnEditar.addEventListener("click", function (e) {
        if (idSeleccionado) {
            window.location.href = `/egresados/${idSeleccionado}/editar`;
        } else {
            e.preventDefault();
            alert("⚠️ Por favor, selecciona un egresado primero.");
        }
    });
});
