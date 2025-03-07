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
<script>
    document.getElementById("btn-seleccionar-archivo").addEventListener("change", function () {
        let fileName = this.files[0] ? this.files[0].name : "";
        document.getElementById("nombre_archivo").value = fileName;
    });
</script>
<body>
    @include('layouts.administrador.header')
    <section id="contenido">
        <!--
            TU CODIGO AQUI
        -->
        <p class="txt-titulo">Instrucciones para subir lote</p>
        <form action="{{ route('egresados.cargarEgresadosExcel') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <p class="txt-indicacion">Texto donde se especifica el tipo de archivo que se usará para subir los datos.</p>
            <div class="contenedor-inputs">
                <div class="contenedor-seleccionar-archivos" id="contenedor-seleccionar-archivos">
                    <input type="file" name="excel" id="btn-seleccionar-archivo" class="btn-seleccionar-archivo">
                </div>
                <input type="text" name="nombre_archivo" id="nombre_archivo" placeholder="Nombre del archivo" value="{{ session('fileName', old('nombre_archivo')) }}"  class="input-nombre-archivo">
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
                {{-- <a href="Egresados_Admin.html"> --}}
                <a href="{{ route('administrador') }}">
                            <input type="button" value="Cancelar" class="btn-cancelar">
                        </a>
               {{--  </a> --}}
                {{--  <a href="#mensaje-archivo-subido">--}}
                <a href="{{ route('administrador') }}">
                    <button type="submit" value="Subir" class="btn-subir">Subir</button>
                    </a>
                {{--  </a>--}}
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