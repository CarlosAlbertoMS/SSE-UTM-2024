# SSEyB | Vistas/Views para el administrador

![This is an alt text.](utm_u31.png "Imagen insana")

### Nombre:
##### Bacilio Anota Marvin Salvador
### Fecha:
##### 15 de noviembre de 2024
___

# **Vistas/Views**
Directorio en el proyecto
> SSE\resources\views

## **Agregar-Historia_Admin**
> `/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Agregar-Historia_Admin.blade.php`

![This is an alt text.](Agregar-Historia_Admin.png "Imagen insana")

<!-- mdinclude: /home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Agregar-Historia_Admin.blade.php -->

[Nombre del archivo](/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Agregar-Historia_Admin.blade.php)

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Configuración básica del documento -->
    <meta charset="UTF-8"> <!-- Codificación de caracteres en UTF-8 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Compatibilidad con navegadores antiguos -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Diseño responsivo -->
    <title>Agregar Historia - ADMIN</title> <!-- Título de la página -->

    <!-- Archivos de estilos -->
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}"> <!-- Estilo general -->
    <link rel="stylesheet" href="{{ asset('css/administrador/Agregar-Historia_Admin.css') }}"> <!-- Estilo específico para esta página -->
</head>
<body>
    
    @include('layouts.header') <!-- Archivo de encabezado reutilizable -->

    <!-- Sección principal de contenido -->
    <section id="contenido">
        <form>
            <!-- Título de la sección -->
            <div class="divh1">
                <h1>Crear Historia de Éxito</h1>
            </div>

            <div class="divcmp">
                <!-- Área para agregar una imagen -->
                <div class="formimg">
                    <div class="brandname">
                        <div class="container--fondo">
                            <img src="../assets/img/normal_u764.svg"  alt="" /> <!-- Imagen predeterminada -->
                            <div class="file-select"  id="src-file1">
                                <input  type="file" name="src-file1" aria-label="Archivo"> <!-- Entrada para cargar archivo -->
                            </div>
                        </div>
                        <!-- Botón para editar o cambiar la imagen -->
                        <div class="tamaño">
                            <a class="editar" href="">
                                <img src="../assets/icons/editar_oferta.svg" class="item-r"> <!-- Icono de editar -->
                                <span class="nofijos">Editar/Cambiar foto</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Área de campos de formulario -->
                <div class="formcamp">
                    <!-- Línea de campos: Título y Universidad -->
                    <div class="linea">
                        <div class="campo">
                            <div><label for="uname">Título</label></div> <!-- Etiqueta para el título -->
                            <div><input type="text" id="uname" name="name" placeholder="Título de la historia"></div> <!-- Entrada para el título -->
                        </div>
                        <div class="campo">
                            <div><label for="uname">Universidad</label></div> <!-- Etiqueta para la universidad -->
                            <div><input type="text" id="uname" name="name" placeholder="Universidad.."></div> <!-- Entrada para la universidad -->
                        </div>
                    </div>

                    <!-- Línea de campo: Descripción del evento -->
                    <div class="linea">
                        <div class="campo">
                            <div><label for="uname">Descripcción del evento</label></div> <!-- Etiqueta para la descripción -->
                            <div>
                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Descripcción del evento.."></textarea> <!-- Área de texto -->
                            </div>
                        </div>
                    </div>

                    <!-- Botones de acción -->
                    <div class="formbutt">
                        <a href="Historias_Admin.html"><button class="cancelarbtn">Cancelar</button></a> <!-- Botón de cancelar -->
                        <a href="#popup"><button class="guardarbtn">Guardar</button></a> <!-- Botón de guardar -->
                    </div>
                </div>
            </div>
        </form>
    </section>
 
    <!-- Pie de página -->
    <footer>
        <!-- Imagen del pie de página -->
        <section id="suneo-img">
            <img src="../assets/img/u26.png">
        </section>

        <!-- Información adicional -->
        <section id="info-acercade">
            <!-- Menú de enlaces -->
            <nav id="menu-info-acercade">
                <ul>
                    <li><a href="#">Sobre SUNEO</a></li>
                    <li><a href="#">Privacidad</a></li>
                    <li><a href="#">Empresas</a></li>
                    <li><a href="#">Ayuda</a></li>
                </ul>
            </nav>

            <!-- Texto de contacto -->
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

    <!-- Ventana emergente de confirmación -->
    <div id="popup" class="overlay">
        <div id="popupBody">
            <div>
                <h2>Mensaje</h2>
                <p>¡Enhorabuena!, Cambios guardados con éxito</p> <!-- Mensaje de éxito -->
                <a id="cerrar" href="Historias_Admin.html"><div>Cerrar</div></a> <!-- Botón para cerrar el popup -->
            </div>
        </div>
    </div>
    
