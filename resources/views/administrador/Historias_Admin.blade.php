<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historias - ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/administrador/Historias_Admin.css') }}">

</head>
<body>
    @include('layouts.header')
    <section id="contenido">
        <!--Inicio de la segunda barra de navegacion-->
        <div class="form-navbar">
            <div class="submenu">
                <div><a href="Agregar-Historia_Admin.html">
                    <img src="../assets/icons/agregar_r.svg" class="item-r">
                    <span class="fijos">Agregar Historia</span>
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
                    <th>#</th>
                    <th>Título</th>
                    <th>Descripcción</th>
                    <th>Universidad</th>
                    <th>Publicado el...</th>
                </tr>
                <!-- Fin del encabezado-->
                <tr>
                    <td>1</td>
                    <td>Pierre Fermat. 1ª. Etapa.</td>
                    <td>El pasado 3 de septiembre, el alumno Edgar Itaño fue acreedor del primer lugar en el concurso de .Pier.....</td>
                    <td>UMAR</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Alumnos de la UTM en China 2018:Mecatrónica y mini sumos</td>
                    <td>Tras dos años de pruebas y de aprendizaje independiente, los alumnos de la UTM Filiberto Martinez y ....</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Alumnos de la UTM lanzan revsita digital:Revista Universo Estudiantil</td>
                    <td>Con el proposito de difundir y compartr, la revista nace como un proyecto academico y ha evolucionado....</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Saraí Silva conquista Vouge: Chulada en edición de septiembre</td>
                    <td>La marca de accesorios Chulada, fundada por la egresada de Ingenieria en Diseño, Saraí Silva, formo parte de la ....</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Yoari Chao y Hilo de Nube 2020</td>
                    <td>Con el proposito de difundir y compartr, la revista nace como un proyecto academico y ha evolucionado....</td>
                    <td>UMAR</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Premio Enterpenuer 2020: Mujer Emprendedora</td>
                    <td>La marca de accesorios Chulada, fundada por la egresada de Ingenieria en Diseño, Saraí Silva, formo parte de la ....</td>
                    <td>UMAR</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Pierre Fermat. 1ª. Etapa.</td>
                    <td>Tras dos años de pruebas y de aprendizaje independiente, los alumnos de la UTM Filiberto Martinez y ....</td>
                    <td>UNCOS</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Premio Emprendedor Unviersitario 2020:Pablo Hernández</td>
                    <td>El alumno Pablo Hernández fue seleccionado como finalista en la convocatoria expedida por la IODEMC para el ....</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Egresada de Electrónica y Mecatrónica gana 10° concurso de Min</td>
                    <td>La marca de accesorios Chulada, fundada por la egresada de Ingenieria en Diseño, Saraí Silva, formo parte de la ....</td>
                    <td>UMAR</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>UNCOS aga etapa final</td>
                    <td>Tras dos años de pruebas y de aprendizaje independiente, los alumnos de la UTM Filiberto Martinez y ....</td>
                    <td>UNCOS</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>4° Encuentro Universitario de Ingeniería Industrial</td>
                    <td>Con el proposito de difundir y compartr, la revista nace como un proyecto academico y ha evolucionado....</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>VI Semana de Electrónica y Mecatrónica y 10° concurso de Min</td>
                    <td>La marca de accesorios Chulada, fundada por la egresada de Ingenieria en Diseño, Saraí Silva, formo parte de la ....</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                

                <tr id="tabla-fin">
                    <th colspan="5">Total de historias: 72</th>
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
