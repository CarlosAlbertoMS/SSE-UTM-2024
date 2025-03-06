document.addEventListener("DOMContentLoaded", function () {
    const filas = document.querySelectorAll("tbody tr");
    const btnVerDetalles = document.getElementById("btn-ver-detalles");
    const btnEditar = document.getElementById("btn-editar");
    const btnEliminar = document.getElementById("btn-eliminar");
    const errorMessage = document.getElementById("select-row-message");
    const mostrarId = document.getElementById("mostrar-id");
    const tabla = document.querySelector("table");

    let idSeleccionado = null;
    let filaSeleccionada = null;


    const rutaActual = window.location.pathname;
    console.log("Ruta actual:", rutaActual);

    function obtenerRutaVer() {
        if (!idSeleccionado) return null;
        if (rutaActual.includes("/egresados")) return `/egresados/${idSeleccionado}/ver`;
        if (rutaActual.includes("/empresas")) return `/empresas/${idSeleccionado}/ver`;
        if (rutaActual.includes("/ofertas")) return `/ofertas/${idSeleccionado}/ver`;
        if (rutaActual.includes("/salarios")) return `/salarios/${idSeleccionado}/ver`;
        if(rutaActual.includes("/eventos")) return `/eventos/${idSeleccionado}/ver`;
        return null;
    }


    // Función para actualizar estado de los botones
    function actualizarBotones() {
        const activo = !!idSeleccionado;
        btnVerDetalles.classList.toggle("active", activo);
        btnEditar.classList.toggle("active", activo);
        btnEliminar.classList.toggle("active", activo);

        btnVerDetalles.disabled = !activo;
        btnEditar.disabled = !activo;
        btnEliminar.disabled = !activo;
    }

    // Evento para seleccionar una fila
    filas.forEach((fila) => {
        fila.addEventListener("click", function () {
            filas.forEach(f => f.classList.remove("selected"));
            fila.classList.add("selected");
            filaSeleccionada = fila;
            idSeleccionado = fila.cells[0].textContent.trim();
            mostrarId.textContent = `ID seleccionado: ${idSeleccionado}`;

            actualizarBotones();
            errorMessage.style.display = "none"; // Oculta el mensaje si había un error
        });
    });

    // Deseleccionar fila si se hace clic fuera de la tabla o en botones
    document.addEventListener("click", (e) => {
        const clickEnBotones = e.target.closest("#btn-ver-detalles") || e.target.closest("#btn-editar") || e.target.closest("#btn-eliminar");
        if (!tabla.contains(e.target) && !clickEnBotones) {
            filas.forEach(f => f.classList.remove("selected"));
            filaSeleccionada = null;
            idSeleccionado = null;
            mostrarId.textContent = "";

            actualizarBotones();
            errorMessage.style.display = "none";
        }
    });

    // Función para mostrar mensaje de error
    function mostrarMensajeError() {
        errorMessage.textContent = "⚠️ Seleccione una fila primero";
        errorMessage.style.display = "block";
        setTimeout(() => errorMessage.style.display = "none", 1000);
    }

    // Eventos de los botones
    btnVerDetalles.addEventListener("click", function (e) {
        if (!idSeleccionado) {
            e.preventDefault();
            mostrarMensajeError();
        } else {
            const ruta = obtenerRutaVer();
            if (ruta) {
                window.location.href = ruta;
            }
        }
    });

    btnEditar.addEventListener("click", function (e) {
        if (!idSeleccionado) {
            e.preventDefault();
            mostrarMensajeError();
        } else {
            window.location.href = `/egresados/${idSeleccionado}/editar`;
        }
    });

    btnEliminar.addEventListener("click", function (e) {
        e.preventDefault();
        if (!idSeleccionado) {
            mostrarMensajeError();
            return;
        }
        if (confirm("¿Está seguro de eliminar esta empresa?")) {
            window.location.href = `/empresas/eliminar/${idSeleccionado}`;
        }
    });

    // Inicialmente, los botones deben estar deshabilitados
    actualizarBotones();
});