</body>
</html>

```

## **Historias_Admin**
> `/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Historias_Admin.blade.php`

![This is an alt text.](Historias_Admin.png "Imagen insana")

<!-- mdinclude: /home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Historias_Admin.blade.php -->

[Nombre del archivo](/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Historias_Admin.blade.php)

```html
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

```

## **Agregar-Salario_Admin**
> `/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Agregar-Salario_Admin.blade.php`

![This is an alt text.](Agregar-Salario_Admin.png "Imagen insana")

<!-- mdinclude: /home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Agregar-Salario_Admin.blade.php -->

[Nombre del archivo](/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Agregar-Salario_Admin.blade.php)

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar salario - ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/administrador/Agregar-Salario_Admin.css') }}">
</head>
<body>
    
    @include('layouts.header')


    <section id="contenido">
        
        <form>
            <div class="formcamp">
                <div class="linea">
                    <div class="campo">
                        <div><label for="uname">Título del empleo</label></div>
                        <div><input type="text" id="uname" name="name" placeholder="Título del empleo"></div>
                    </div>
                    <div class="campo">
                        <div><label for="uname">Experiencia</label></div>
                        <div><input type="text" id="uname" name="name" placeholder="Años de experiencia"></div>
                    </div>
                </div>
                <div class="linea">
                    <div class="campo">
                        <div><label for="uname">Carrera</label></div>
                        <div><input type="text" id="uname" name="name" placeholder="Carrera"></div>
                    </div>
                    <div class="linea">
                        <div class="campo">
                            <div><label for="uname">Monto mínimo mensual</label></div>
                            <div class="campo2"><input type="text" id="uname" name="name" placeholder="Monto mínimo"></div>
                        </div>
                        <div class="campo">
                            <div><label for="uname">Monto máximo mensual</label></div>
                            <div class="campo2"><input type="text" id="uname" name="name" placeholder="Monto máximo"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="formbutt">
                <a href="Salarios_Admin.html"><button class="cancelarbtn">Cancelar</button></a>
                <a href="#popup"><button class="guardarbtn">Guardar</button></a>
            </div>
        </form>
        
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
    
    <div id="popup" class="overlay">
        <div id="popupBody">
            <div>
                <h2>Mensaje</h2>
                <p>¡Enhorabuena!, Cambios guardados con éxito</p>
                <a id="cerrar" href="Salarios_Admin.html"><div>Cerrar</div></a>
            </div>
        </div>
    </div>
    
</body>
</html>

```

## **Egresados_Admin-Agregar-Lote**
> `/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Egresados_Admin-Agregar-Lote.blade.php`

![This is an alt text.](Egresados_Admin-Agregar-Lote.png "Imagen insana")

<!-- mdinclude: /home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Egresados_Admin-Agregar-Lote.blade.php -->

