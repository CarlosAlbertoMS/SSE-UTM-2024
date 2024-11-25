<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/administrador/Egresados_Admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">

</head>
<body>

    @include('layouts.header')
    
    <section id="contenido">
        <!--Inicio de la segunda barra de navegacion-->
        <div class="form-navbar">
            <div class="submenu">

                <div><a href="{{ route('administrador_agregar_egresado') }}">
                    <img src="../assets/icons/normal_u23.svg" class="item-r">
                    <span class="fijos">Agregar egresado</span>
                    </a>
                </div>
                <div><a href="{{ route('administrador_agregar_lote') }}">
                    <img src="../assets/icons/normal_u24.svg" class="item-r">
                    <span class="fijos">Agregar Lote</span>
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
                    <th>Id</th>
                    <th>Matrícula</th>
                    <th>Nombre</th>
                    <th>Carrera</th>
                    <th>Generación</th>
                    <th>Estatus</th>
                </tr>
                <!-- Fin del encabezado-->
                <tr>
                    <td>1</td>
                    <td>2016030171</td>
                    <td>ZURITA JIMENEZ ADRIANA</td>
                    <td>Ingeniería en Diseño</td>
                    <td>2002-2007</td>
                    <td>Contestado parcialmente</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2016030171</td>
                    <td>ZURITA JIMENEZ ADRIANA</td>
                    <td>Ingeniería en Diseño</td>
                    <td>2002-2007</td>
                    <td>Contestado parcialmente</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2016030171</td>
                    <td>ZURITA JIMENEZ ADRIANA</td>
                    <td>Ingeniería en Diseño</td>
                    <td>2002-2007</td>
                    <td>Contestado parcialmente</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>2016030171</td>
                    <td>ZURITA JIMENEZ ADRIANA</td>
                    <td>Ingeniería en Diseño</td>
                    <td>2002-2007</td>
                    <td>Contestado parcialmente</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>2016030171</td>
                    <td>ZURITA JIMENEZ ADRIANA</td>
                    <td>Ingeniería en Diseño</td>
                    <td>2002-2007</td>
                    <td>Contestado parcialmente</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>2016030171</td>
                    <td>ZURITA JIMENEZ ADRIANA</td>
                    <td>Ingeniería en Diseño</td>
                    <td>2002-2007</td>
                    <td>Contestado parcialmente</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>2016030171</td>
                    <td>ZURITA JIMENEZ ADRIANA</td>
                    <td>Ingeniería en Diseño</td>
                    <td>2002-2007</td>
                    <td>Contestado parcialmente</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>2016030171</td>
                    <td>ZURITA JIMENEZ ADRIANA</td>
                    <td>Ingeniería en Diseño</td>
                    <td>2002-2007</td>
                    <td>Contestado parcialmente</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>2016030171</td>
                    <td>ZURITA JIMENEZ ADRIANA</td>
                    <td>Ingeniería en Diseño</td>
                    <td>2002-2007</td>
                    <td>Contestado parcialmente</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>2016030171</td>
                    <td>ZURITA JIMENEZ ADRIANA</td>
                    <td>Ingeniería en Diseño</td>
                    <td>2002-2007</td>
                    <td>Contestado parcialmente</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>2016030171</td>
                    <td>ZURITA JIMENEZ ADRIANA</td>
                    <td>Ingeniería en Diseño</td>
                    <td>2002-2007</td>
                    <td>Contestado parcialmente</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>2016030171</td>
                    <td>ZURITA JIMENEZ ADRIANA</td>
                    <td>Ingeniería en Diseño</td>
                    <td>2002-2007</td>
                    <td>Contestado parcialmente</td>
                </tr>

                

                <tr id="tabla-fin">
                    <th></th>
                    <th>Total de egresados: </th>
                    <th>No ha contestado formulario:</th>
                    <th>Contestado parcialmente: </th>
                    <th></th>
                    <th>Contestado completamente: </th>
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