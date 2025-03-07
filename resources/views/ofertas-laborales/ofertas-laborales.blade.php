<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas Laborales</title>
    <link rel="stylesheet" href="{{ asset('css/empresas/ofertas-laborales.css') }}">
</head>
<body>
    <header>
        <div id="header--encabezado">
            <img id="header--img1" src="../assets/img/u43.png">
            <div id="header--titulo">
               Bolsa de Trabajo del SUNEO
            </div>
            <img id="header--img2" src="../assets/img/utm_u31.png">
        </div>

        <center>
            <div>
                <ul class="menu">
                <li class="active2"><a class="texto-menu" href="{{ route('empresa.index') }}">Datos de la Empresa</a></li>
                <li class="active"><a class="texto-menu" href="{{ route('ofertas-laborales') }}">Ofertas Laborales</a></li>
                <li class=" icon">  <img src="../assets/icons/u11.svg" class="icon--question"></li>
                <li class="icon"><img src="../assets/icons/u18.svg" class="icon--settings"></li>
                <li class="icon"><img src="../assets/img/u462.PNG" class="icon--profile"></li>
                </ul>
            </div>
        </center>

                </div>
    </header>

    <section id="contenido">
                <div class="titulo">
                Ofertas Publicadas
            </div>

        <hr>

        <section id="contenido--opciones">

            <div id="cinta--opciones">
                <ul>
                    <a href="{{ route('ofertas-laborales-crear') }}" style="color:#9ba266;" >
                        <li><img src="../assets/icons/normal_u1027.svg"></li>
                        <li>Agregar Oferta</li>
                    </a>
                    <a href="#" style="color:#9ba266;" >
                        <li><img src="../assets/icons/normal_u1032.svg"></li>
                        <li>Descargar PDF</li>
                    </a>
                    <a href="#" style="color:#9ba266;" >
                        <li><img src="../assets/icons/normal_u1030.svg"></li>
                        <li>Imprimir</li>
                    </a>
                    <a href="#detalles" style="color: #6b6b6b;">
                        <li><img src="../assets/icons/normal_u1038.svg"></li>
                        <li>Ver Detalles</li>
                    </a>
                    <a href="{{ route('ofertas-editar') }}" style="color: #6b6b6b;">
                        <li><img src="../assets/icons/normal_u1034.svg"></li>
                        <li>Editar</li>
                    </a>
                    <a href="#eliminar" style="color: #6b6b6b;">
                        <li><img src="../assets/icons/normal_u1035.svg"></li>
                        <li>Eliminar</li>
                    </a>
                </ul>
            </div>
        </section>

        <hr>

        <section id="contenido--ofertas">

            <section id="contenido--tabla">
                <section id="contenido--tabla-tabla">
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Puesto</th>
                                <th>Empresa</th>
                                <th>Carrera</th>
                                <th>Ubicación</th>
                                <th>Descripción </th>
                                <th>Estado de la oferta</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>1</td>
                            <td>Supervisor Administrativo</td>
                            <td>Cerveceria Modelo <br> Mixteca S.A. de C.V.</td>
                            <td>Ingeniería en Diseño</td>
                            <td>Oaxaca de Juárez</td>
                            <td>Experiencia: No necesaria. Se tomará en cuenta si ha […]</td>
                            <td style="color: #70b603;">Aceptada </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Consultor funcional bilingüe </td>
                            <td>gA-Grupo ASSA</td>
                            <td>Ingeniería en Computación </td>
                            <td>CDMX</td>
                            <td>Disponibilidad de horario (full-time), facilidad para radicar en [...] </td>
                            <td style="color: #70b603;">Aceptada </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Supervisor administrativo </td>
                            <td>Cervecería Modelo Mixteca S.A. de C.V.</td>
                            <td>Lic. en Ciencias Empresariales</td>
                            <td>Huajuapan de León, Oaxaca</td>
                            <td>Habituado a trabajo de campo. • Saber entablar una [...]</td>
                            <td style="color: #70b603;">Aceptada </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Documentador</td>
                            <td>Desarrollos Orientados a Eficiencia, S.A. de C.V.</td>
                            <td>Ingeniería en Computación </td>
                            <td>Oaxaca de Juárez</td>
                            <td>Realizar manuales de usuario y manuales técnicos se te [...]</td>
                            <td style="color: #f59a23;">En proceso </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Supervisor administrativo </td>
                            <td>Cervecería Modelo Mixteca S.A. de C.V.</td>
                            <td>Lic. en Ciencias Empresariales</td>
                            <td>Huajuapan de León, Oaxaca</td>
                            <td>Habituado a trabajo de campo. • Saber entablar una [...]</td>
                            <td style="color: #d9001b;">Rechazada </td>
                        </tr>
                    </table>
                </section>
                <section id="contenido--tabla-total">
                    <section id="texto1-total">
                        <p>Total de ofertas aceptadas: 35 </p>
                    </section>
                    <section id="texto2-total">
                        <p>Total de ofertas rechazadas: 12</p>
                    </section>
                </section>
            </section>

        </section>

    </section>

    <footer>
        <section id="suneo-img">
            <img src="../assets/img/u26.png">
        </section>
        <section id="info-acercade">
            <nav id="menu-info-acercade">
                <ul>
                    <li><a href="#">Sobre SUNEO</a></li>
                    <li><a href="#">Privacidad</a></li>
                    <li><a href="#">Empresas</a></li>
                    <li><a href="#">Ayuda</a></li>
                </ul>
            </nav>
            <section id="footer--texto">
                <section id="footer--texto1">
                    <p>Coordinación de Vinculación de Alumnos y Egresados UTM</p>
                    <p>De Lunes a Viernes de 8:00 a 13:00 y de 16:00 a 19:00 hrs</p>
                </section>

                <section id="footer-texto2">
                    <p>Teléfonos: (953) 53 203 99 o (953) 53 202 14 ext. 113 o 116</p>
                    <p>Carretera a Acatlima Km. 2.5 Huajuapan de León, Oaxaca, México C.P 69000</p>
                </section>
            </section>
        </section>
    </footer>

