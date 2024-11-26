<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="./CrearCuenta-empresa.css" /> -->
    <link rel="stylesheet" href="{{ asset('css/Empresa/CrearCuenta-empresa.css') }}"> <!-- Estilos específicos para la página -->

    <title>Crear cuenta de empresa</title>
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
                            <img src="../assets/flechas/FLECHA_INICIO_GRIS.svg" alt="" />
                            <div class="main--header--flecha--text-1">
                                <p>Universidad Objetivo</p>
                            </div>
                        </div>
                        <div class="main--header--flecha-2 flecha-2">
                            <img src="../assets/flechas/FLECHA_INTERMEDIO.png" alt="" />
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

                    <!--CONTENIDO-->
                    <div class="main-form">
                        <form action="" class="form-crear-perfil-empresa">
                            <li>
                                <label for="correo">Correo electrónico*</label>
                                <input type="email" name="correo" id="correo" placeholder="Correo de la empresa">
                            </li>
                            <li>
                                <label for="usuario">Usuario*</label>
                                <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario">
                            </li>
                            <li>
                                <label for="contrasenia">Contraseña*</label>
                                <input type="email" name="contrasenia" id="contrasenia" placeholder="Contraseña">
                            </li>
                            <li>
                                <label for="confirmar-contrasenia">Confirmar contraseña*</label>
                                <input type="email" name="confirmar-contrasenia" id="confirmar-contrasenia" placeholder="Contraseña">
                            </li>
                            <p class="campos-obligatorios">*Campos obligatorios</p>
                            <p class="informacion">Todos los datos proporcionados serán verificados para cerciorar su veracidad.</p>
                            <div class="contenedor-botones">
                                <a href="Ingreso_selecciona_universidad.html" class="button--1">Regresar</a>
                                <a href="{{route('empresa_datos')}}" class="button--2">Siguiente</a>
                            </div>
                        </form>
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
                <a href="#" class="modal-button2"> Aceptar </a>
            </div>
        </div>
    </aside>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>