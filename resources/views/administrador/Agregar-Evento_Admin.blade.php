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
    @include('layouts.administrador.header') <!-- Archivo de encabezado reutilizable -->
    
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
    @include('layouts.administrador.footer') <!-- Archivo de encabezado reutilizable -->


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