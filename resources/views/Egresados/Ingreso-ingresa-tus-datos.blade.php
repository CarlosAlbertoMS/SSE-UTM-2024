<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/Egresados/Ingreso-ingresa-tus-datos.css')}} " />
    <title>Ingresa tus datos</title>
  </head>

  <body>

    <header>
      <div class="header--div--img-1">
        <img src="../assets/img/u26.png" alt="" />
      </div>
      <div class="header--Title">
        <p>Sistema de Seguimiento de Egresados y Bolsa de Trabajo</p>
      </div>
      <div class="header--div--img-2">
        <img src="../assets/img/u43.png" alt="" />
      </div>
    </header>

    <main>
      <section class="main--section">
        <div class="main--container">
          <div class="main--header">
            <div class="main--header--flecha-1">
              <img src="../assets/flechas/FLECHA_INICIO_GRIS.png" alt="" />
              <div class="main--header--flecha--text-1"><p>Selecciona tu Universidad</p></div>
            </div>
            <div class="main--header--flecha-2">
              <img src="../assets/flechas/FLECHA_INTERMEDIO.png" alt="" />
              <div class="main--header--flecha--text-2"><p>Ingresa tus datos</p></div>
            </div>
            <div class="main--header--flecha-2">
              <img src="../assets/flechas/FLECHA_INTERMEDIO_GRIS.png" alt="" />
              <div class="main--header--flecha--text-3"><p>Mi primer empleo</p></div>
            </div>
            <div class="main--header--flecha-2">
              <img src="../assets/flechas/FLECHA_FINAL_GRIS.png" alt="" />
              <div class="main--header--flecha--text-4"><p>Encuesta de Satisfacción</p></div>
            </div>
          </div>
          <div class="main--container--form">
            <div class="main--form">
              <form action="">
                <div class="main--form--input">
                  <div class="main--form--label-1"><p>Universidad*</p></div>
                  <select name="Universidad">
                    <option selected value="0"> Selecciona tu universidad </option>
                    <option value="1">Universidad Tecnológica de la Mixteca</option>
                    <option value="2">Universidad del Mar</option>
                    <option value="3">Universidad del Istmo</option>
                    <option value="4">Universidad del Papaloapan</option>
                    <option value="5">Universidad de la Sierra Sur</option>
                    <option value="6">Universidad de la Sierra Juárez</option>
                    <option value="7">Universidad de la Cañada</option>
                    <option value="8">NovaUniversitas</option>
                    <option value="9">Universidad de la Costa</option>
                    <option value="10">Universidad de Chacaltongo</option>
                  </select>
                </div>
                <div class="main--form--input">
                  <div class="main--form--label-1"><p>Matricula*</p></div>
                  <input type="email" id="fname" name="fname" value="Matricula">
                </div>
                <div class="main--form--input">
                  <div class="main--form--label-1"><p>CURP</p></div>
                  <input type="email" id="fname" name="fname" value="CURP">
                </div>
                <div class="main--form--input">
                  <div class="main--form--label-1"><p>Correo electrónico*</p></div>
                  <input type="email" id="fname" name="fname" value="Correo electrónico">
                </div>
                <div class="main--form--input">
                  <div class="main--form--label-1"><p>Contraseña*</p></div>
                  <input type="email" id="fname" name="fname" value="Contraseña">
                </div>
                <div class="main--form--label-2"><p>*Campos obligatorios</p></div>
                <div class="main--form--container--button">
                  <!---Boton de regresar-->
                  <button type="submit">Regresar</button>
                  <!-- Boton de siguiente-->
                  <button type="submit">Siguiente</button>
                </div>
              </form>
            </div>
          </div>
          <!---Mensaje en caso de olvidar matricula-->
          <div class="main--form--label-3">
            <p>Si no recuerdas tu matrícula comunícate a las Coordinación de 
            Vinculación de Alumnos y Egresados de tu universidad</p>
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
						<p>Aviso de Privacidad</p>
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
        <div class="footer--Text">
					<div class="footer--title--2-1">
						<p>SUNEO, Oaxaca, México. 2020</p>
					</div>
				</div>
      </div>
      <div class="footer--container--3">
        <img src="../assets/img/u14.png" alt="" />
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
