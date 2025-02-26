<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas - ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/administrador/Empresas_Admin.css') }}">
    <script src="{{ asset('js/ocultar.js') }}"></script>

</head>

<body>
    @include('layouts.administrador.header')

    <section id="contenido">
        <!-- Inicio de la segunda barra de navegación -->
        <div class="form-navbar">
            <div class="submenu">
                <div>
                    <a href="">
                        <img src="../assets/icons/normal_u23.svg" class="item-r">
                        <span class="fijos">Validar Empresa</span>
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="../assets/icons/u164.svg" class="item-r">
                        <span class="fijos">Descargar PDF</span>
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="../assets/icons/ver_oferta.svg" class="item-r">
                        <span class="nofijos">Ver Detalles</span>
                    </a>
                </div>
                <div class="submenulastchild">
                    <a href="">
                        <img src="../assets/icons/eliminar_oferta.svg" class="item-r">
                        <span class="nofijos">Eliminar</span>
                    </a>
                </div>
            </div>

            <!-- Inicio del buscador de la página -->
            <form method="GET">
                    <input  class="texto-busqueda" type="text" id="search" name="search" placeholder="Buscar..." value="{{ request()->query('search', '') }}">
                    <button class="btn-btn-warning" type="submit"><img src="../assets/icons/Buscar_B.PNG" alt="Buscar"></button>
            </form>
            <!-- Fin del buscador -->
        </div>
        <div class="linea"></div>
        <center>
            @if ($error)
            <div class="error-message">
                {{ $error }}
            </div>
            @endif

            <table>
                <thead>
                    <tr id="tabla-inicio">
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Ubicación</th>
                        <th>Telefono</th>
                        <th>Descripción</th>
                        <th>Correo</th>
                        <th>Activada</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empresas as $empresa)
                    <tr>
                        <td>{{ $empresa['id'] ?? 'N/A' }}</td>
                        <td>{{ $empresa['nombre'] ?? 'N/A' }}</td>
                        <td>{{ $empresa['estado'] ?? 'N/A' }}</td>
                        <td>{{ $empresa['telefono'] ?? 'N/A' }}</td>
                        <td>
                            @php
                            $descripcion = $empresa['descripcion'] ?? 'N/A';
                            $descripcionCorta = strlen($descripcion) > 30 ? substr($descripcion, 0, 30) . '...' : $descripcion;
                            @endphp
                            <span class="descripcion-corta">{{ $descripcionCorta }}</span>
                            <span class="descripcion-completa" style="display: none;">{{ $descripcion }}</span>
                            @if (strlen($descripcion) > 30)
                            <button class="toggle-btn" onclick="toggleDescripcion(this)">...</button>
                            @endif
                        </td>
                        <td>{{ $empresa['correo'] ?? 'N/A' }}</td>
                        <td>{{ $empresa['habilitada'] ?? 'N/A' }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr id="tabla-fin">
                        <th>Total de empresas</th>
                        <th>{{ $totalEmpresas }}</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>

            <x-paginador :paginador="$empresas" />
        </center>
    </section>

    @include('layouts.administrador.footer') <!-- Archivo de encabezado reutilizable -->

</body>

</html>