<aside id="detalles" class="modal--container">
    <div class="content-modal">
        <div class="modal--title">
            <p>Detalles de la Oferta</p>
        </div>
        <div class="modal-subtitle">
            <p>Se busca ex-ACMers</p>
        </div>
        <div class="contenido2">
            <img class="container-img" src="../assets/img/cemex.png">
            <div class="informacion">
                <p class="titulos">Ingeniería en Electrónica o áreas afines.</p>
                <div  class="iconos-texto"> <img src="../assets/icons/ubicacion.svg" style="width: 14px; height: 18px;"><p>Oaxaca de Juárez, Oaxaca.</p></div>
                <div  class="iconos-texto"> <img src="../assets/icons/correo_a.svg" class="iconos"><p>reclutamiento@agavelab.com</p></div>
                <div  class="iconos-texto"> <img src="../assets/icons/telefono_bla.svg" class="iconos"><p>9511148536</p></div>
                <div class="beneficios">  <p class="titulos2">Especificaciones:<p class="sueldo" >Con salario base de $10,000 MxN </p> </p> </div>
                <p class="idiomas">Español, Ingles 80%</p>
                <div class="beneficios">  <p class="fecha">Fecha de publicacion:<p class="fecha-num">25/10/2021</p> </p> </div>
            </div>
        </div>
            <div class="descripcion-puesto">
                <p >Descripción del puesto. Ganas de aprender. Sería bueno que sepas: - Funcionamiento básico de un parser/lexer. Estas son las herramientas que utilizamos: - Git - IntelliJ - Programamos en Erlang (ntp, aquí aprendes). - A veces C y java. Metodología - Agile - Test Driven Development Vacante en: Guadalajara, (puede ser remoto después de prueba).</p>
            </div>
            <div class="modal--container-buttons">
                <!-- <a href="Datos-de-la-empresa-Ofertas-Laborales.html" class="modal-button2"> <span class="modal-button1-text">Cerrar</span></a> -->
                <a href="{{ route('ofertas-laborales') }}" class="modal-button2"> <span class="modal-button1-text">Cerrar</span></a>
            </div>
        </div>
</aside>

<aside id="eliminar" class="modal--container">
      <div class="content-modal">
        <div class="modal--title">
          <p>Detalles de la Oferta</p>
        </div>
        <div class="modal-subtitle">
          <p>Se busca ex-ACMers</p>
        </div>
       <div class="contenido2">

            <img class="container-img" src="../assets/img/cemex.png">
            <div class="informacion">
               <p class="titulos">Ingeniería en Electrónica o áreas afines.</p>
                <div  class="iconos-texto"> <img src="../assets/icons/ubicacion.svg" style="width: 14px; height: 18px;"><p>Oaxaca de Juárez, Oaxaca.</p></div>
                <div  class="iconos-texto"> <img src="../assets/icons/correo_a.svg" class="iconos"><p>reclutamiento@agavelab.com</p></div>
                <div  class="iconos-texto"> <img src="../assets/icons/telefono_bla.svg" class="iconos"><p>9511148536</p></div>
              <div class="beneficios">  <p class="titulos2">Especificaciones:<p class="sueldo" >Con salario base de $10,000 MxN </p> </p> </div>
              <p class="idiomas">Español, Ingles 80%</p>
              <div class="beneficios">  <p class="fecha">Fecha de publicacion:<p class="fecha-num">25/10/2021</p> </p> </div>
        </div>

    </div>
    <div class="descripcion-puesto">
        <p >Descripción del puesto. Ganas de aprender. Sería bueno que sepas: - Funcionamiento básico de un parser/lexer. Estas son las herramientas que utilizamos: - Git - IntelliJ - Programamos en Erlang (ntp, aquí aprendes). - A veces C y java. Metodología - Agile - Test Driven Development Vacante en: Guadalajara, (puede ser remoto después de prueba).</p>
    </div>
        <div class="modal--container-buttons">
         <a href="Datos-de-la-empresa-Ofertas-Laborales.html" class="modal-button2"> <span class="modal-button1-text">Cerrar</span></a>

         <a href="#eliminar-confirmacion" class="modal-button1"> <span class="modal-button1-text">Eliminar</span></a>
        </div>
      </div>
    </aside>

<aside id="eliminar-confirmacion" class="modal--container">
      <div class="content-modal-confirmacion">
        <div class="mensaje">
          <p>¿Esta seguro de eliminar esta oferta?</p>
        </div>

        <div class="modal--container-buttons2">
         <a href="Datos-de-la-empresa-Ofertas-Laborales.html" class="modal-button2"> <span class="modal-button1-text">Cerrar</span></a>

         <a href="#eliminar-exitoso" class="modal-button1"> <span class="modal-button1-text">Eliminar</span></a>
        </div>
      </div>
    </aside>

<aside id="eliminar-exitoso" class="modal--container">
      <div class="content-modal-confirmacion">
        <div class="mensaje">
          <p>La oferta ha sido eliminada con exito</p>
        </div>

        <div class="modal--container-buttons2">

         <a href="Datos-de-la-empresa-Ofertas-Laborales.html" class="modal-button1"> <span class="modal-button1-text">Aceptar</span></a>
        </div>
      </div>
    </aside>
</body>
</html>