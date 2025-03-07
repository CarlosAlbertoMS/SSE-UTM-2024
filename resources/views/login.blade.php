<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inicio</title>
  <!-- <link rel="stylesheet" href="propuesta-suneo.css" /> -->
  <link rel="stylesheet" href="{{ asset('css/Empresa/propuesta-suneo.css') }}"> <!-- Estilos específicos para la página -->
</head>

<body>
  <header>
    <div class="header">
      <div class="header--img">
        <img src="../assets/img/utm_u31.png" class="header--img-elements" alt="" />
        <img src="../assets/img/umar_u33.png" class="header--img-elements" alt="" />
        <img src="../assets/img/unistmo_u37.png" class="header--img-elements" alt="" />
        <img src="../assets/img/unpa_u38.png" class="header--img-elements" alt="" />
        <img src="../assets/img/unsis_u40.png" class="header--img-elements" alt="" />
        <img src="../assets/img/unsij_u39.png" class="header--img-elements" alt="" />
        <img src="../assets/img/unca_u34.png" class="header--img-elements" alt="" />
        <img src="../assets/img/nova_u32.png" class="header--img-elements" alt="" />
        <img src="../assets/img/uncos_u35.png" class="header--img-elements" alt="" />
        <img src="../assets/img/unicha_u36.png" class="header--img-elements" alt="" />
      </div>
    </div>

  </header>
  <main>
    <section>
      <div class="main--title">
        <p>Sistema de Seguimiento de Egresados y Bolsa de Trabajo - Empresas</p>
      </div>
    </section>
    <div class="main--section">
      <div class="main--container">
        <div class="main--img-container">
          <img src="../assets/img/imagen_main.jpg" class="main--img" alt="" />
        </div>
        <div class="main--form">
          <div class="main--form-img">
            <img src="../assets/img/u43.png" class="form--img" alt="" />
          </div>

          <!-- TODO: Darle funcionamiento a este formulario para poder iniciar sesión. -->
          <form class="main--form-form" action="#">
            <div class="form--select">
              <img src="../assets/icons/u27.svg" width="16" height="15" alt="" />
              <select name="Universidad">
                <option selected value="0"> Selecciona tu universidad </option>
                <option value="1">Universidad Tecnológica de la Mixteca</option>
                <option value="2">UNSIS</option>
              </select>
            </div>
            <div class="form--input-1">
              <img src="../assets/icons/Arroba.svg" width="16" height="15" alt="" />
              <input type="email" id="mail" name="mail" class="opc--text" placeholder="Correo electrónico">
            </div>
            <div class="form--input-2">
              <img src="../assets/icons/Contraseña.svg" width="16" height="15" alt="" />
              <input type="password" id="pass" name="pass" class="opc--text" placeholder="Contraseña">
            </div>
            <div class="form--button-text">
              <a href="#" class="text--forget">¿Olvido su contraseña?</a>
              <button type="submit">Entrar</button>
              <a href="{{ route('empresa_ingreso') }}" class="register--text">Registrate</a>
            </div>
          </form>

        </div>
        </section>
  </main>
  <button id="display" class="opc--find">
    <p class="tex">Aquí encontrarás</p>
    <img src="../assets/icons/flecha-apunta-hacia-abajo.png" class="img--arrow" alt="" />
  </button>
  <div id="hide-me" class="opc--find-hide">
    <div class="opc--find-principal">
      <ul>
        Ofertas laborales
      </ul>
      <ul>
        Directorio de empresas
      </ul>
      <ul>
        Ranking de las mejores empresas
      </ul>
    </div>
  </div>

  <footer>
    <div class="footer--div1-img">
      <img src="../assets/img/u26.png" class="footer-img1" alt="">
    </div>
    <div class="footer--titleT1">
      <a href="#">Sobre SUNEO</a>
      <a href="#">Aviso de Privacidad</a>
      <a href="#">Empresas</a>
      <a href="#">Ayuda</a>
    </div>
    <div class="footer--text">
      <div class="footer--textT1">
        <p>Coordinación de Vinculación de Alumnos y Egresados UTM</p>
        <p>De Lunes a Viernes de 8:00 a 13:00 y de 16:00 a 19:00 hrs</p>
        <p>SUNEO, Oaxaca, México. 2020</p>
      </div>
      <div class="footer--textT2">
        <p>Teléfonos: (953) 53 203 99 o (953) 53 202 14 ext. 113 o 116</p>
        <p>Carretera a Acatlima Km. 2.5 Huajuapan de León, Oaxaca, México C.P
          69000</p>
      </div>
    </div>
    <div class="footer--div2-img">
      <img src="../assets/img/u14.png" class="footer-img2" alt="" />
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>

    if ($('#hide-me').is(":visible")) {
      $('#hide-me').css('display', 'none', 'x');
    }
    $('#display').click(function (e) {
      $('#hide-me').css('visibility', 'none');

      if ($('#hide-me').is(":visible")) {
        $('#hide-me').css('display', 'none');
      } else {
        $('#hide-me').css('display', 'block');
      }
    });
  </script>
</body>

</html>