<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" media="(min-width: 800px)" href="{{asset('css/Egresados/informacion-de-empresas.css')}}" />
  <title>Document</title>
</head>

<body>
    <header>
        <figure>
            <img src="../assets/img/u43.png" class="header--img1" alt="" />
        </figure>
        <div class="header--title">
          <p>Sistema de Seguimiento de Egresados y Bolsa de Trabajo</p>
        </div>
        <figure>
          <img src="../assets/img/utm_u31.png" class="header--img2" alt="" />
        </figure>
    </header>
    <nav class="menu">
      <div class="menu--button1">
      <a href="{{route('Egresados_Ofertas')}}"><p>Ofertas Laborales</p></a>
      </div>
      <div class="menu--button2">
      <a href="{{route('Informacion-empresas')}}"><p>Directorio de Empresas</p></a>
      </div>
      <div class="menu--button3">
      <a href="{{route('TabuladorDeSalarios-Egresados')}}"><p>Tabulador de Salarios</p></a>
      </div>
      <div class="menu--button4">
      <a href="{{route('Eventos')}}"><p>Eventos</p></a>
      </div>
      <div class="menu--button5">
      <a href="{{route('CasosDeExito-Egresados')}}"><p>Historias de Éxito</p></a>
      </div>
      <div class="menu--button5">
        <p>Tips y Consejos</p>
      </div>
      <div class="menu--icons">
        <div class="menu--icon1">
          <img src="../assets/icons/Información_B.png" class="icon-information" alt="" />
        </div>
        <div class="menu--icon2">
          <img src="../assets/icons/Ajustes_B.png" class="icon-settings" alt="" />
        </div>
        <div class="menu--icon3">
          <img src="../assets/img/u462.png" class="icon-profile" alt="" />
        </div>
      </div>
    </nav>
    <main>
      <section class="main--section">
        <div class="main--title">
          <p>Datos de la empresa</p>
        </div>
        <nav class="main--menu">
          <div class="main--button1">
            <p>
              Datos básicos y comentarios recibidos
            </p>
          </div>
          <div class="main--button2">
          <a href="{{route('Informacion-empresas-ofertas-laborales')}}"><p>Ofertas Laborales</p></a>
          </div>
        </nav>
        <div class="main--content">
          <div class="content1">
            <div class="content1--img">
              <img src="../assets/img/cemex.png" class="img--enterprise" alt="" />
            </div>
            <div class="content1--score">
              <div class="score-calification">
                <p>Calificación:</p>
                <div class="score1">
                    <div class="stars-outer">
                    <div class="stars-inner"></div>
                    </div>
                </div>
              </div>
              <div class="content1--coments-title">
                <p>Comentarios recibidos</p>
                 <hr class="line-title">
              </div>
              <div class="content1--coments">
                <p>“Es una buena empresa”</p>
                <p>“Gran ambiente laboral y ubicación”</p>
                <p>“Excelente empresa”</p>
              </div>
              <div class="content1--more_coments">
                <a href="#modal"> <span class="content1--more_coments-text"> Ver mas comentarios</span></a>
              </div>
            </div>
          </div>
          <div class="content2">
            <div class="content2--information">
              <diV class="content2--information-text1">
                <p>Nombre de la empresa:</p>
                <p>Ubicación:</p>
              </diV>
              <diV class="content2--information-text2">
                <p>CEMEX</p>
                <p>Queretaro, Queretaro</p>
              </diV>
              <div class="content2--information-title">
                <p>Descripción de la empresa</p>
                <hr class="line-title2">
              </div>
              <diV class="content2--information-text3">
                <p>Contacto directo:</p>
                <p>Área:</p>
                <p>Teléfono(s):</p>
                <p>Correo electrónico:</p>
              </diV>
              <diV class="content2--information-text4">
                <p>Claudia Guadalupe Bustos Guerrero</p>
                <p>Staffing & Adquisición de Talento-Recursos Humanos</p>
                <p>52 442 3091600 / Ext. 5007</p>
                <p>claudia.bustos@cemex.com</p>
              </diV>
            </div>
            <div class="content2--description">
              <div class="content2--description-title">
                <p>Descripción de la empresa</p>
                <hr class="line-title2">
              </div>
              <div class="content2--description-text">
                <p>
                  Nuestra compañía fue fundada en Monterrey, México, en 1906. Empezamos como una empresa
                  local y, gracias a nuestra visión, evolucionamos hasta convertirnos en una de las compañías
                  globales líderes en nuestra industria. Ahora contamos con el apoyo de cerca de 43 mil 
                  colaboradores en todo el mundo. Mantenemos relaciones comerciales con más de cien países y
                  una red de operaciones con más de cincuenta naciones en la que se produce, distribuye y 
                  comercializa cemento, concreto premezclado, agregados y productos relacionados.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <div class="footer--div1-img">
      <img src="../assets/img/u26.png" class="footer-img1"  alt="">
      </div>
      <div class="footer--titleT1">
        <div class="footer--title1">
          <p>Sobre SUNEO</p>
        </div>
        <div class="footer--title1">
          <p>Privacidad</p>
        </div>
        <div class="footer--title1">
          <p>Empresas</p>
        </div>
        <div class="footer--title1">
          <p>Ayuda</p>
        </div>
      </div>
      <div class="footer--text">
        <div class="footer--textT1">
        <div class="footer--text1">
          <p>Coordinación de Vinculación de Alumnos y Egresados UTM</p>
        </div>
        <div class="footer--text1">
          <p>De Lunes a Viernes de 8:00 a 13:00 y de 16:00 a 19:00 hrs</p>
        </div>
      </div>
      <div class="footer--textT2">
        <div class="footer--text1">
          <p>
            Teléfonos: (953) 53 203 99 o (953) 53 202 14 ext. 113 o 116
          </p>
        </div>
        <div class="footer--text1">
          <p>
            Carretera a Acatlima Km. 2.5 Huajuapan de León, Oaxaca, México C.P
            69000
          </p>
        </div>
      </div>
      </div>
    </footer>
    
    <aside id="modal" class="modal--container">
      <div class="content-modal">
        <div class="modal--title">
          <p>Comentarios recibidos</p>
        </div>
        <div class="container-text1">
          <table>
            <tr>
              <td>“Una muy buena empresa, con gran ambiente laboral.”</td>
            </tr>
            <tr>
              <td>“Es una buena empresa.”</td>
            </tr>
            <tr>
              <td>“Empresa muy recomendable, con buenos sueldos y horarios flexibles además de un gran ambiente laboral.”</td>
            </tr>
            <tr>
              <td>“Empresa muy recomendable, con buenos sueldos y horarios flexibles además de un gran ambiente laboral.”</td>
            </tr>
            <tr>
              <td>“Empresa muy recomendable, con buenos sueldos y horarios flexibles además de un gran ambiente laboral.”</td>
            </tr>
            <tr>
              <td>“Una muy buena empresa, con gran ambiente laboral.”</td>
            </tr>
            <tr>
              <td>“Una muy buena empresa, con gran ambiente laboral.”</td>
            </tr>
            <tr>
              <td>“Empresa muy recomendable, con buenos sueldos y horarios flexibles además de un gran ambiente laboral.”</td>
            </tr>
            <tr>
              <td>“Es una buena empresa.”</td>
            </tr>
            <tr>
              <td>“Empresa muy recomendable, con buenos sueldos y horarios flexibles además de un gran ambiente laboral.”</td>
            </tr>
          </table>
        </div>
        <div class="modal--container-buttons">
         <a href="#" class="modal-button1"> <span class="modal-button1-text">Cerrar</span></a>  
        </div>
      </div>
    </aside>
    
    <script>
     const ratings = {
      score1 : 3.5,
      
      };
      
      // total number of stars
      const starTotal = 5;
      
      for(const rating in ratings) {  
      const starPercentage = (ratings[rating] / starTotal) * 100;
      const starPercentageRounded = `${(Math.round(starPercentage / 10) * 10)}%`;
      document.querySelector(`.${rating} .stars-inner`).style.width = starPercentageRounded; 
      }
    </script>
</body>
</html>
