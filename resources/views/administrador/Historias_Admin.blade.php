<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historias - ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/administrador/Historias_Admin.css') }}">
    <script src="{{ asset('js/verDetalles.js') }}"></script>


</head>

<body>
    @include('layouts.administrador.header')
    <section id="contenido">
        <!--Inicio de la segunda barra de navegacion-->
        <div class="form-navbar">
            <div class="submenu">
                <div><a href="{{ route('administrador_agregar_historia') }}">
                        <img src="../assets/icons/agregar_r.svg" class="item-r">
                        <span class="fijos">Agregar Historia</span>
                    </a>
                </div>
                <div><a href="">
                        <img src="../assets/icons/u164.svg" class="item-r">
                        <span class="fijos">Descargar PDF</span>
                    </a>
                </div>
                <div>
                    <a href="#" id="btn-ver-detalles">
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
            @if ($error)
            <div class="error-message">
                {{ $error }}
            </div>
            @endif
            <div class="error-message" id="select-row-message">
                ⚠️ Por favor, seleccione una fila primero.
            </div>
            <table>
                <!-- Inicio del encabezado de la tabla-->
                <thead>
                    <tr id="tabla-inicio">
                        <th>#</th>
                        <th>Título</th>
                        <th>Descripcción</th>
                        <th>Universidad</th>
                        <th>Publicado el...</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- Fin del encabezado-->
                    @foreach ($historias as $tabulador)
                    <tr>
                        <td> {{ $tabulador['id'] ?? 'N/A' }}</td>
                        <td> {{ $tabulador['titulo'] ?? 'N/A'}} </td>
                        <td> {{ $tabulador['lugar'] ?? 'N/A'}}</td>
                        <td> {{ $tabulador['categoria'] ?? 'N/A'}} </td>
                        <td> {{ $tabulador['created_at'] ?? 'N/A'}} </td>
                    </tr>
                    @endforeach
                </tbody>

                <tr id="tabla-fin">
                    <th colspan="5">Total de historias: 72</th>
                </tr>
            </table>
            <!--fin de la tabla-->
            <!--Inicio de la paginacion de la pagina-->
            <x-paginador :paginador="$historias" />

            <!--fin de la paginación-->

        </center>
    </section>

    @include('layouts.administrador.footer') <!-- Archivo de encabezado reutilizable -->


</body>
<style>
    #shape {
        width: 24px;
        height: 16px;
        background-color: #6d000e;
        box-sizing: border-box;
    }

    /* Mensaje de error */
    .error-message {
        color: #ff0000;
        padding: 10px;
        margin: 10px 0;
        display: none;
        /* Oculto inicialmente */
    }

    /* Fila seleccionada */
    tr.selected {
        background-color: #6d000e;
        cursor: pointer;
    }

    /* Botón "Ver Detalles" desactivado */
    #btn-ver-detalles .nofijos {
        color: var(--txt-navbar-nofijo);
        /* Gris */
        pointer-events: none;
        /* Deshabilita clic */
    }

    /* Botón "Ver Detalles" activado */
    #btn-ver-detalles.active .nofijos .item-r {
        color: #ff0000 !important;
        /* Rojo */
        pointer-events: auto;
        /* Habilita clic */
    }
</style>

</html>