[Nombre del archivo](/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Egresados_Admin-Agregar-Lote.blade.php)

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egresados - ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/administrador/Egresados_Admin-Agregar-Lote.css') }}">
</head>
<body>
    @include('layouts.header')
    <section id="contenido">
        <!--
            TU CODIGO AQUI
        -->
        <p class="txt-titulo">Instrucciones para subir lote</p>
        <form action="">
            <p class="txt-indicacion">Texto donde se especifica el tipo de archivo que se usará para subir los datos.</p>
            <div class="contenedor-inputs">
                <div class="contenedor-seleccionar-archivos" id="contenedor-seleccionar-archivos">
                    <input type="file" name="seleccionar-archivo" id="btn-seleccionar-archivo" class="btn-seleccionar-archivo">
                </div>
                <input type="text" name="nombre-archivo" id="" placeholder="Nombre del archivo" class="input-nombre-archivo">
            </div>

            <p class="txt-sobre-datos">
                A continuación crearemos el fichero de texto plano (sin formato) que contendrá los registros que serán importados de forma automática en la tabla "importación" utilizando la función LOAD DATA de MySQL. Para ello crearemos un fichero (con el bloc de notas o cualquier otro editor de texto sin formato) con el siguiente contenido:
            </p>
            <ul class="txt-datos-a-cargar">
                <li>
                    1,"Fernando Alonso",2003-06-04,1000.20,"Prueba importación fichero 1","N"
                </li>
                <li>
                    2,"Alonso Fernando",2008-08-31,900.34,"Prueba importación fichero 2","S"
                </li>
                <li>
                    3,"Juan Pérez",2008-09-01,700.00,"Prueba importación fichero 3","S"
                </li>
            </ul>
            <div class="contenedor-botones">
                <a href="Egresados_Admin.html">
                    ***
                    <input type="submit" value="Cancelar" class="btn-cancelar">
                </a>           
                <a href="#mensaje-archivo-subido">
                    ***
                    <input type="submit" value="Subir" class="btn-subir">
                </a>
            </div>
        </form>
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

    <div id="mensaje-archivo-subido" class="overlay">
        <div id="cuerpo-pop-up">
            <div>
                <p>Se ha subido con éxito.</p>
                <a id="cerrar" href="Egresados_Admin.html"><div>Aceptar</div></a>
            </div>
        </div>
    </div>
    
</body>
</html>

