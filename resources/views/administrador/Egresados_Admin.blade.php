<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="{{ asset('css/administrador/Egresados_Admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">

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
            <!--Inicio de la tabla-->
            @if ($error)
            <div class="error-message">
                {{ $error }}
            </div>
            @endif

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

                    @if ($matricula && $carreraGeneracion) <!-- Solo muestra la fila si existe matrícula y carreraGeneracion -->
                    <tr>
                        <td>{{ $egresado['matricula'] }}</td>
                        <td>{{ ($egresado['ap_paterno'] ?? 'N/A') . ' ' . ($egresado['ap_materno'] ?? 'N/A') . '  ' . ($egresado['nombres'] ?? 'N/A') }}</td>
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
                        <th></th>
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

</html>