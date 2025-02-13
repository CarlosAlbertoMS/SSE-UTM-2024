<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta charset="UTF-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    	<link rel="stylesheet" href="{{asset('css/Egresados/Eventos.css')}}" />
    	<link rel="stylesheet" href="{{asset('css/Egresados/TabuladorDeSalarios-Egresados.css')}}">
		<title>Eventos</title>
	</head>

	
{{-- @include('layouts.Egresadosheader') --}}
    <header>
        <div id="header--encabezado">
            <img id="header--img1" src="../assets/img/u43.png">
            <div id="header--titulo">
                Sistema de Seguimiento de Egresados y Bolsa de Trabajo
            </div>
            <img id="header--img2" src="../assets/img/utm_u31.png">
        </div>

        <div id="header__div--menu">
            <div class="lista">
                <ul>
                    <li><a href="{{route('Egresados_Ofertas')}}">Ofertas Laborales</a></li>
                    <li><a href="{{route('Informacion-empresas')}}">Directorio de Empresas</a></li>
                    <li style="background-color: #6d000e;"><a href="{{route('TabuladorDeSalarios-Egresados')}}">Tabulador de Salarios</a></li>
                    <li><a href="{{route('Eventos')}}">Eventos</a></li>
                    <li><a href="{{route('CasosDeExito-Egresados')}}">Historias de Éxito</a></li>
                    <li><a href="#">Tips y Consejos</a></li>
                </ul>
            </div>
            <div class="circulos">
                <a class="header__menu--icons"  href="#"><img src="../assets/icons/help_ofertas.svg" alt="" /></a>
                <a class="header__menu--icons"  href="#"><img src="../assets/icons/Ajustes_B.png" alt="" /></a>
                <a class="header__menu--icons"  href="#"><img src="../assets/img/u462.png" alt="" /></a>
            </div>
        </div>
    </header>
    
	<main>
		<section class="main--section">
			<div class="main--container--1">
				<div class="main-form--1">
					<input type="email" id="fname" name="fname" value="Buscar...">
					<button type="submit"><img src="../assets/icons/buscar_oferta.svg" alt="" /></button>
				</div>
				<div class="main-line"></div>
			</div>
			<div class="main--container--2">
				<div class="container--main--events">
					<div class="main--events-title"><p>Eventos Proximos</p></div>
					<div class="main--events-body">

						@foreach ($paginador as $evento)
							<div class="card--main--events">
								<div class="card--main--events-img">
									<img src="{{ $evento['imagen_url'] }}" alt="">
									<div class="card--main--events-img-place" >
										<p> {{ $evento['lugar'] }} </p>
									</div>
									<div class="card--main--events-img-info">
										<div class="card--main--events-img-info-title">
											<p> {{ $evento['nombre'] }} </p>
										</div>
										<div class="card--main--events-img-info-date">
											<p> {{ $evento['fecha'] }} - </p>
											<p> {{ $evento['fecha_fin'] }} </p>
										</div>
									</div>
								</div>
								<div class="card--main--events-text-1">
									<p> {{ $evento['descripcion'] }} </p>
								</div>
								<div class="card--main--events-text-2">
									<p>LEER MÁS</p>
									<img src="../assets/icons/Marcador_B.svg" onclick="Marcador_selected(this)" alt="">
								</div>
							</div>
							@php
                            $descripcion = $empresa['descripcion'] ?? 'N/A';
                            $descripcionCorta = strlen($descripcion) > 30 ? substr($descripcion, 0, 30) . '...' : $descripcion;
                            @endphp
						@endforeach
					</div>
				</div>

				<x-paginador :paginador="$paginador" />
			</div>
		</section>
	</main>
		
		{{-- <footer>
			<div class="footer--container--1">
				<img src="../assets/img/u26.png" alt="" />
			</div>
			<div class="footer--container--2">
				<div class="footer--Title">
					<div class="footer--title--1">
						<p>Sobre SUNEO</p>
					</div>
					<div class="footer--title--1">
						<p>Privacidad</p>
					</div>
					<div class="footer--title--1">
						<p>Empresas</p>
					</div>
					<div class="footer--title--1">
						<p>Ayuda</p>
					</div>
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
		</footer> --}}

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			var img_ant = new Image();
			img_ant.src = "../assets/icons/Marcador_B.svg";

			function Marcador_selected(imagen) {
				if(img_ant.src === imagen.src){
					imagen.src = "../assets/icons/Marcador_BG.svg";
				}else{
					imagen.src = img_ant.src;
				}
			}
		</script>
	</body>
</html>
