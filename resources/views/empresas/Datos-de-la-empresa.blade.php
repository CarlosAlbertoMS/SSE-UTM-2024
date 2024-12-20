@extends('layouts.empresas.header')

@section('contenido')
  <header>
    <!--Inicio del titulo-->
    <figure>
      <img src="../assets/img/u26.png" class="header--img1" alt="" />
    </figure>
    <div class="header--title">
      <p>Bolsa de Trabajo del SUNEO</p>
    </div>
    <figure>
      <img src="../assets/img/u43.png" class="header--img2" alt="" />
    </figure>
  <!--Fin titulo -->
  </header>

  <!--Inicio del menu de navegacion de cada vista-->
  <div>
    <ul class="menu">
      <li class="active"><a class="texto-menu" href="{{ route('datos-empresa') }}">Datos de la Empresa</a></li>
      <li><a class="texto-menu" href="{{ route('ofertas-laborales') }}">Ofertas Laborales</a></li>
      <li class="icon"><img src="../assets/icons/u18.svg" class="icon--settings"></li>
      <li class=" icon">  <img src="../assets/icons/u11.svg" class="icon--question"></li>
      <li class="icon"><img src="../assets/img/u462.PNG" class="icon--profile"></li>
    </ul>
  </div>
  <!--fin del menu de navegacion-->

    <main>
    <!--Inicio de la seccion del contenido de los datos-->
      <section class="main--section">
        <!--Inicio del titulo-->
        <div class="main--title">
          <p>Datos de la empresa</p>
        </div>
        <!--fin del titulo-->
        <!--Inicio de la linea de separacion entre las dos secciones-->
        <div>
          <hr class="line-title1">
        </div>
         <!--fin de la linea de separacion-->
        <div class="main--content">
           <!--Inicio del contenido izquierdo de la pagina (imagen, mensajes,comentarios y calificacion-->
          <div class="content1">

            <!--Inicio imagen-->
            <div class="content1--img">
              <img src="../assets/img/cemex.png" class="img--enterprise" alt="" />
            </div>
            <!--Fin imagen-->

            <!--Inicio mensajes de cordinacion -->
            <div class="content1--mensajes">
              <div>
              <p>Mensaje de la cordinacion</p>
            </div>
            <div id="content1--tabla">
              <table>
                <tr>
                  <input type="text" name="estado" id="content1--estado" placeholder=" Estado de la oferta, Ingeníero …">
                </tr>
                <tr>
                  <input type="text" name="actualizacion" id="content1--actualizacion" placeholder=" Actualización de datos" >
                </tr>
              </table>
            </div>
            <div class="content1--more_mensajes">
                <a href="#modal-coordi"> <span class="content1--more_mensajes-text"> Ver mas mensajes</span></a>
              </div>
            </div>
            <!--Fin de los mensajes de cordinacion-->
            
            <!--Inicio calificacion y comentarios-->
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
                <p>“Es una buena empresa”</p>
                <p>“Gran ambiente laboral y ubicación”</p>
                <p>“Excelente empresa”</p>
                <p>“Es una buena empresa”</p>
              </div>
              <div class="content1--more_coments">
                <a href="#modal"> <span class="content1--more_coments-text"> Ver mas comentarios</span></a>
              </div>
            </div>
            <!--Fin calificacion y comentarios-->
          </div>
          <!--Fin del contenido izquierdo de la pagina (imagen, mensajes,comentarios y calificacion-->
        </div>

          <!--Inicio del contenido derecho de la pagina (Datos de la empresa y datos de contacto-->
          <div class="content2">
            <div class="content2--information">
              <div class="content2--information-title1">
                <p>Datos de la empresa <a class="content2--referencia" href="{{ route('editar-datos-empresa') }}"><input type="button" class="boton--editar" name="btn1" value="Editar datos de la empresa"></a></p>
                <hr class="line-title2">
              </div>

              <div class="content2--information-text1">
                <p>Nombre de la empresa  <input type="text" class="content2--information-texto1" name="nombre" placeholder=" CEMEX" readonly="readonly"></p>
                <p>Correo electronico <input type="text" class="content2--information-texto1" name="correo" placeholder=" cemex@cemex.com.mx" readonly="readonly"></p>
                <p>Telefono <input type="text" class="content2--information-texto1" name="telefono" placeholder=" 442 3091600" readonly="readonly"></p>
                <p>Ubicación: <input type="text" class="content2--information-texto1" name="ubicacion" placeholder=" Santiago de Querétaro, Querétaro" readonly="readonly"> </p>
              </div>
              <div class="content2--information-title2">
                <p>Datos del contacto</p>
                <hr class="line-title2">
              </div>
              <div class="content2--information-text2">
                <p>Contacto directo:<input type="text" class="content2--information-texto1" name="ubicacion" placeholder=" Claudia Guadalupe Bustos Guerrero" readonly="readonly"> </p>
                <p>Área:<input type="text" class="content2--information-texto1" name="ubicacion" placeholder=" Sttaffing y adquisición de talento / Recursos" readonly="readonly"> </p>
                <p>Teléfono(s):<input type="text" class="content2--information-texto1" name="ubicacion" placeholder=" 52 442 3091600 / Ext. 5007" readonly="readonly"> </p>
                <p>Correo electrónico:<input type="text" class="content2--information-texto1" name="ubicacion" placeholder=" claudia.bustos@cemex.com" readonly="readonly"> </p>
              </div>
            </div>
            <div class="content2--description">
              <div class="content2--description-title">
                <p>Descripción de la empresa</p>
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

            <div class="content2--datos">
              <div class="content2--information-title3">
                <p>Datos adicionales</p>
                <hr class="line-title2">
              </div>
              <div class="content2--datos--direccion">
                <p>Direccion de la empresa</p>
              <!-- </div> -->
              <div class="content2--datos--text1">
                <p>Calle:<input type="text" class="content2--information-texto1" name="ubicacion" placeholder=" Calle" readonly="readonly"> </p>
                <p>Colonia:<input type="text" class="content2--information-texto1" name="ubicacion" placeholder=" Colonia" readonly="readonly"> </p>
                <p>Numero/piso:<input type="text" class="content2--information-texto2" name="ubicacion" placeholder=" Número/Piso" readonly="readonly"> </p>
                <p>Codigo postal:<input type="text" class="content2--information-texto2" name="ubicacion" placeholder=" C.P." readonly="readonly"> </p>
                <p>Ciudad:<input type="text" class="content2--information-texto1" name="ubicacion" placeholder=" Ciudad" readonly="readonly"> </p>
                <p>Estado:<input type="text" class="content2--information-texto1" name="ubicacion" placeholder=" Estado" readonly="readonly"> </p>
                <div><hr class="line-title2"></div>
                <p>RFC <input type="text" class="content2--information-texto1" name="ubicacion" placeholder=" Ingrese RFC de la empresa..." readonly="readonly"> </p>
                <div><hr class="line-title2"></div>
                <p>Pagina web <input type="text" class="content2--information-texto1" name="ubicacion" placeholder="Página web de la empresa..." readonly="readonly"> </p>
              </div>
              <div>
                <hr>
              </div>
            </div>
          </div>
          <!--Fin del contenido derecho de la pagina (Datos de la empresa y datos de contacto. -->
      </section>
    <!-- Fin de la seccion del contenido de los datos. -->
    </main>

    <!-- Inicio de la ventana modal sobre los mensajes de coordinacion-->
    <aside id="modal-coordi" class="modal--container">
      <div class="content-modal">
        <div class="modal--title">
          <p>Mensajes de la coordinacion</p>
        </div>
        <div class="container-text1">
          <table>
            <tr>
              <td>“Estado de la oferta “Ingeniero en Diseño” : Se han revisado los datos de la oferta y ha sido aceptada..”</td>
            </tr>
            <tr>
              <td>“Actualización de datos: Se han actualizado correctamente los datos del contacto directo.”</td>
            </tr>
            <tr>
              <td>“Estado de la oferta “Ingeniero en Diseño” : Se han revisado los datos de la oferta y ha sido aceptada.”</td>
            </tr>
            <tr>
              <td>“Actualización de datos: Se han actualizado correctamente los datos del contacto directo.”</td>
            </tr>
            <tr>
              <td>“Estado de la oferta “Ingeniero en Diseño” : Se han revisado los datos de la oferta y ha sido aceptada.”</td>
            </tr>
            <tr>
              <td>“Actualización de datos: Se han actualizado correctamente los datos del contacto directo.”</td>
            </tr>
            <tr>
              <td>“Actualización de datos: Se han actualizado correctamente los datos del contacto directo.”</td>
            </tr>
            <tr>
              <td>“Actualización de datos: Se han actualizado correctamente los datos del contacto directo.”</td>
            </tr>
            <tr>
              <td>“Actualización de datos: Se han actualizado correctamente los datos del contacto directo.”</td>
            </tr>
            <tr>
              <td>“Actualización de datos: Se han actualizado correctamente los datos del contacto directo.”</td>
            </tr>
          </table>
        </div>
        <div class="modal--container-buttons">
         <a href="#" class="modal-button1"> <span class="modal-button1-text">Cerrar</span></a>
        </div>
      </div>
    </aside>
    <!--Fin de la ventana sobre los mensajes de coordinacion. -->

    <!-- Inicio de la ventana sobre los comentarios. -->
    <aside id="modal" class="modal--container">
      <div class="content-modal">
        <div class="modal--title">
          <p>Comentarios</p>
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
    <!--fin de la ventana sobre los comentarios-->

    <!--Inicio de calificacion de estrellas-->
    <script>
      const starTotal = 5;
      const ratings = {
        score1 : 3.5,
      };

      for (const rating in ratings) {
        const starPercentage = (ratings[rating] / starTotal) * 100;
        const starPercentageRounded = `${(Math.round(starPercentage / 10) * 10)}%`;
        document.querySelector(`.${rating} .stars-inner`).style.width = starPercentageRounded;
      }
    </script>
</body>
@endsection