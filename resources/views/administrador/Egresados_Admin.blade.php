<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="{{ asset('css/administrador/Egresados_Admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <script src="{{ asset('js/verDetalles.js') }}"></script>

</head>


<body>

    @include('layouts.administrador.header')

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
                <div>
                    <a href="#" id="btn-ver-detalles">
                        <img src="../assets/icons/ver_oferta.svg" class="item-r">
                        <span class="nofijos">Ver Detalles</span>
                    </a>
                </div>
                <div>
                    <a href="#" id="btn-editar">
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
            <form method="GET">
                <input class="texto-busqueda" type="text" id="search" name="search" placeholder="Buscar..."
                    value="{{ request()->query('search', '') }}">
                <button class="btn-btn-warning" type="submit"><img src="../assets/icons/Buscar_B.PNG"
                        alt="Buscar"></button>
            </form>

            <!--fin del buscador"-->
        </div>
        <div class="linea"></div>
        <!--
            TU CODIGO AQUI
        -->
        <center>
            <!--Inicio de la tabla-->
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
                        <th>Matrícula</th>
                        <th>Nombre</th>
                        <th>Carrera</th>
                        <th>Generación</th>
                        <th>Estatus</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($egresados as $egresado)
                    @php

                    $matricula = $egresado['matricula'] ?? null;
                    // Verifica que la matrícula exista y sea válida, y si hay datos en carrerasGeneraciones
                    $carreraGeneracion = $matricula && isset($carrerasGeneraciones[$matricula]) ? $carrerasGeneraciones[$matricula] : null;
                    @endphp

                    @if ($matricula && $carreraGeneracion)
                    <!-- Solo muestra la fila si existe matrícula y carreraGeneracion -->
                    <tr>
                        <td>{{ $egresado['matricula'] }}</td>
                        <td>{{ ($egresado['ap_paterno'] ?? 'N/A') . ' ' . ($egresado['ap_materno'] ?? 'N/A') . '  ' . ($egresado['nombres'] ?? 'N/A') }}
                        </td>
                        <td>{{ $carreraGeneracion['carrera'] ?? 'N/A' }}</td>
                        <td>{{ $carreraGeneracion['generacion'] ?? 'N/A' }}</td>
                        <td>{{ $egresado['estado'] ?? 'N/A' }}</td>
                    </tr>
                    @endif

                    @endforeach

                </tbody>
                <tfoot>
                    <tr id="tabla-fin">
                        <th>Total de egresados: {{ $totalEgresados }}</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>
                            <!-- <div id="mostrar-id" style="margin-top: 10px; font-weight: bold; color: #d9534f;"></div> -->
                        </th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>

            <x-paginador :paginador="$egresados" />
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