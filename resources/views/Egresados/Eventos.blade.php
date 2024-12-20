<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta charset="UTF-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    	<link rel="stylesheet" href="{{asset('css/Egresados/Eventos.css')}}" />
		<title>Eventos</title>
	</head>

	
@include('layouts.Egresadosheader')
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
							<div class="card--main--events-1">
								<div class="card--main--events-img" style="background-image: linear-gradient( 180deg, rgba(255, 255, 255, 0) 0%, #a30014 90%)">
									<img src="../assets/img/normal_u1052.svg" alt="">
									<div class="card--main--events-img-place" style="background-color: #a30014;"><p>UTM, Huajuapan</p></div>
									<div class="card--main--events-img-title"><p>Semana de la Cultura</p></div>
									<div class="card--main--events-img-date"><p>27 Septiembre - 14 Hrs</p></div>
								</div>
								<div class="card--main--events-text-1">
									<p>
										Breve descripción del evento y de que 
										va a tratar y asi shalalalalalala jeje, a lo
										mucho de unos cuatro o cinco 
										renglones de textro.
									</p>
								</div>
								<div class="card--main--events-text-2">
									<p>LEER MÁS</p>
									<img src="../assets/icons/Marcador_B.svg" onclick="Marcador_selected(this)" alt="">
								</div>
							</div>
							<div class="card--main--events-2">
								<div class="card--main--events-img" style="background-image: linear-gradient( 180deg, rgba(255, 255, 255, 0) 0%, #a30014 90%)">
									<img src="../assets/img/normal_u1052.svg" alt="">
									<div class="card--main--events-img-place" style="background-color: #a30014"><p>UTM, Huajuapan</p></div>
									<div class="card--main--events-img-title"><p>Semana de la Cultura</p></div>
									<div class="card--main--events-img-date"><p>27 Septiembre - 14 Hrs</p></div>
								</div>
								<div class="card--main--events-text-1">
									<p>
										Breve descripción del evento y de que 
										va a tratar y asi shalalalalalala jeje, a lo
										mucho de unos cuatro o cinco 
										renglones de textro.
									</p>
								</div>
								<div class="card--main--events-text-2">
									<p>LEER MÁS</p>
									<img src="../assets/icons/Marcador_B.svg" onclick="Marcador_selected(this)" alt="">
								</div>
							</div>
							<div class="card--main--events-2">
								<div class="card--main--events-img" style="background-image: linear-gradient( 180deg, rgba(255, 255, 255, 0) 0%, #d7d7d7 90%)">
									<img src="../assets/img/normal_u1052.svg" alt="">
									<div class="card--main--events-img-place" style="background-color: #d7d7d7"><p>UTM, Huajuapan</p></div>
									<div class="card--main--events-img-title"><p>Semana de la Cultura</p></div>
									<div class="card--main--events-img-date"><p>27 Septiembre - 14 Hrs</p></div>
								</div>
								<div class="card--main--events-text-1">
									<p>
										Breve descripción del evento y de que 
										va a tratar y asi shalalalalalala jeje, a lo
										mucho de unos cuatro o cinco 
										renglones de textro.
									</p>
								</div>
								<div class="card--main--events-text-2">
									<p>LEER MÁS</p>
									<img src="../assets/icons/Marcador_B.svg" onclick="Marcador_selected(this)" alt="">
								</div>
							</div>
							<div class="card--main--events-2">
								<div class="card--main--events-img" style="background-image: linear-gradient( 180deg, rgba(255, 255, 255, 0) 0%, #632a29 90%)">
									<img src="../assets/img/normal_u1052.svg" alt="">
									<div class="card--main--events-img-place" style="background-color: #632a29"><p>UTM, Huajuapan</p></div>
									<div class="card--main--events-img-title"><p>Semana de la Cultura</p></div>
									<div class="card--main--events-img-date"><p>27 Septiembre - 14 Hrs</p></div>
								</div>
								<div class="card--main--events-text-1">
									<p>
										Breve descripción del evento y de que 
										va a tratar y asi shalalalalalala jeje, a lo
										mucho de unos cuatro o cinco 
										renglones de textro.
									</p>
								</div>
								<div class="card--main--events-text-2">
									<p>LEER MÁS</p>
									<img src="../assets/icons/Marcador_B.svg" onclick="Marcador_selected(this)" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="container--others--events">
						<div class="others--events-title"><p>Otros eventos...</p></div>
						<div class="others--events-body">
							<div class="others--events-container-cards"> 
								<div class="others--events-card">
									<div class="others--events-card-img">
										<img src="../assets/img/normal_u1216.svg" alt="">
									</div>
									<div class="others--events-card-text">
										<div class="others--events-card-title">
											<p>Conferencia Diseño</p>
											<img src="../assets/icons/Marcador_B.svg" onclick="Marcador_selected(this)" alt="">
										</div>
										<div class="others--events-card-subtitle"><p>UTM, Huajuapan de León</p></div>
										<div class="others--events-card-date"><p>26 Septiembre - 14 Hrs</p></div>
										<div class="others--events-card-body">
											<p>
												Breve descripción del evento y de que va a tratar a
												lo mucho de unos dos renglones porque sino,
												seria demasiado texto .Breve descripción del 
												evento y de que va a tratar a lo mucho de unos
												dos renglones porque sino, seria demasiado texto .
											</p>
										</div>
										<div class="others--events-card-read-more"><p>LEER MÁS</p></div>
									</div>
								</div>
								<div class="others--events-card">
									<div class="others--events-card-img">
										<img src="../assets/img/normal_u1216.svg" alt="">
									</div>
									<div class="others--events-card-text">
										<div class="others--events-card-title">
											<p>Conferencia Diseño</p>
											<img src="../assets/icons/Marcador_B.svg" onclick="Marcador_selected(this)" alt="">
										</div>
										<div class="others--events-card-subtitle"><p>UTM, Huajuapan de León</p></div>
										<div class="others--events-card-date"><p>26 Septiembre - 14 Hrs</p></div>
										<div class="others--events-card-body">
											<p>
												Breve descripción del evento y de que va a tratar a
												lo mucho de unos dos renglones porque sino,
												seria demasiado texto .Breve descripción del 
												evento y de que va a tratar a lo mucho de unos
												dos renglones porque sino, seria demasiado texto .
											</p>
										</div>
										<div class="others--events-card-read-more"><p>LEER MÁS</p></div>
									</div>
								</div>
							</div>
							<div class="others--events-container-cards"> 
								<div class="others--events-card">
									<div class="others--events-card-img">
										<img src="../assets/img/normal_u1216.svg" alt="">
									</div>
									<div class="others--events-card-text">
										<div class="others--events-card-title">
											<p>Conferencia Diseño</p>
											<img src="../assets/icons/Marcador_B.svg" onclick="Marcador_selected(this)" alt="">
										</div>
										<div class="others--events-card-subtitle"><p>UTM, Huajuapan de León</p></div>
										<div class="others--events-card-date"><p>26 Septiembre - 14 Hrs</p></div>
										<div class="others--events-card-body">
											<p>
												Breve descripción del evento y de que va a tratar a
												lo mucho de unos dos renglones porque sino,
												seria demasiado texto .Breve descripción del 
												evento y de que va a tratar a lo mucho de unos
												dos renglones porque sino, seria demasiado texto .
											</p>
										</div>
										<div class="others--events-card-read-more"><p>LEER MÁS</p></div>
									</div>
								</div>
								<div class="others--events-card">
									<div class="others--events-card-img">
										<img src="../assets/img/normal_u1216.svg" alt="">
									</div>
									<div class="others--events-card-text">
										<div class="others--events-card-title">
											<p>Conferencia Diseño</p>
											<img src="../assets/icons/Marcador_B.svg" onclick="Marcador_selected(this)" alt="">
										</div>
										<div class="others--events-card-subtitle"><p>UTM, Huajuapan de León</p></div>
										<div class="others--events-card-date"><p>26 Septiembre - 14 Hrs</p></div>
										<div class="others--events-card-body">
											<p>
												Breve descripción del evento y de que va a tratar a
												lo mucho de unos dos renglones porque sino,
												seria demasiado texto .Breve descripción del 
												evento y de que va a tratar a lo mucho de unos
												dos renglones porque sino, seria demasiado texto .
											</p>
										</div>
										<div class="others--events-card-read-more"><p>LEER MÁS</p></div>
									</div>
								</div>
							</div>
							<div class="others--events-container-cards"> 
								<div class="others--events-card">
									<div class="others--events-card-img">
										<img src="../assets/img/normal_u1216.svg" alt="">
									</div>
									<div class="others--events-card-text">
										<div class="others--events-card-title">
											<p>Conferencia Diseño</p>
											<img src="../assets/icons/Marcador_B.svg" onclick="Marcador_selected(this)" alt="">
										</div>
										<div class="others--events-card-subtitle"><p>UTM, Huajuapan de León</p></div>
										<div class="others--events-card-date"><p>26 Septiembre - 14 Hrs</p></div>
										<div class="others--events-card-body">
											<p>
												Breve descripción del evento y de que va a tratar a
												lo mucho de unos dos renglones porque sino,
												seria demasiado texto .Breve descripción del 
												evento y de que va a tratar a lo mucho de unos
												dos renglones porque sino, seria demasiado texto .
											</p>
										</div>
										<div class="others--events-card-read-more"><p>LEER MÁS</p></div>
									</div>
								</div>
								<div class="others--events-card">
									<div class="others--events-card-img">
										<img src="../assets/img/normal_u1216.svg" alt="">
									</div>
									<div class="others--events-card-text">
										<div class="others--events-card-title">
											<p>Conferencia Diseño</p>
											<img src="../assets/icons/Marcador_B.svg" onclick="Marcador_selected(this)" alt="">
										</div>
										<div class="others--events-card-subtitle"><p>UTM, Huajuapan de León</p></div>
										<div class="others--events-card-date"><p>26 Septiembre - 14 Hrs</p></div>
										<div class="others--events-card-body">
											<p>
												Breve descripción del evento y de que va a tratar a
												lo mucho de unos dos renglones porque sino,
												seria demasiado texto .Breve descripción del 
												evento y de que va a tratar a lo mucho de unos
												dos renglones porque sino, seria demasiado texto .
											</p>
										</div>
										<div class="others--events-card-read-more"><p>LEER MÁS</p></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="main--pagination">
						<div class="main--pagination--opc-1">
							<a href="">Anterior</a>
						</div>
						<div class="main--pagination--opc-2">
							<a href="">1</a>
						</div>
						<div class="main--pagination--opc-2">
							<a href="">2</a>
						</div>
						<div class="main--pagination--opc-2">
							<a href="">3</a>
						</div>
						<div class="main--pagination--opc-1">
							<a href="">Siguiente</a>
						</div>
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
