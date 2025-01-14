<!-- > Ofertas_laborales.blade.php    <!-->
<!doctype html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta charset="UTF-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    	<link rel="stylesheet" href="{{asset('css/Egresados/Ofertas-laborales.css')}}" />
		<title>Ofertas Laborales</title>
	</head>

@include('layouts.Egresadosheader')
		<main>
			<section class="main--section">
				<div class="main--container--1">
					<div class="main-form--1">
						<input type="email" id="fname" name="fname" value="Buscar...">
						<button type="submit"><img src="../assets/icons/buscar_oferta.svg" alt="" /></button>
					</div>
					<div class="main-form--2">
						<div class="main--label--number--offers"><p>133 Ofertas</p></div>
						<div class="main--order--info">
							<p>Ordenar por</p>
							<select name="Ordenar">
								<option selected value="0"> Relevancia </option>
								<option value="1"> </option>
							</select>
						</div>
					</div>
				</div>
				<div class="main--container--2">
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
					
					<div class="main--pagination">
						
					</div>
				</div>
			</section>
		</main>
		
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
