<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Oferta</title>
    <link rel="stylesheet" href="{{ asset('css/empresas/Ofertas--Laborales-CrearOferta.css') }}">
</head>
<body>

    <header>

        <section id="cabezera--crear-oferta">

            <div id="cabezara--agrupacion">

                <img class="contenido--header-img1" src="../assets/img/u26.png">

                <div class="contenido--header-texto">
                    <p>Bolsa de Trabajo del SUNEO </p>
                </div>

                <img class="contenido--header-img2" src="../assets/img/u43.png">

            </div>

        </section>

        <section id="menu--crear-oferta">

            <section id="menu--izq">
                <ul>
                    <li style="width: 512px;"><a href="#">Datos de la Empresa</a></li>
                    <li style="background-color: var(--footer--acerca); width: 426px;"><a href="#">Ofertas Laborales</a></li>
                </ul>

            </section>

            <section id="menu--der">

                <img class="menu--der-img" src="../assets/icons/help_ofertas.svg">

                <img class="menu--der-img" src="../assets/icons/Ajustes_B.png">

                <img class="menu--der-img" src="../assets/img/u462.png">

            </section>

        </section>


    </header>

    <section id="contenido">

        <section id="contenido--header">

            <div class="contenido--header--texto">Crear oferta de trabajo</div>

        </section>
<form action="">
        <section id="contenido--formulario">

            <section id="contenido--formulario-texto">

                <section id="formulario--texto-principal">

                    <section id="formulario--texto-der">

                        <img class="texto--der-img" src="../assets/img/normal_u1249.svg">

                        <div class="texto--der-text">

                            <img class="texto--der--text-img" src="../assets/icons/normal_u866.svg">

                            <p>Agregar imagen </p>

                        </div>

                    </section>

                    <section id="formulario--texto-izq">

                        <div class="texto--izq-campos">

                            <div class="campo--izq">
                                <p>Nombre de la oferta :</p>
                            </div>

                            <div class="campo--der">
                                <input type="text" class="campo--der-boton" placeholder="Nombre de la oferta">
                            </div>

                        </div>

                        <div class="texto--izq-campos">

                            <div class="campo--izq">
                                <p>Puesto :</p>
                            </div>

                            <div class="campo--der">
                                <input type="text" class="campo--der-boton" placeholder="Puesto vacante" >
                            </div>

                        </div>

                         <div class="texto--izq-campos">

                            <div class="campo--izq">
                                <p>Sistema:</p>
                            </div>

                            <div class="campo--der">
                                <input type="radio" name="sistema" class="radio-buttom" > <p class="radio-text">UTM</p>
                                <input type="radio" name="sistema" class="radio-buttom"> <p class="radio-text">SUNEO</p>
                            </div>

                        </div>

<div class="texto--izq-campos">

                            <div class="campo--izq">
                                <p>Sistema:</p>
                            </div>

                            <div class="campo--der">
                                <a href="#modal" onclick="red" class="radio-buttom2"></a><p class="radio-text">UTM</p>
                                <input type="radio" name="sistema" class="radio-buttom"> <p class="radio-text">SUNEO</p>
                            </div>

                        </div>



                        <div class="texto--izq-campos">

                            <div class="campo--izq">
                                <p>Carrera :</p>
                            </div>

                            <div class="campo--der">
                                <select  class="campo--der-select">
                                    <option disabled selected>Seleccionar Carrera</option>
                                    <option value="1">Ingeniería en Computación</option>
                                    <option value="2">Ingeniería en Electrónica</option>
                                    <option value="3">Ingeniería en Diseño</option>
                                    <option value="4">Licenciatura Ciencias Empresariales</option>
                                    <option value="5">Licenciatura en Matemáticas Aplicadas</option>
                                    <option value="6">Ingeniería en Alimentos</option>
                                    <option value="7">Ingeniería Industrial</option>
                                    <option value="8">Licenciatura en Estudios Mexicanos</option>
                                    <option value="9">Ingeniería en Mecatronica</option>
                                    <option value="10">Ingeniería en Mecanica Automótriz</option>
                                    <option value="11">Ingeniería Civil</option>
                                </select>
                            </div>

                        </div>

                        <div class="texto--izq-campos">

                            <div class="campo--izq">
                                <p>Ubicación :</p>
                            </div>

                            <div class="campo--der">
                                <input type="text"class="campo--der-boton" placeholder="Colonia, Ciudad o Estado">
                            </div>

                        </div>

                        <div class="texto--izq-campos">

                            <div class="campo--izq">
                                <p>Experiencia :</p>
                            </div>

                            <div class="campo--der">
                                <input type="text" class="campo--der-boton" placeholder="Experiencia mínima para el puesto">
                            </div>

                        </div>

                        <div class="texto--izq-campos">

                            <div class="campo--izq">
                                <p>Salario :</p>
                            </div>

                            <div class="campo--der">
                                <input type="text" class="campo--der-boton" placeholder="$0-$0000">
                            </div>

                        </div>

                        <div class="texto--izq-campos">

                            <div class="campo--izq">
                                <p>Estatus :</p>
                            </div>

                            <div class="campo--der">
                                <select  class="campo--der-select--2">
                                    <option disabled selected>Estatus</option>
                                    <option value="1">Vacante</option>
                                    <option value="2">Ocupada</option>
                                    <option value="3">Cancelada</option>
                                </select>
                            </div>

                        </div>

                    </section>

                </section>

                <section id="formulario--texto-descrip">

                    <p>Descripción de la oferta :</p>

                    <input  class="texto--descrip-oferta" type="text" name="">

                </section>

                <section id="formulario--texto-boton">

                    <!-- <button class="texto--boton-buton">Cancelar</button> -->
                    <a href="{{ route('ofertas-laborales') }}" class="texto--boton-buton1"><span class="content1--more_coments-text">Cancelar</span></a>
                    <a href="#modal" class="texto--boton-buton1"><span class="content1--more_coments-text"> Publicar oferta </span></a>

                </section>

            </section>

        </section>

    </section>
</form>
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
<aside id="modal" class="modal--container">
      <div class="content-modal">
        <div class="modal--title">
          <p>Mensaje</p>
        </div>
        <div class="container-text2">
        <p>¡Enhorabuena!,Su oferta ha sido enviada a revisión</p>
        </div>
        <div class="modal--container-buttons">
         <a href="C:\Users\Usuario\Documents\GitHub\Estilos-SSE\Home_sse\Vistas-Empresas/Datos-de-la-empresa-Ofertas-Laborales.html" class="modal-button3"> <span class="modal-button1-text">Cerrar</span></a>
        </div>
      </div>
    </aside>
</body>
</html>
