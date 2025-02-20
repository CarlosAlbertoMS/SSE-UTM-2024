<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="{{ asset('css/Egresados/informacion-empresas-ofertas-laborales.css') }}" />
	<title>Ofertas Laborales</title>
</head>
<body>
	@include('layouts.Egresadosheader')
	<main>
		<!-- Inicio de la sección principal -->
		<section class="main--section">
			<!-- Sección del título y la segunda barra de navegación -->
			<section id="contenido">
				<div class="titulo">
					Datos de la empresa
				</div>
				<hr>
				<center>
					<div>
						<ul class="menu2">
							<li>
								<a class="texto-menu2" href="javascript:history.back()">Datos básicos y comentarios recibidos</a>
							</li>
							<li class="active">
								<a class="texto-menu2" href="Datos-de-la-empresa-Ofertas-Laborales.html">Ofertas Laborales</a>
							</li>
						</ul>
					</div>
				</center>
			</section>
			<!-- Fin de la sección del título y barra de navegación -->

			<!-- Sección del subtítulo y cantidad de ofertas publicadas -->
			<div class="main--container--1">
				<div class="main-form--1">
					<div class="main--label--number--offers">
						<p>{{ $totalOfertas }} Ofertas</p>
					</div>
					<p class="subtitulo">Ofertas laborales publicadas</p>
				</div>
				<div>
					<hr class="line-title">
				</div>
			</div>
			<!-- Fin de la sección del subtítulo -->

			<!-- Sección para listar las ofertas -->
			<div class="main--container--2">
				@forelse ($paginador as $oferta)
					<div class="main--card">
						<div class="main--card--img">
							<img src="{{ asset('assets/img/normal_u729.svg') }}" alt="Imagen de la oferta">
						</div>
						<div class="main--card--body">
							<div class="main--card--body--Title">
								<p>{{ $oferta['titulo_empleo'] }}</p>
							</div>
							<div class="main--card--body--Subtitle">
								<p>{{ $oferta['carrera'] }}</p>
							</div>
							<div class="main--card--body--Text">
								<p>
									{{ $oferta['ubicacion'] ?? 'Ubicación no disponible' }} 
									∙ 
									{{ $oferta['fecha_publicacion'] ?? 'Fecha no disponible' }}
								</p>
							</div>
							<div class="main--card--body--Text">
								<p>{{ \Illuminate\Support\Str::limit($oferta['descripcion'], 150) }}</p>
							</div>
							<div class="main--card--body--Text">
								<p>{{ $oferta['nombre_empresa'] ?? 'Empresa' }}</p>
							</div>
						</div>
						<div class="main--card--icons">
							<div class="main--card-icon--1">
								<img src="{{ asset('assets/icons/Marcador_oferta.svg') }}" onclick="Marcador_selected(this)" alt="Marcador">
							</div>
							<div class="main--card-icon--2">
								<img src="{{ asset('assets/icons/Solicitantes_G.svg') }}" alt="Solicitantes">
								<div class="main-card-icon--Text">
									<p>{{ $oferta['solicitantes'] ?? 0 }} Solicitantes</p>
								</div>
							</div>
						</div>
					</div>
				@empty
					<p>No hay ofertas disponibles para esta empresa.</p>
				@endforelse

				<!-- Paginación -->
				<div class="main--pagination">
					{{ $paginador->links() }}
				</div>
			</div>
			<!-- Fin de la sección de ofertas -->
			<footer>
		<div class="footer--container--1">
			<img src="{{ asset('assets/img/u26.png') }}" alt="Logo">
		</div>
		<div class="footer--container--2">
			<div class="footer--Title">
				<div class="footer--title--1"><p>Sobre SUNEO</p></div>
				<div class="footer--title--1"><p>Privacidad</p></div>
				<div class="footer--title--1"><p>Empresas</p></div>
				<div class="footer--title--1"><p>Ayuda</p></div>
			</div>
			<div class="footer--Text">
				<div class="footer--title--2-1">
					<p>Coordinación de Vinculación de Alumnos y Egresados UTM</p>
				</div>
				<div class="footer--title--2-2">
					<p>Teléfonos: (953) 53 203 99 o (953) 53 202 14 ext. 113 o 116</p>
				</div>
			</div>
			<div class="footer--Text">
				<div class="footer--title--2-1">
					<p>De Lunes a Viernes de 8:00 a 13:00 y de 16:00 a 19:00 hrs</p>
				</div>
				<div class="footer--title--2-2">
					<p>Carretera a Acatlima Km. 2.5 Huajuapan de León, Oaxaca, México C.P 69000</p>
				</div>
			</div>
		</div>
	</footer>

		</section>
		<!-- Fin de la sección principal -->
	</main>

	<!-- Footer -->
		<!-- Fin del Footer -->

	<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		var img_ant = new Image();
		img_ant.src = "{{ asset('assets/icons/Marcador_oferta.svg') }}";

		function Marcador_selected(imagen) {
			if (img_ant.src === imagen.src) {
				imagen.src = "{{ asset('assets/icons/Marcador_NG.svg') }}";
			} else {
				imagen.src = img_ant.src;
			}
		}
	</script>
</body>
</html>
