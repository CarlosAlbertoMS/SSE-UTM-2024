<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <link rel="stylesheet" href="./ingreso_selecciona_universidad.css" /> -->
  <link rel="stylesheet" href="{{ asset('css/Empresa/Ingreso_Selecciona_Universidad.css') }}"> <!-- Estilos específicos para la página -->

  <title>Document</title>
</head>

<body>
  <header>
    <figure>
      <img src="../assets/img/u26.png" class="header--img1" alt="" />
    </figure>
    <div class="main--title">
      <p>Sistema de Seguimiento de Egresados y Bolsa de Trabajo Empresas</p>
    </div>
    <figure>
      <img src="../assets/img/u43.png" class="header--img2" alt="" />
    </figure>
  </header>
  
  <main>
    <section class="main--section">
      <div class="main-img">
        <div class="main--back">
          <div class="main--header">
            <div class="main--header--flecha-1 flecha-1">
              <img src="../assets/flechas/FLECHA_INICIO.png" alt="" />
              <div class="main--header--flecha--text-1">
                <p>Universidad Objetivo</p>
              </div>
            </div>
            <div class="main--header--flecha-2 flecha-2">
              <img src="../assets/flechas/FLECHA_INTERMEDIO_GRIS.png" alt="" />
              <div class="main--header--flecha--text-2">
                <p>Crear Perfil de Empresa</p>
              </div>
            </div>
            <div class="main--header--flecha-2 flecha-3">
              <img src="../assets/flechas/FLECHA_INTERMEDIO_GRIS.png" alt="" />
              <div class="main--header--flecha--text-3">
                <p>Datos de la Empresa</p>
              </div>
            </div>
            <div class="main--header--flecha-2 flecha-4">
              <img src="../assets/flechas/FLECHA_FINAL_GRIS.png" alt="" />
              <div class="main--header--flecha--text-4">
                <p>Encuesta de Satisfacción</p>
              </div>
            </div>
          </div>
          <div class="main-form">
            <div class="text-container">
              <div class="body--main-title">
                <p>Registro</p>
              </div>
              <div class="body--main-text">
                <p>Hola! Estás a punto de iniciar tu registro como empresa en el Sistema de Seguimiento de Egresados y Bolsa de Trabajo del SUNEO, de antemano te  agradecemos por colaborar cordialmente con tu empresa.</p>
              </div>
              <div class="body--main-subtitle">
                <p>Selecciona la o las Universidad Objetivas para tus Ofertas Laborales</p>
              </div>
            </div>
            <div class="img-container">
              <a href="#utm"><img src="../assets/img/utm_u31.png" alt="" class="logo--school"></a>
              <a href="#umar"><img src="../assets/img/umar_u33.png" alt="" class="logo--school"></a>
              <a href="#unistmo"><img src="../assets/img/unistmo_u37.png" alt="" class="logo--school" />
              <a href="#unpa"><img src="../assets/img/unpa_u38.png" alt="" class="logo--school" />
              <a href="#unsis"><img src="../assets/img/unsis_u40.png" alt="" class="logo--school" />
              <a href="#unsij"><img src="../assets/img/unsij_u39.png" alt="" class="logo--school" />
              <a href="#unca"><img src="../assets/img/unca_u34.png" alt="" class="logo--school" />
              <a href="#nova"><img src="../assets/img/nova_u32.png" alt="" class="logo--school" />
              <a href="#uncos"><img src="../assets/img/uncos_u35.png" alt="" class="logo--school" />
              <a href="#unicha"><img src="../assets/img/unicha_u36.png" alt="" class="logo--school"></a>
            </div>
            <a href="{{route('empresa_propuesta')}}" class="button--1"> Regresar </a>
          </div>
        </div>

        <!-- Background -->
        <img src="../assets/img/u46.jpg" alt="" class="img--background" />
      </div>
    </section>
  </main>

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

  <aside id="utm" class="modal--container">
    <div class="content-modal">
      <div class="container-text1">
        <p class="modal-texto1">
          La Universidad Tecnológica de la Mixteca, con domicilio en carretera a acatlima Km. 2.5,
          Huajuapan de León, Oaxaca. utilizará tus datos personales recabados de este sistema
          para realizar un seguimiento preciso de las actividades profesionales de nuestro
          egresados que servirá como instrumento de análisis estadístico del desempeño
          académico de tu universidad. Tu información se tratará con absoluta confidencialidad, y
          solo será para uso del sistema, ni empleadores, ni personas ajenas al sistema podrán
          visualizarla. Para mayor información acerca del tratamiento y de los derechos que
          puedes hacer valer, puedes acceder al aviso de privacidad completo a través de nuestra
          oficina de seguimiento a egresados, ubicada en la misma dirección.
        </p>
      </div>
      <div class="container-text2">
        <p class="modal-texto2"><a href="">Leer aviso de privacidad completo</a></p>
      </div>
      <div class="modal--container-buttons">
        <a href="#" class="modal-button1"> Cancelar </a>
        <a href="CrearCuenta-Empresa.html" class="modal-button2"> Aceptar </a>
      </div>
    </div>
  </aside>

 <aside id="umar" class="modal--container">
    <div class="content-modal">
      <div class="container-text1">
        <p class="modal-texto1">
          La Universidad UMAR
        </p>
      </div>
      <div class="container-text2">
        <p class="modal-texto2">Leer aviso de privacidad completo</p>
      </div>
      <div class="modal--container-buttons">
        <a href="#" class="modal-button1"> Cancelar </a>
        <a href="#" class="modal-button2"> Aceptar </a>
      </div>
    </div>
  </aside>

   <aside id="unistmo" class="modal--container">
    <div class="content-modal">
      <div class="container-text1">
        <p class="modal-texto1">
          La Universidad UNISTMO
        </p>
      </div>
      <div class="container-text2">
        <p class="modal-texto2">Leer aviso de privacidad completo</p>
      </div>
      <div class="modal--container-buttons">
        <a href="#" class="modal-button1"> Cancelar </a>
        <a href="#" class="modal-button2"> Aceptar </a>
      </div>
    </div>
  </aside>

   <aside id="unpa" class="modal--container">
    <div class="content-modal">
      <div class="container-text1">
        <p class="modal-texto1">
          La Universidad UNPA
        </p>
      </div>
      <div class="container-text2">
        <p class="modal-texto2">Leer aviso de privacidad completo</p>
      </div>
      <div class="modal--container-buttons">
        <a href="#" class="modal-button1"> Cancelar </a>
        <a href="#" class="modal-button2"> Aceptar </a>
      </div>
    </div>
  </aside>

   <aside id="unsis" class="modal--container">
    <div class="content-modal">
      <div class="container-text1">
        <p class="modal-texto1">
          La Universidad UNSIS
        </p>
      </div>
      <div class="container-text2">
        <p class="modal-texto2">Leer aviso de privacidad completo</p>
      </div>
      <div class="modal--container-buttons">
        <a href="#" class="modal-button1"> Cancelar </a>
        <a href="#" class="modal-button2"> Aceptar </a>
      </div>
    </div>
  </aside>

   <aside id="unsij" class="modal--container">
    <div class="content-modal">
      <div class="container-text1">
        <p class="modal-texto1">
          La Universidad UNSIJ
        </p>
      </div>
      <div class="container-text2">
        <p class="modal-texto2">Leer aviso de privacidad completo</p>
      </div>
      <div class="modal--container-buttons">
        <a href="#" class="modal-button1"> Cancelar </a>
        <a href="#" class="modal-button2"> Aceptar </a>
      </div>
    </div>
  </aside>

     <aside id="unca" class="modal--container">
    <div class="content-modal">
      <div class="container-text1">
        <p class="modal-texto1">
          La Universidad UNCA
        </p>
      </div>
      <div class="container-text2">
        <p class="modal-texto2">Leer aviso de privacidad completo</p>
      </div>
      <div class="modal--container-buttons">
        <a href="#" class="modal-button1"> Cancelar </a>
        <a href="#" class="modal-button2"> Aceptar </a>
      </div>
    </div>
  </aside>

     <aside id="nova" class="modal--container">
    <div class="content-modal">
      <div class="container-text1">
        <p class="modal-texto1">
          La Universidad NOVA
        </p>
      </div>
      <div class="container-text2">
        <p class="modal-texto2">Leer aviso de privacidad completo</p>
      </div>
      <div class="modal--container-buttons">
        <a href="#" class="modal-button1"> Cancelar </a>
        <a href="#" class="modal-button2"> Aceptar </a>
      </div>
    </div>
  </aside>

     <aside id="uncos" class="modal--container">
    <div class="content-modal">
      <div class="container-text1">
        <p class="modal-texto1">
          La Universidad UNCOS
        </p>
      </div>
      <div class="container-text2">
        <p class="modal-texto2">Leer aviso de privacidad completo</p>
      </div>
      <div class="modal--container-buttons">
        <a href="#" class="modal-button1"> Cancelar </a>
        <a href="#" class="modal-button2"> Aceptar </a>
      </div>
    </div>
  </aside>

<aside id="unicha" class="modal--container">
    <div class="content-modal">
      <div class="container-text1">
        <p class="modal-texto1">
          La Universidad UNICHA
        </p>
      </div>
      <div class="container-text2">
        <p class="modal-texto2">Leer aviso de privacidad completo</p>
      </div>
      <div class="modal--container-buttons">
        <a href="#" class="modal-button1"> Cancelar </a>
        <a href="#" class="modal-button2"> Aceptar </a>
      </div>
    </div>
  </aside>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>