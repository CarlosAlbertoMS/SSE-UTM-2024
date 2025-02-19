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
    @include('layouts.header')

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
            <form>
                <input class="texto-busqueda" type="text" placeholder="Buscar...">
                <button class="btn-btn-warning" type="submit">
                    <img src="../assets/icons/Buscar_B.PNG">
                </button>
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
                        <th>{{ $totalEgresados }}</th>
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

</body>

</html>