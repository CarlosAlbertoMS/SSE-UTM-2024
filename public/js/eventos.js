// Este archivo es para modificar el contenido de la vista de Eventos sin tener que recargar la página.

var img_ant = new Image();
img_ant.src = "../assets/icons/Marcador_B.svg";

function Marcador_selected(imagen) {
    if(img_ant.src === imagen.src){
        imagen.src = "../assets/icons/Marcador_BG.svg";
    }else{
        imagen.src = img_ant.src;
    }
}

document.querySelector('.main--container--2').addEventListener('click', function(event) {
        if (event.target && event.target.classList.contains('btn-ver-detalle')) {
        const eventoId = event.target.getAttribute('data-id');
        const paginaActual = event.target.getAttribute('data-page');

        history.pushState({ pagina: paginaActual }, '', `?page=${paginaActual}`);
        cargarDetalleEvento(eventoId);
    }
});

document.querySelector('.main--container--2').addEventListener('click', function(event) {
    if (event.target && event.target.id === 'btn-regresar') {
        history.back();
    }
});

window.addEventListener('popstate', function(event) {
    const pagina = event.state ? event.state.pagina : 1;
    cargarPagina(pagina);
});

function cargarDetalleEvento(eventoId) {
    $.ajax({
        url: `/Egresados/Eventos/${eventoId}`,
        method: 'GET',
        dataType: 'json',
        success: function(response) {
            document.querySelector('.main--container--1').style.display = 'none';
            $('.main--container--2').html(
                `@include('layouts.egresados.eventos-show')`
                );
        },
        error: function(error) {
            console.error('Error al cargar el detalle del evento:', error);
        }
    });
}

function cargarPagina(pagina) {
    $.ajax({
        url: `/Egresados/Eventos?page=${pagina}`,
        method: 'GET',
        success: function(response) {
            document.querySelector('.main--container--1').style.display = 'block';
            $('.main--container--2').html(
                `@include('layouts.egresados.eventos-index', ['paginador' => $paginador])`
            );
        },
        error: function(error) {
            console.error('Error al cargar la página:', error);
        }
    });
}