```

## **Ofertas_Admin**
> `/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Ofertas_Admin.blade.php`

![This is an alt text.](Ofertas_Admin.png "Imagen insana")

<!-- mdinclude: /home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Ofertas_Admin.blade.php -->

[Nombre del archivo](/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Ofertas_Admin.blade.php)

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas - ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/administrador/Ofertas_Admin.css') }}">

</head>
<body>
    @include('layouts.header')
    <section id="contenido">
        <!--Inicio de la segunda barra de navegacion-->
        <div class="form-navbar">
            <div class="submenu">
                <div><a href="">
                    <img src="../assets/icons/validar_oferta.svg" class="item-r">
                    <span class="fijos">Validar Oferta</span>
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
                    <th>Id</th>
                    <th>Puesto</th>
                    <th>Empresa</th>
                    <th>Carrera</th>
                    <th>Ubicación</th>
                    <th>Descripcción</th>
                    <th>Estado de la oferta</th>
                </tr>
                <!-- Fin del encabezado-->
                <tr>
                    <td>1</td>
                    <td>Analista de proyectos</td>
                    <td>Puertas finas de madera Montealban S.A. de C.V.</td>
                    <td>Ingeniería en Diseño</td>
                    <td>Oaxaca de Juárez</td>
                    <td>Experiencia: No necesaria. Se tomará en cuenta si ha […]</td>
                    <td class="Nueva">Nueva Oferta</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Consultor funcional bilingüe</td>
                    <td>gA-Grupo ASSA</td>
                    <td>Ingeniería en Computación</td>
                    <td>CDMX</td>
                    <td>Disponibilidad de horario (full-time), facilidad para radicar en [...]</td>
                    <td class="Nueva">Nueva Oferta</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Supervisor administrativo</td>
                    <td>Cervecería Modelo Mixteca S.A. de C.V.</td>
                    <td>Lic. en Ciencias Empresariales</td>
                    <td>Huajuapan de León, Oaxaca</td>
                    <td>Habituado a trabajo de campo. • Saber entablar una [...]</td>
                    <td class="Aceptada">Aceptada</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Documentador</td>
                    <td>Desarrollos Orientados a Eficiencia, S.A. de C.V.</td>
                    <td>Ingeniería en Computación</td>
                    <td>Oaxaca de Juárez</td>
                    <td>Realizar manuales de usuario y manuales técnicos se te [...]</td>
                    <td class="Aceptada">Aceptada</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Analista de proyectos</td>
                    <td>Puertas finas de madera Montealban S.A. de C.V.</td>
                    <td>Ingeniería en Diseño</td>
                    <td>Oaxaca de Juárez</td>
                    <td>Experiencia: No necesaria. Se tomará en cuenta si ha […]</td>
                    <td class="Aceptada">Aceptada</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Consultor funcional bilingüe</td>
                    <td>gA-Grupo ASSA</td>
                    <td>Ingeniería en Computación</td>
                    <td>CDMX</td>
                    <td>Disponibilidad de horario (full-time), facilidad para radicar en [...]</td>
                    <td class="Aceptada">Aceptada</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Supervisor administrativo</td>
                    <td>Cervecería Modelo Mixteca S.A. de C.V.</td>
                    <td>Lic. en Ciencias Empresariales</td>
                    <td>Huajuapan de León, Oaxaca</td>
                    <td>Habituado a trabajo de campo. • Saber entablar una [...]</td>
                    <td class="Aceptada">Aceptada</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Documentador</td>
                    <td>Desarrollos Orientados a Eficiencia, S.A. de C.V.</td>
                    <td>Ingeniería en Computación</td>
                    <td>Oaxaca de Juárez</td>
                    <td>Realizar manuales de usuario y manuales técnicos se te [...]</td>
                    <td class="Aceptada">Aceptada</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Analista de proyectos</td>
                    <td>Puertas finas de madera Montealban S.A. de C.V.</td>
                    <td>Ingeniería en Diseño</td>
                    <td>Oaxaca de Juárez</td>
                    <td>Experiencia: No necesaria. Se tomará en cuenta si ha […]</td>
                    <td class="Proceso">En proceso</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Consultor funcional bilingüe</td>
                    <td>gA-Grupo ASSA</td>
                    <td>Ingeniería en Computación</td>
                    <td>CDMX</td>
                    <td>Disponibilidad de horario (full-time), facilidad para radicar en [...]</td>
                    <td class="Proceso">En proceso</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Supervisor administrativo</td>
                    <td>Cervecería Modelo Mixteca S.A. de C.V.</td>
                    <td>Lic. en Ciencias Empresariales</td>
                    <td>Huajuapan de León, Oaxaca</td>
                    <td>Habituado a trabajo de campo. • Saber entablar una [...]</td>
                    <td class="Rechazada">Rechazada</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Documentador</td>
                    <td>Desarrollos Orientados a Eficiencia, S.A. de C.V.</td>
                    <td>Ingeniería en Computación</td>
                    <td>Oaxaca de Juárez</td>
                    <td>Realizar manuales de usuario y manuales técnicos se te [...]</td>
                    <td class="Rechazada">Rechazada</td>
                </tr>

                <tr id="tabla-fin">
                    <th colspan="4">Total de ofertas aceptadas: 35</th>
                    <th colspan="3">Total de ofertas rechazadas: 12</th>
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

```

## **Egresados_Admin-Agregar-Egresado**
> `/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Egresados_Admin-Agregar-Egresado.blade.php`

![This is an alt text.](Egresados_Admin-Agregar-Egresado.png "Imagen insana")

<!-- mdinclude: /home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Egresados_Admin-Agregar-Egresado.blade.php -->

[Nombre del archivo](/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Egresados_Admin-Agregar-Egresado.blade.php)

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Egresados - ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">

    <link rel="stylesheet" href="{{ asset('css/administrador/Egresados_Admin-Agregar-Egresado.css') }}">    
