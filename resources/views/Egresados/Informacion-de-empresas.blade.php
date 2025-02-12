<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" media="(min-width: 800px)" href="{{asset('css/Egresados/informacion-de-empresas.css')}}" />
  <title>Document</title>
</head>

@include('layouts.Egresadosheader')
    <main>
      <section class="main--section>
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
              <p>{{ $empresa['nombre'] }}</p>
              <p>
    {{ $empresa['calle'] ?? 'N/A' }} 
    {{ $empresa['numero'] ?? '' }}, 
    {{ $empresa['colonia'] ?? '' }}, 
    {{ $empresa['ciudad'] ?? '' }}, 
    {{ $empresa['estado'] ?? '' }}, 
    C.P. {{ $empresa['codigo_postal'] ?? '' }}
</p>

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
                <p> {{$contacto['nombre']}}</p>
                <p>{{$contacto['puesto']}}</p>
                <p>{{$contacto['telefono']}}</p>
                <p>{{$contacto['correo']}}</p>
              </diV>
            </div>
            <div class="content2--description">
              <div class="content2--description-title">
                <p>Descripción de la empresa</p>
                <hr class="line-title2">
              </div>
              <div class="content2--description-text">
                <p>
                 {{$empresa['descripcion']}}
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

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
    
    <footer>
    <div class="footer--container--1">
        <img src="../assets/img/u26.png" alt="Logo">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
    var img_ant = new Image();
    img_ant.src = "../assets/icons/Marcador_oferta.svg";

    function Marcador_selected(imagen) {
        if (img_ant.src === imagen.src) {
            imagen.src = "../assets/icons/Marcador_NG.svg";
        } else {
            imagen.src = img_ant.src;
        }
    }
</script>
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
