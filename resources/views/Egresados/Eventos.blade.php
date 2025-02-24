<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/Egresados/Eventos.css')}}" />
    <link rel="stylesheet" href="{{asset('css/Egresados/TabuladorDeSalarios-Egresados.css')}}">
    <link rel="stylesheet" href="{{asset('css/Egresados/Eventos-Individual.css')}}">

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    {{-- <script src="{{ asset('js/eventos.js') }}"></script> --}}

	<title>Eventos</title>
</head>

<body>
	@include('layouts.egresados.header')

	<main>
		<section class="main--section">
			<div class="main--container--1">
				<x-buscador></x-buscador>
			</div>

        	<hr style="max-width: 986px; margin: 10px auto;">

			<div class="main--container--2">
				@include('layouts.egresados.eventos-index', ['paginador' => $paginador])	
			</div>
		</section>
	</main>

	@include('layouts.egresados.footer')

	<script>
		document.addEventListener('DOMContentLoaded', function() {
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
		});
	</script>
</body>

</html>