</head>
<body>
    @include('layouts.header')
    <section id="contenido">
        <!--
            TU CODIGO AQUI
        -->
        <center>
            <!--Inicio del formulario-->
            <p class="titulo-contenido">Agregar Egresado(a)</p>
            <form action="">
                <!--Parte 1 formulario-->
                <div class="seccion-1-formulario">
                    <div class="contenedor__input-label nombre">
                        <label for="nombre">*Nombre(s)</label>
                        <input type="text" name="nombre" id="" placeholder="Ingrese nombre del egresado">
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label">
                            <label for="apellido-paterno">Apellido Paterno</label>
                            <input type="text" name="apellido-paterno" id="" placeholder="Apellido paterno">
                        </div>
                        <div class="contenedor__input-label">
                            <label for="apellido-materno">Apellido Materno</label>
                            <input type="text" name="apellido-materno" id="" placeholder="Apellido materno">    
                        </div>
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label curp">
                            <label for="curp">Curp</label>
                            <input type="text" name="curp" id="" placeholder="Ingrese curp del egresado">
                        </div>
                        <div class="contenedor__input-label">
                            <label for="opciones-genero">Género</label>
                            <select name="opciones-genero">
                                <option value="ingenieria-alimentos" selected="selected">Masculino</option>
                                <option value="ingenieria-computacion">Femenino</option>
                                <option value="ingenieria-agroindustrial">Sin especificar</option>
                            </select>
                        </div>
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label">
                            <label for="fecha-nacimiento">Fecha de nacimiento</label>
                            <input type="text" name="fecha-nacimiento" id="fecha-nacimiento" placeholder="dd/mm/aa">
                        </div>
                        <div class="contenedor__input-label">
                            <label for="nacionalidad">Nacionalidad</label>
                            <select name="opciones-nacionalidad">
                                <option value="mexicana" selected="selected">Mexicana</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                    </div>
                    <div class="contenedor__input-label lugar-origen">
                        <label for="lugar-origen">Lugar de origen</label>
                        <input type="text" name="lugar-origen" id="" placeholder="Lugar de origen">
                    </div>              
                    <p class="txt-campos-obligatorios">*Campos obligatorios</p>
                </div>
            
                <!--Parte 2 formulario-->
                <div class="seccion-2-formulario">
                    <div class="contenedor__input-label contenedor-carrera">
                        <label for="opciones-carrera">*Carrera</label>
                        <select name="opciones-carrera">
                            <option value="ingenieria-alimentos" selected="selected">Ingeniería en Alimentos</option>
                            <option value="ingenieria-computacion">Ingeniería en Computación</option>
                            <option value="ingenieria-agroindustrial">Ingeniería agroindustrial</option>
                            <option value="ingenieria-diseño">Ingeniería en Diseño</option>
                        </select>
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label">
                            <label for="matricula">*Matrícula</label>
                            <input type="number" name="matricula" id="" placeholder="Ingrese la matrícula">
                        </div>
                        <div class="contenedor__input-label">
                            <label for="generacion">*Generación</label>
                            <input type="text" name="generacion" id="" placeholder="Ingrese generación">
                        </div>
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label">
                            <label for="fecha-inicio-estudios">Fecha de inicio de estudios</label>
                            <input type="text" name="fecha-inicio-estudios" id="" placeholder="dd/mm/aa">
                        </div>
                        <div class="contenedor__input-label">
                            <label for="fecha-fin-estudios">Fecha de fin de estudios</label>
                            <input type="text" name="fecha-fin-estudios" id="" placeholder="dd/mm/aa">
                        </div>
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label">
                            <label for="forma-titulacion">Forma de titulación</label>
                            <select name="forma-titulacion">
                                <option value="tesis" selected="selected">Tesis</option>
                                <option value="sin-titulacion">Sin titulación</option>
                                <option value="Ceneval">Ceneval</option>
                            </select>
                        </div>
                        <div class="contenedor__input-label">
                            <label for="fecha-titulacion">Fecha de titulación</label>
                            <input type="text" name="fecha-titulacion" id="" placeholder="dd/mm/aa">
                        </div>
                    </div>
                    <div class="contenedor__input-label contenedor-promedio">
                        <label for="promedio">*Promedio</label>
                        <input type="text" name="promedio" id="" placeholder="Promedio">
                    </div>
                    <div class="contenedor__input-label contenedor-botones">
                        <a href="Egresados_Admin.html">
                            <input type="submit" value="Cancelar" class="btn-cancelar" id="btn-cancelar">
                        </a>
                        
                        <a href="#mensaje-egresado-agregado">
                            ***
                            <input type="submit" value="Guardar" class="btn-guardar" id="btn-guardar">
                        </a>
                    </div>
                </div>
            </form>
            <!--Fin del formulario-->
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

    <div id="mensaje-egresado-agregado" class="overlay">
        <div id="cuerpo-pop-up">
            <div>
                <h2>Mensaje</h2>
                <p>¡Enhorabuena!, Cambios guardados con éxito</p>
                <a id="cerrar" href="Egresados_Admin.html"><div>Cerrar</div></a>
            </div>
        </div>
    </div>
    
