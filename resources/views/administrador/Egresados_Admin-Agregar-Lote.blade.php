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
    @include('layouts.administrador.header')
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

    @include('layouts.administrador.footer') <!-- Archivo de encabezado reutilizable -->


    <div id="mensaje-archivo-subido" class="overlay">
        <div id="cuerpo-pop-up">
            <div>
                <p>Se ha subido con éxito.</p>
                <a id="cerrar" href="Egresados_Admin.html">
                    <div>Aceptar</div>
                </a>
            </div>
        </div>
    </div>

</body>

</html>