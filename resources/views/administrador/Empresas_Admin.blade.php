<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas - ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/administrador/Empresas_Admin.css') }}">
</head>
<body>
    @include('layouts.header')


    <section id="contenido">
        <!--Inicio de la segunda barra de navegacion-->
        <div class="form-navbar">
            <div class="submenu">
                <div><a href="">
                    <img src="../assets/icons/normal_u23.svg" class="item-r">
                    <span class="fijos">Validar Empresa</span>
                    </a>
                </div>
                <div><a href="">
                    <img src="../assets/icons/u164.svg" class="item-r">
                    <span class="fijos">Descargar PDF</span>
                    </a>
                </div>
                <div><a href="">
                    <img src="../assets/icons/ver_oferta.svg" class="item-r">
                    <span class="nofijos">Ver Detalles</span>
                    </a>
                </div>
                <div class="submenulastchild"><a href="">
                    <img src="../assets/icons/eliminar_oferta.svg" class="item-r">
                    <span class="nofijos">Eliminar</span>
                    </a>
                </div>
            </div>
            <!--Inicio del buscador de la pagina-->
            <form>
                <input class="texto-busqueda"  type="text" placeholder="Buscar..." >
                <button  class="btn-btn-warning" type="submit"><img src="../assets/icons/Buscar_B.PNG" ></button>
            </form>
            <!--fin del buscador-->
        </div>    
        <div class="linea"></div>
        <!--
            TU CODIGO AQUI
        -->
        <center>
            <!--Inicio de la tabla-->
            <table>
                <!-- Inicio del encabezado de la tabla-->
                <tr id="tabla-inicio">
                    <th>Número</th>
                    <th>Empresa</th>
                    <th>Ubicación</th>
                    <th>Teléfono</th>
                    <th>Descripcción</th>
                    <th>Fecha</th>
                    <th>Estado de la empresa</th>
                </tr>
                <!-- Fin del encabezado-->
                <tr>
                    <td>1</td>
                    <td>Puertas finas de madera Montealban S.A. de C.V.</td>
                    <td>Oaxaca de Juárez</td>
                    <td>019515175</td>
                    <td>Experiencia: No necesaria. Se tomará en cuenta si ha […]</td>
                    <td>2018-11-27 00:56:13</td>
                    <td class="Nueva">Nueva Empresa</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>gA-Grupo ASSA</td>
                    <td>CDMX</td>
                    <td>91578700 EXT</td>
                    <td>Disponibilidad de horario (full-time), facilidad para radicar en [...]</td>
                    <td>2018-11-27 00:56:13</td>
                    <td class="Nueva">Nueva Empresa</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Cervecería Modelo Mixteca S.A. de C.V.</td>
                    <td>Huajuapan de León, Oaxaca</td>
                    <td>019515175</td>
                    <td>Habituado a trabajo de campo. • Saber entablar una [...]</td>
                    <td>2018-11-27 16:16:13</td>
                    <td class="Aceptada">Aceptada</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Desarrollos Orientados a Eficiencia, S.A. de C.V.</td>
                    <td>Oaxaca de Juárez</td>
                    <td>019515175</td>
                    <td>Experiencia: No necesaria. Se tomará en cuenta si ha […]</td>
                    <td>2018-11-27 00:56:13</td>
                    <td class="Aceptada">Aceptada</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Cervecería Modelo Mixteca S.A. de C.V.</td>
                    <td>CDMX</td>
                    <td>91578700 EXT</td>
                    <td>Disponibilidad de horario (full-time), facilidad para radicar en [...]</td>
                    <td>2018-11-27 00:56:13</td>
                    <td class="Aceptada">Aceptada</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>gA-Grupo ASSA/td>
                    <td>Oaxaca de Juárez</td>
                    <td>019515175</td>
                    <td>Experiencia: No necesaria. Se tomará en cuenta si ha […]</td>
                    <td>2018-11-27 16:16:13</td>
                    <td class="Aceptada">Aceptada</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Desarrollos Orientados a Eficiencia, S.A. de C.V.</td>
                    <td>Oaxaca de Juárez</td>
                    <td>019515175</td>
                    <td>Experiencia: No necesaria. Se tomará en cuenta si ha […]</td>
                    <td>2018-11-27 00:56:13</td>
                    <td class="Aceptada">Aceptada</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Puertas finas de madera Montealban S.A. de C.V.</td>
                    <td>CDMX</td>
                    <td>91578700 EXT</td>
                    <td>Disponibilidad de horario (full-time), facilidad para radicar en [...]</td>
                    <td>2018-11-27 00:56:13</td>
                    <td class="Aceptada">Aceptada</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>gA-Grupo ASSA</td>
                    <td>Oaxaca de Juárez</td>
                    <td>019515175</td>
                    <td>Experiencia: No necesaria. Se tomará en cuenta si ha […]</td>
                    <td>2018-11-27 16:16:13</td>
                    <td class="Proceso">En proceso</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Cervecería Modelo Mixteca S.A. de C.V.</td>
                    <td>Oaxaca de Juárez</td>
                    <td>019515175</td>
                    <td>Experiencia: No necesaria. Se tomará en cuenta si ha […]</td>
                    <td>2018-11-27 00:56:13</td>
                    <td class="Proceso">En proceso</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Desarrollos Orientados a Eficiencia, S.A. de C.V.</td>
                    <td>CDMX</td>
                    <td>9511328536</td>
                    <td>Disponibilidad de horario (full-time), facilidad para radicar en [...]</td>
                    <td>2018-11-27 00:56:13</td>
                    <td class="Rechazada">Rechazada</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Puertas finas de madera Montealban S.A. de C.V.</td>
                    <td>Oaxaca de Juárez</td>
                    <td>019515175</td>
                    <td>Experiencia: No necesaria. Se tomará en cuenta si ha […]</td>
                    <td>2018-11-27 16:16:13</td>
                    <td class="Rechazada">Rechazada</td>
                </tr>

                <tr id="tabla-fin">
                    <th colspan="7">Total de Empresas: </th>
                </tr>
            </table>
            <!--fin de la tabla-->
            <!--Inicio de la paginacion de la pagina-->
            <div class="pagination">
                <ul>
                    <a href="#"><li class="otrasPaginas">Anterior</li></a>
                    <a href="#"><li class="otrasPaginas">1</li></a>
                    <a href="#"><li class="paginasActual">2</li></a>
                    <a href="#"><li class="otrasPaginas">3</li></a>
                    <a href="#"><li class="otrasPaginas">Siguiente</li></a>
                </ul>
            </div>
            <!--fin de la paginación-->
            
        </center>
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
    
</body>
</html>