</body>
</html>
```

## **Salarios_Admin**
> `/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Salarios_Admin.blade.php`

![This is an alt text.](Salarios_Admin.png "Imagen insana")

<!-- mdinclude: /home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Salarios_Admin.blade.php -->

[Nombre del archivo](/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Salarios_Admin.blade.php)

```html
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

```

## **Agregar-Evento_Admin**
> `/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Agregar-Evento_Admin.blade.php`

![This is an alt text.](Agregar-Evento_Admin.png "Imagen insana")

<!-- mdinclude: /home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Agregar-Evento_Admin.blade.php -->

[Nombre del archivo](/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Agregar-Evento_Admin.blade.php)

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Configuración básica del documento -->
    <meta charset="UTF-8"> <!-- Codificación de caracteres -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Compatibilidad con IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Diseño responsivo -->
    
    <!-- Título de la página -->
    <title>Agregar Evento - ADMIN</title>

    <!-- Archivos CSS -->
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}"> <!-- Estilos generales -->
    <link rel="stylesheet" href="{{ asset('css/administrador/Agregar-Evento_Admin.css') }}"> <!-- Estilos específicos para la página -->
    <link rel="stylesheet" href="Agregar-Evento_Admin.css"> <!-- Redundante, probablemente no necesario -->
</head>
<body>
    <!-- Encabezado del sitio -->
    @include('layouts.header') <!-- Archivo de encabezado reutilizable -->

    <!-- Contenido principal -->
    <section id="contenido">
        <form>
            <!-- Sección de imagen del evento -->
            <div class="formimg">
                <div class="brandname">
                    <div class="container--fondo">
                        <!-- Imagen predeterminada -->
                        <img src="../assets/img/normal_u764.svg" alt="" />
                        <!-- Input para cargar una imagen -->
                        <div class="file-select" id="src-file1">
                            <input type="file" name="src-file1" aria-label="Archivo">
                        </div>
                    </div>
                    <!-- Opción para editar o cambiar la imagen -->
                    <div class="tamaño">
                        <a class="editar" href="">
                            <img src="../assets/icons/editar_oferta.svg" class="item-r">
                            <span class="nofijos">Editar/Cambiar foto</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sección de campos del formulario -->
            <div class="formcamp">
                <!-- Primera línea de campos -->
                <div class="linea">
                    <!-- Campo: Nombre del evento -->
                    <div class="campo">
                        <div><label for="uname">Nombre del evento</label></div>
                        <div><input type="text" id="uname" name="name" placeholder="Título del empleo"></div>
                    </div>
                    <!-- Campo: Universidad -->
                    <div class="campo">
                        <div><label for="uname">Universidad</label></div>
                        <div><input type="text" id="uname" name="name" placeholder="Años de experiencia"></div>
                    </div>
                </div>

                <!-- Segunda línea de campos -->
                <div class="linea">
                    <!-- Campo: Categoría del evento -->
                    <div class="campo">
                        <div><label for="uname">Categoría del evento</label></div>
                        <div><input type="text" id="uname" name="name" placeholder="Carrera"></div>
                    </div>
                    <!-- Campos: Fechas de inicio y fin -->
                    <div style="display:flex;justify-content:space-between; width:310px;">
                        <div class="campo">
                            <div><label for="uname">Fecha de inicio</label></div>
                            <div class="campo2"><input class="fecha" type="date" name="date"></div>
                        </div>
                        <div class="campo">
                            <div><label for="uname">Fecha de fin</label></div>
                            <div class="campo2"><input class="fecha" type="date" name="date"></div>
                        </div>
                    </div>
                </div>

                <!-- Tercera línea de campos -->
                <div class="linea">
                    <!-- Campo: Descripción del evento -->
                    <div class="campo">
                        <div><label for="uname">Descripción del evento</label></div>
                        <div>
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Descripción del evento.."></textarea>
                        </div>
                    </div>
                </div>

                <!-- Botones del formulario -->
                <div class="formbutt">
                    <a href="Eventos_Admin.html"><button class="cancelarbtn" type="button">Cancelar</button></a>
                    <a href="#popup"><button class="guardarbtn" type="button">Guardar</button></a>
                </div>
            </div>
        </form>
    </section>
    
    <!-- Pie de página -->
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

    <!-- Ventana emergente -->
    <div id="popup" class="overlay">
        <div id="popupBody">
            <div>
                <h2>Mensaje</h2>
                <p>¡Enhorabuena!, Cambios guardados con éxito</p>
                <a id="cerrar" href="Eventos_Admin.html"><div>Cerrar</div></a>
            </div>
        </div>
    </div>
</body>
</html>
```

