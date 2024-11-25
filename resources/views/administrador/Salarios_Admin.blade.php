<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salarios - ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/administrador/Salarios_Admin.css') }}">

</head>
<body>
    

    @include('layouts.header')
    
    <section id="contenido">
        <!--Inicio de la segunda barra de navegacion-->
        <div class="form-navbar">
            <div class="submenu">
                <div><a href="Agregar-Salario_Admin.html">
                    <img src="../assets/icons/agregar_r.svg" class="item-r">
                    <span class="fijos">Agregar Salario</span>
                    </a>
                </div>
                <div><a href="">
                    <img src="../assets/icons/u164.svg" class="item-r">
                    <span class="fijos">Descargar PDF</span>
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
                    <th>Título del empleo</th>
                    <th>Carrera</th>
                    <th>Experiencia</th>
                    <th>Monto mínimo mensual</th>
                    <th>Monto máximo mensual</th>
                </tr>
                <!-- Fin del encabezado-->
                <tr>
                    <td>Ingeniero en electrónica</td>
                    <td>Ingeniería en Electronica</td>
                    <td>Cero años</td>
                    <td>$12,000</td>
                    <td>$13,000</td>
                </tr>
                <tr>
                    <td>Electromecánico</td>
                    <td>Ingeniería en Mecánica Automotríz</td>
                    <td>Tres años</td>
                    <td>$8,000</td>
                    <td>$18,000</td>
                </tr>
                <tr>
                    <td>Eléctrico automotríz</td>
                    <td>Ingeniería en Mecánica Automotríz</td>
                    <td>Dos años</td>
                    <td>$8,000</td>
                    <td>$12,000</td>
                </tr>
                <tr>
                    <td>Mecánico diesel</td>
                    <td>Ingeniería en Mecánica Automotríz</td>
                    <td>Dos años</td>
                    <td>$12,000</td>
                    <td>$16,000</td>
                </tr>
                <tr>
                    <td>Pintor automotriz</td>
                    <td>Ingeniería en Mecánica Automotríz</td>
                    <td>Dos años</td>
                    <td>$15,000</td>
                    <td>$15,000</td>
                </tr>
                <tr>
                    <td>Gerente de ventas</td>
                    <td>Licenciatura en Ciencias empresariales
                    <td>Seis años</td>
                    <td>$12,000</td>
                    <td>$13,000</td>
                </tr>
                <tr>
                    <td>Ejecutivo de ventas</td>
                    <td>Licenciatura en Ciencias empresariales</td>
                    <td>Cinco años</td>
                    <td>$8,000</td>
                    <td>$18,000</td>
                </tr>
                <tr>
                    <td>Auxiliar de finanzas</td>
                    <td>Licenciatura en Ciencias empresariales</td>
                    <td>Dos años</td>
                    <td>$8,000</td>
                    <td>$12,000</td>
                </tr>
                <tr>
                    <td>Analista financiero</td>
                    <td>Licenciatura en Ciencias empresariales</td>
                    <td>Cuatro  años</td>
                    <td>$12,000</td>
                    <td>$16,000</td>
                </tr>
                <tr>
                    <td>Gerente de recursos humanos</td>
                    <td>Licenciatura en Ciencias empresariales</td>
                    <td>Tres  años</td>
                    <td>$15,000</td>
                    <td>$15,000</td>
                </tr>
                <tr>
                    <td>Ingeniero en diseño</td>
                    <td>Ingeniería en diseño</td>
                    <td>Dos años</td>
                    <td>$12,000</td>
                    <td>$16,000</td>
                </tr>
                <tr>
                    <td>Ingeniero Mecánico</td>
                    <td>Ingeniería en Mecánica Automotríz</td>
                    <td>Dos años</td>
                    <td>$15,000</td>
                    <td>$15,000</td>
                </tr>

                <tr id="tabla-fin">
                    <th colspan="5">Total de salarios: 72</th>
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
