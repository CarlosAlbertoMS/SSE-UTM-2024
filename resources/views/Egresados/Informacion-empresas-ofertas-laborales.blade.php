<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta charset="UTF-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    	<link rel="stylesheet" href="{{asset('css/Egresados/informacion-empresas-ofertas-laborales.css')}}" />
		<title>Ofertas Laborales</title>
	</head>

	<body>

		<header>
  <!--Inicio del titulo-->
			<div class="header--container--1">
				<div class="header--div0"><img src="../assets/img/u43.png" alt="" /></div>
				<div class="header--title"><p>Sistema de Seguimiento de Egresados y Bolsa de Trabajo</p></div>
				<div class="header--div1"><img src="../assets/img/utm_u31.png" alt="" /></div>
			</div>
<!--Fin titulo -->
<!--Inicio del menu de navegacion de cada vista-->
	<div>
	<ul class="menu">
  <li ><a class="texto-menu" href="{{route('Egresados_Ofertas')}}">Ofertas Laborales</a></li>
  <li class="active"><a class="texto-menu" href="{{route('Informacion-empresas')}}" >Directorio de Empresas</a></li>
  <li><a class="texto-menu" href="{{route('TabuladorDeSalarios-Egresados')}}">Tabulador de salarios </a></li>
  <li><a class="texto-menu" href="{{route('Eventos')}}">Eventos</a></li>
  <li><a class="texto-menu" href="{{route('CasosDeExito-Egresados')}}">Historias de exito</a></li>
  <li><a class="texto-menu" href="#">Tips y consejos</a></li>
  <li class="icon"><img src="../assets/img/u462.PNG" class="icon--profile"></li>
  <li class=" icon">  <img src="../assets/icons/u11.svg" class="icon--question"></li>
  <li class="icon"><img src="../assets/icons/u18.svg" class="icon--settings"></li>
	</ul>

    </div>
      <!--fin del menu de navegacion-->
		</header>
		<main>
<!--Inicio de la segunda seccion-->
	<section class="main--section">
<!--Inicio de la seccion del titulo y de la segunda barra de navegacion-->
		<section id="contenido">
			<!--Inicio del titulo-->
	         <div class="titulo">
	            
			 Datos de la empresa

	        </div>
			<!--Fin del titulo-->
        <hr>
		<center>
	<!--Inicio de la segunda barra de navegación-->
        <div>
        <ul class="menu2">
        <li ><a class="texto-menu2" href="{{route('Informacion-empresas')}}">Datos basicos y comentarios recibidos</a></li>
        <li class="active"><a class="texto-menu2" href="Datos-de-la-empresa-Ofertas-Laborales.html">Ofertas Laborales</a></li>
        </ul>
        </div>
        <!--Fin de la segunda barra de navegación-->
        </center>
        </section>
        <!--Fin de la seccion del titulo y de la segunda barra de navegación-->
<!--Inicio de la seccion del subtitulo y de cantidad de ofertas publicadas-->
				<div class="main--container--1">
					<div class="main-form--1">
						<div class="main--label--number--offers"><p>5 Ofertas</p></div>
						<p class="subtitulo">Ofertas laborales publicadas</p>
				</div>
				<div>
						<hr class="line-title">
						</div>
					</div>
			<!--Fin de la seccion del subtitulo y ofertas publicadas-->