## **Estadisticas_Admin**
> `/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Estadisticas_Admin.blade.php`

![This is an alt text.](Estadisticas_Admin.png "Imagen insana")

<!-- mdinclude: /home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Estadisticas_Admin.blade.php -->

[Nombre del archivo](/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Estadisticas_Admin.blade.php)

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadisticas - ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/administrador/Estadisticas_Admin.css') }}">

</head>
<body>
    @include('layouts.header')


    <section id="contenido">
        
        <!--
            TU CODIGO AQUI
        -->
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

```

## **Empresas_Admin**
> `/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Empresas_Admin.blade.php`

![This is an alt text.](Empresas_Admin.png "Imagen insana")

<!-- mdinclude: /home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Empresas_Admin.blade.php -->

[Nombre del archivo](/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Empresas_Admin.blade.php)

```html
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

```

## **Eventos_Admin**
> `/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Eventos_Admin.blade.php`

![This is an alt text.](Eventos_Admin.png "Imagen insana")

<!-- mdinclude: /home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Eventos_Admin.blade.php -->

[Nombre del archivo](/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Eventos_Admin.blade.php)

```html
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
    
    @include('layouts.header')

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

```

## **vista**
> `/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/vista.blade.php`

![This is an alt text.](vista.png "Imagen insana")

<!-- mdinclude: /home/d/Desktop/SSE-UTM-2024/resources/views/administrador/vista.blade.php -->

[Nombre del archivo](/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/vista.blade.php)

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TITULO</title>
    <link rel="stylesheet" href="../estilo.css">
    <link rel="stylesheet" href="vista.css">
</head>
<body>
    
    <header>
        <div id="header--encabezado">
            <img id="header--img1" src="../assets/img/u43.png">
            <div id="header--titulo">
                Sistema de Seguimiento de Egresados y Bolsa de Trabajo
            </div>
            <img id="header--img2" src="../assets/img/utm_u31.png">
        </div>

        <div id="header__div--menu">
            <div class="lista">
                <ul>
                    <a href="Egresados_Admin.html" class="pestanaActual"><li>Egresados</li></a>
                    <a href="Empresas_Admin.html" class="otrasPestañas"><li>Empresas</li></a>
                    <a href="Ofertas_Admin.html" class="otrasPestañas"><li>Ofertas Laborales</li></a>
                    <a href="Salarios_Admin.html" class="otrasPestañas"><li >Salarios</li></a>
                    <a href="Eventos_Admin.html" class="otrasPestañas"><li>Eventos</li></a>
                    <a href="Historias_Admin.html" class="otrasPestañas"><li>Historias de Éxito</li></a>
                    <a href="Tips_Admin.html" class="otrasPestañas"><li>Tips y Consejos</li></a>
                    <a href="Estadisticas_Admin.html" class="otrasPestañas"><li>Estadísticas</li></a>
                </ul>
            </div>
            <div class="circulos">
                <a class="header__menu--icons"  href="#"><img src="../assets/icons/help_ofertas.svg" alt="" /></a>
                <a class="header__menu--icons"  href="#"><img src="../assets/icons/Ajustes_B.png" alt="" /></a>
                <a class="header__menu--icons"  href="#"><img src="../assets/img/u462.png" alt="" /></a>
            </div>
        </div>

    </header>

    <section id="contenido">
        <!--Inicio de la segunda barra de navegacion-->
        <div class="form-navbar">
            <div class="submenu">
                <div><a href="">
                    <img src="../assets/icons/normal_u23.svg" class="item-r">
                    <span class="fijos">Agregar egresado</span>
                    </a>
                </div>
                <div><a href="">
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

```

