<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas - ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/administrador/Ofertas_Admin.css') }}">
    <script src="{{ asset('js/ocultar.js') }}"></script>
    <script src="{{ asset('js/verDetalles.js') }}"></script>

</head>

<body>
    @include('layouts.administrador.header')
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
                <input class="texto-busqueda" type="text" placeholder="Buscar...">
                <button class="btn-btn-warning" type="submit"><img src="../assets/icons/Buscar_B.PNG"></button>
            </form>
            <!--fin del buscador-->
        </div>
        <div class="linea"></div>

        <center>
            <!--Inicio de la tabla-->

            <table>
                <!-- Inicio del encabezado de la tabla-->
                <thead>

                    <tr id="tabla-inicio">
                        <th>Id</th>
                        <th>Puesto</th>
                        <th>Empresa</th>
                        <th>Carrera</th>
                        <th>Ubicación</th>
                        <th>Descripcción</th>
                        <th>Estado de la oferta</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($paginador as $oferta)
                    <tr>
                        <td>{{ $oferta['id'] ?? 'N/A' }}</td>
                        <td>{{ $oferta['titulo_empleo'] ?? 'N/A' }}</td>
                        <td>{{ $oferta['empresa_id'] ?? 'N/A' }}</td>
                        <td>{{ $oferta['carrera'] ?? 'N/A' }}</td>
                        <td>{{ $oferta['ubicacion'] ?? 'N/A' }}</td>
                        <td>
                            @php
                            $descripcion = $oferta['descripcion'] ?? 'N/A';
                            $descripcionCorta = strlen($descripcion) > 60 ? substr($descripcion, 0, 60) . '...' : $descripcion;
                            @endphp
                            <span class="descripcion-corta">{{ $descripcionCorta }}</span>
                            <span class="descripcion-completa" style="display: none;">{{ $descripcion }}</span>
                            @if (strlen($descripcion) > 60)
                            <button class="toggle-btn" onclick="toggleDescripcion(this)">...</button>
                            @endif
                        </td>
                        <td>{{ $oferta['status'] ?? 'N/A' }}</td>

                    </tr>
                    @endforeach
                </tbody>

                <tfoot>
                    <tr id="tabla-fin">
                        <th>Total de ofertas:{{ $totalOfertas }}</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
            <x-paginador :paginador="$paginador" />

            <!--fin de la paginación-->

        </center>
    </section>

    @include('layouts.administrador.footer') <!-- Archivo de encabezado reutilizable -->


</body>

</html>