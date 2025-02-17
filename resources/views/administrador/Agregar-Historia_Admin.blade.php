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

    @include('layouts.administrador.header') <!-- Archivoe de encabezado reutilizable -->

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
                            <img src="../assets/img/normal_u764.svg" alt="" /> <!-- Imagen predeterminada -->
                            <div class="file-select" id="src-file1">
                                <input type="file" name="src-file1" aria-label="Archivo"> <!-- Entrada para cargar archivo -->
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
    @include('layouts.administrador.footer') <!-- Archivo de encabezado reutilizable -->


    <!-- Ventana emergente de confirmación -->
    <div id="popup" class="overlay">
        <div id="popupBody">
            <div>
                <h2>Mensaje</h2>
                <p>¡Enhorabuena!, Cambios guardados con éxito</p> <!-- Mensaje de éxito -->
                <a id="cerrar" href="Historias_Admin.html">
                    <div>Cerrar</div>
                </a> <!-- Botón para cerrar el popup -->
            </div>
        </div>
    </div>
</body>
</html>