<!--Inicio de la tercera seccion del contenido de las ofertas con su informacion e imagen-->
				<div class="main--container--2">

					<div class="main--card">
						<div class="main--card--img">
							<img src="../assets/img/normal_u729.svg" alt="">
						</div>
						<div class="main--card--body">
							<div class="main--card--body--Title"><p>Ingeniero en Sistema</p></div>
							<div class="main--card--body--Subtitle"><p>Ingeniería en Computación</p></div>
							<div class="main--card--body--Text"><p>Estado de México ∙ hace 3 meses</p></div>
							<div class="main--card--body--Text">
								<p>
									Escolaridad: Título y Cédula Profesional en Ingeniería en Sistemas
									Computacionales • Experiencia: mínima 2 año en puesto similar Manejo de
									personal • Manejo de conflictos • Trabajo bajo presión y por resultados
									• Proactivo y con iniciativa de innovar • Total…
								</p>
							</div>
							<div class="main--card--body--Text"><p>AOLIK</p></div>
						</div>
						<div class="main--card--icons">
							<div class="main--card-icon--1">
								<img src="../assets/icons/Marcador_oferta.svg" onclick="Marcador_selected(this)" alt="">
							</div>
							<div class="main--card-icon--2">
								<img src="../assets/icons/Solicitantes_G.svg" alt="">
								<div class="main-card-icon--Text"><p>8 Solicitantes</p></div>
							</div>
						</div>
					</div>
					<div class="main--card">
						<div class="main--card--img">
							<img src="../assets/img/normal_u392.svg" alt="">
						</div>
						<div class="main--card--body">
							<div class="main--card--body--Title"><p>Ingeniero en Sistema</p></div>
							<div class="main--card--body--Subtitle"><p>Ingeniería en Computación</p></div>
							<div class="main--card--body--Text"><p>Estado de México ∙ hace 3 meses</p></div>
							<div class="main--card--body--Text">
								<p>
									Escolaridad: Título y Cédula Profesional en Ingeniería en Sistemas
									Computacionales • Experiencia: mínima 2 año en puesto similar Manejo de
									personal • Manejo de conflictos • Trabajo bajo presión y por resultados
									• Proactivo y con iniciativa de innovar • Total…
								</p>
							</div>
							<div class="main--card--body--Text"><p>AOLIK</p></div>
						</div>
						<div class="main--card--icons">
							<div class="main--card-icon--1">
								<img src="../assets/icons/Marcador_oferta.svg" onclick="Marcador_selected(this)" alt="">
							</div>
							<div class="main--card-icon--2">
								<img src="../assets/icons/Solicitantes_G.svg" alt="">
								<div class="main-card-icon--Text"><p>8 Solicitantes</p></div>
							</div>
						</div>
					</div>
					<div class="main--card">
						<div class="main--card--img">
							<img src="../assets/img/normal_u729.svg" alt="">
						</div>
						<div class="main--card--body">
							<div class="main--card--body--Title"><p>Ingeniero en Sistema</p></div>
							<div class="main--card--body--Subtitle"><p>Ingeniería en Computación</p></div>
							<div class="main--card--body--Text"><p>Estado de México ∙ hace 3 meses</p></div>
							<div class="main--card--body--Text">
								<p>
									Escolaridad: Título y Cédula Profesional en Ingeniería en Sistemas
									Computacionales • Experiencia: mínima 2 año en puesto similar Manejo de
									personal • Manejo de conflictos • Trabajo bajo presión y por resultados
									• Proactivo y con iniciativa de innovar • Total…
								</p>
							</div>
							<div class="main--card--body--Text"><p>AOLIK</p></div>
						</div>
						<div class="main--card--icons">
							<div class="main--card-icon--1">
								<img src="../assets/icons/Marcador_oferta.svg" onclick="Marcador_selected(this)" alt="">
							</div>
							<div class="main--card-icon--2">
								<img src="../assets/icons/Solicitantes_G.svg" alt="">
								<div class="main-card-icon--Text"><p>8 Solicitantes</p></div>
							</div>
						</div>
					</div>
					<div class="main--card">
						<div class="main--card--img">
							<img src="../assets/img/normal_u392.svg" alt="">
						</div>
						<div class="main--card--body">
							<div class="main--card--body--Title"><p>Ingeniero en Sistema</p></div>
							<div class="main--card--body--Subtitle"><p>Ingeniería en Computación</p></div>
							<div class="main--card--body--Text"><p>Estado de México ∙ hace 3 meses</p></div>
							<div class="main--card--body--Text">
								<p>
									Escolaridad: Título y Cédula Profesional en Ingeniería en Sistemas
									Computacionales • Experiencia: mínima 2 año en puesto similar Manejo de
									personal • Manejo de conflictos • Trabajo bajo presión y por resultados
									• Proactivo y con iniciativa de innovar • Total…
								</p>
							</div>
							<div class="main--card--body--Text"><p>AOLIK</p></div>
						</div>
						<div class="main--card--icons">
							<div class="main--card-icon--1">
								<img src="../assets/icons/Marcador_oferta.svg" onclick="Marcador_selected(this)" alt="">
							</div>
							<div class="main--card-icon--2">
								<img src="../assets/icons/Solicitantes_G.svg" alt="">
								<div class="main-card-icon--Text"><p>8 Solicitantes</p></div>
							</div>
						</div>
					</div>
					<div class="main--card">
						<div class="main--card--img">
							<img src="../assets/img/normal_u729.svg" alt="">
						</div>
						<div class="main--card--body">
							<div class="main--card--body--Title"><p>Ingeniero en Sistema</p></div>
							<div class="main--card--body--Subtitle"><p>Ingeniería en Computación</p></div>
							<div class="main--card--body--Text"><p>Estado de México ∙ hace 3 meses</p></div>
							<div class="main--card--body--Text">
								<p>
									Escolaridad: Título y Cédula Profesional en Ingeniería en Sistemas
									Computacionales • Experiencia: mínima 2 año en puesto similar Manejo de
									personal • Manejo de conflictos • Trabajo bajo presión y por resultados
									• Proactivo y con iniciativa de innovar • Total…
								</p>
							</div>
							<div class="main--card--body--Text"><p>AOLIK</p></div>
						</div>
						<div class="main--card--icons">
							<div class="main--card-icon--1">
								<img src="../assets/icons/Marcador_oferta.svg" onclick="Marcador_selected(this)" alt="">
							</div>
							<div class="main--card-icon--2">
								<img src="../assets/icons/Solicitantes_G.svg" alt="">
								<div class="main-card-icon--Text"><p>8 Solicitantes</p></div>
							</div>
						</div>
					</div>
	<!--Inicio de la paginacion de la pagina-->
					<div class="main--pagination">
						<div class="main--pagination--opc-1">
							<a href="">Anterior</a>
						</div>
						<div class="main--pagination--opc-2">
							<a href="">1</a>
						</div>
						<div class="main--pagination--opc-2">
							<a class="active" href="">2</a>
						</div>
						<div class="main--pagination--opc-2">
							<a href="">3</a>
						</div>
						<div class="main--pagination--opc-1">
							<a href="">Siguiente</a>
						</div>
					</div>
	<!--fin de la paginación-->
				</div>
<!--Fin de la tercera seccion del contenido de las ofertas con su informacion e imagen-->
			</section>
		</main>
<!--inicio del footer que es la tercera seccion-->
		<footer>
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
		</footer>
<!-- Fin del footeer-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			var img_ant = new Image();
			img_ant.src = "../assets/icons/Marcador_oferta.svg";

			function Marcador_selected(imagen) {
				if(img_ant.src === imagen.src){
					imagen.src = "../assets/icons/Marcador_NG.svg";
				}else{
					imagen.src = img_ant.src;
				}
			}
		</script>
	</body>
</html>
