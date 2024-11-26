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