## **Egresados_Admin**
> `/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Egresados_Admin.blade.php`

![This is an alt text.](Egresados_Admin.png "Imagen insana")

<!-- mdinclude: /home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Egresados_Admin.blade.php -->

[Nombre del archivo](/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Egresados_Admin.blade.php)

```html
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
```

## **Tips_Admin**
> `/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Tips_Admin.blade.php`

![This is an alt text.](Tips_Admin.png "Imagen insana")

<!-- mdinclude: /home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Tips_Admin.blade.php -->

[Nombre del archivo](/home/d/Desktop/SSE-UTM-2024/resources/views/administrador/Tips_Admin.blade.php)

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tips y Consejos - ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/administrador/Tips_Admin.css') }}">
</head>
<body>
    

    @include('layouts.header')

    <section id="contenido">
        <!--Inicio de la segunda barra de navegacion-->
        <div class="form-navbar">
            <div class="submenu">
                <div><a href="">
                    <img src="../assets/icons/agregar_r.svg" class="item-r">
                    <span class="fijos">Agregar Tip o Consejo</span>
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
                    <td>Antes de firmar un contrato laboral... ¡Debes hacer lo siguiente!</td>
                    <td>Antes de firmar un contrato laboral, te recomendamos hacer lo siguiente: 1. Léelo detenidamente y más de ...</td>
                    <td>UMAR</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>¡No dejes de aprender!</td>
                    <td>Hoy en día no sólo basta con tener una carrera concluida, hay que contar con maestrías que nos ayuden a ...</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>¡Empieza a crear tu curriculum vitae 2019! Te ayudamos paso a paso.</td>
                    <td>Con el proposito de difundir y compartr, la revista nace como un proyecto academico y ha evolucionado....</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>¿Tu CV te haría destacar sobre otros candidatos?</td>
                    <td>1) Datos personales. Primero lo primero: nombre completo, edad, una dirección de correo electrónico y un numero....</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Antes de firmar un contrato laboral... ¡Debes hacer lo siguiente!</td>
                    <td>Antes de firmar un contrato laboral, te recomendamos hacer lo siguiente: 1. Léelo detenidamente y más de ...</td>
                    <td>UMAR</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>¡No dejes de aprender!</td>
                    <td>Hoy en día no sólo basta con tener una carrera concluida, hay que contar con maestrías que nos ayuden a ...</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>¡Empieza a crear tu curriculum vitae 2019! Te ayudamos paso a paso.</td>
                    <td>Con el proposito de difundir y compartr, la revista nace como un proyecto academico y ha evolucionado....</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>¿Tu CV te haría destacar sobre otros candidatos?</td>
                    <td>1) Datos personales. Primero lo primero: nombre completo, edad, una dirección de correo electrónico y un numero....</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Antes de firmar un contrato laboral... ¡Debes hacer lo siguiente!</td>
                    <td>Antes de firmar un contrato laboral, te recomendamos hacer lo siguiente: 1. Léelo detenidamente y más de ...</td>
                    <td>UMAR</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>¡No dejes de aprender!</td>
                    <td>Hoy en día no sólo basta con tener una carrera concluida, hay que contar con maestrías que nos ayuden a ...</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>¡Empieza a crear tu curriculum vitae 2019! Te ayudamos paso a paso.</td>
                    <td>Con el proposito de difundir y compartr, la revista nace como un proyecto academico y ha evolucionado....</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>¿Tu CV te haría destacar sobre otros candidatos?</td>
                    <td>1) Datos personales. Primero lo primero: nombre completo, edad, una dirección de correo electrónico y un numero....</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                

                <tr id="tabla-fin">
                    <th colspan="5">Total de tips y consejos: 72</th>
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

```

