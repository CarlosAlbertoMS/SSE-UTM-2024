<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos - ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/administrador/Eventos_Admin.css') }}">
</head>

<body>

    @include('layouts.administrador.header')

    <section id="contenido">
        <!--Inicio de la segunda barra de navegacion-->
        <div class="form-navbar">
            <div class="submenu">
                <div><a href="Agregar-Evento_Admin.html">
                        <img src="../assets/icons/agregar_r.svg" class="item-r">
                        <span class="fijos">Agregar Evento</span>
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
                <div><a href="">
                        <img src="../assets/icons/editar_oferta.svg" class="item-r">
                        <span class="nofijos">Editar</span>
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
                <input class="texto-busqueda" type="text" placeholder="Buscar...">
                <button class="btn-btn-warning" type="submit"><img src="../assets/icons/Buscar_B.PNG"></button>
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
                    <th>#</th>
                    <th>Nombre del evento</th>
                    <th>Lugar</th>
                    <th>Categoría</th>
                    <th>Fecha de inicio</th>
                    <th>Fecha de fin</th>
                </tr>
                <!-- Fin del encabezado-->
                <tr>
                    <td>1</td>
                    <td>Pierre Fermat. 1ª. Etapa.</td>
                    <td>Instalaciones de la UTM</td>
                    <td>Académico</td>
                    <td>2020-09-03</td>
                    <td>2020-09-05</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Premiación de la Olimpiada Mexicana de Matemáticas Oaxaca</td>
                    <td>Instalaciones de la UTM</td>
                    <td>Académico</td>
                    <td>2020-09-03</td>
                    <td>2020-09-05</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>4° Encuentro Universitario de Ingeniería Industrial</td>
                    <td>Instalaciones de la UTM</td>
                    <td>Académico</td>
                    <td>2020-09-03</td>
                    <td>2020-09-05</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>VI Semana de Electrónica y Mecatrónica y 10° concurso de Min</td>
                    <td>Instalaciones de la UTM</td>
                    <td>Académico</td>
                    <td>2020-09-03</td>
                    <td>2020-09-05</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Pierre Fermat. 1ª. Etapa.</td>
                    <td>Instalaciones de la UTM</td>
                    <td>Académico</td>
                    <td>2020-09-03</td>
                    <td>2020-09-05</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Premiación de la Olimpiada Mexicana de Matemáticas Oaxaca</td>
                    <td>Instalaciones de la UTM</td>
                    <td>Académico</td>
                    <td>2020-09-03</td>
                    <td>2020-09-05</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>4° Encuentro Universitario de Ingeniería Industrial</td>
                    <td>Instalaciones de la UTM</td>
                    <td>Académico</td>
                    <td>2020-09-03</td>
                    <td>2020-09-05</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>VI Semana de Electrónica y Mecatrónica y 10° concurso de Min</td>
                    <td>Instalaciones de la UTM</td>
                    <td>Académico</td>
                    <td>2020-09-03</td>
                    <td>2020-09-05</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Pierre Fermat. 1ª. Etapa.</td>
                    <td>Instalaciones de la UTM</td>
                    <td>Académico</td>
                    <td>2020-09-03</td>
                    <td>2020-09-05</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Premiación de la Olimpiada Mexicana de Matemáticas Oaxaca</td>
                    <td>Instalaciones de la UTM</td>
                    <td>Académico</td>
                    <td>2020-09-03</td>
                    <td>2020-09-05</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>4° Encuentro Universitario de Ingeniería Industrial</td>
                    <td>Instalaciones de la UTM</td>
                    <td>Académico</td>
                    <td>2020-09-03</td>
                    <td>2020-09-05</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>VI Semana de Electrónica y Mecatrónica y 10° concurso de Min</td>
                    <td>Instalaciones de la UTM</td>
                    <td>Académico</td>
                    <td>2020-09-03</td>
                    <td>2020-09-05</td>
                </tr>


                <tr id="tabla-fin">
                    <th colspan="6">Total de eventos: 72</th>
                </tr>
            </table>
            <!--fin de la tabla-->
            <!--Inicio de la paginacion de la pagina-->
            <div class="pagination">
                <ul>
                    <a href="#">
                        <li class="otrasPaginas">Anterior</li>
                    </a>
                    <a href="#">
                        <li class="otrasPaginas">1</li>
                    </a>
                    <a href="#">
                        <li class="paginasActual">2</li>
                    </a>
                    <a href="#">
                        <li class="otrasPaginas">3</li>
                    </a>
                    <a href="#">
                        <li class="otrasPaginas">Siguiente</li>
                    </a>
                </ul>
            </div>
            <!--fin de la paginación-->

        </center>
    </section>

    @include('layouts.administrador.footer') <!-- Archivo de encabezado reutilizable -->

</body>

</html>