<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salarios - ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/administrador/Salarios_Admin.css') }}">
</head>
<body>

    @include('layouts.header')
    
    <section id="contenido">
        <!--Inicio de la segunda barra de navegacion-->
        <div class="form-navbar">
            <div class="submenu">
                <div><a href="Agregar-Salario_Admin.html">
                    <img src="../assets/icons/agregar_r.svg" class="item-r">
                    <span class="fijos">Agregar Salario</span>
                    </a>
                </div>
                <div><a href="">
                    <img src="../assets/icons/u164.svg" class="item-r">
                    <span class="fijos">Descargar PDF</span>
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
                <input class="texto-busqueda"  type="text" placeholder="Buscar..." >
                <button  class="btn-btn-warning" type="submit"><img src="../assets/icons/Buscar_B.PNG" ></button>
            </form>
            <!--fin del buscador-->
        </div>    
        <div class="linea"></div>
        <!--
            TU CODIGO AQUI
        -->
        <center>
            <!--Inicio de la tabla-->
            <table>
                <!-- Inicio del encabezado de la tabla-->
                <tr id="tabla-inicio">
                    <th>Título del empleo</th>
                    <th>Carrera</th>
                    <th>Experiencia</th>
                    <th>Monto mínimo mensual</th>
                    <th>Monto máximo mensual</th>
                </tr>

                @foreach ($paginador as $tabulador)
                    <tr>
                        <td> {{ $tabulador['titulo_empleo'] }} </td>
                        <td> {{ $carreras[$tabulador['carrera']] }} </td>
                    </tr>
                @endforeach

                {{-- <tr id="tabla-fin">
                    <th colspan="5">Total de salarios: 72</th>
                </tr> --}} 
            </table>

            @if ($paginador->hasPages())
                <div class="contenido--navegar">
                    <div class="pagination-buttons">
                        {{-- Botón "Anterior" --}}
                        @if ($paginador->onFirstPage())
                            <button class="disabled pag-btn-txt" disabled>Anterior</button>
                        @else
                            <button class="pag-btn-txt" onclick="location.href='{{ $paginador->previousPageUrl() }}'">Anterior</button>
                        @endif

                        {{-- Números de página (solo 3) --}}
                        @php
                            $start = max($paginador->currentPage() - 1, 1);
                            $end = min($start + 2, $paginador->lastPage());
                        @endphp

                        @for ($i = $start; $i <= $end; $i++)
                            @if ($i == $paginador->currentPage())
                                <button class="pag-btn-num active">{{ $i }}</button>
                            @else
                                <button class="pag-btn-num" onclick="location.href='{{ $paginador->url($i) }}'">{{ $i }}</button>
                            @endif
                        @endfor

                        {{-- Botón "Siguiente" --}}
                        @if ($paginador->hasMorePages())
                            <button class="pag-btn-txt" onclick="location.href='{{ $paginador->nextPageUrl() }}'">Siguiente</button>
                        @else
                            <button class="disabled pag-btn-txt" disabled>Siguiente</button>
                        @endif
                    </div>
                </div>
            @endif

        </center>
    </section>

    <!-- DESPUES ESTA WEA SE VA A COLOCAR EN EL CSS DE ESTA VISTA, solo Dios sabe cuando :emojiManosRezando:. -->
    <style>
        .pagination-buttons {
            display: flex;
            justify-content: center;
            padding-top: 10px;
        }

        .pagination-buttons button {
            height: 24px;
            padding: 5px 15px;
            border: none;
            background-color: #555;
            color: white;
            cursor: pointer;
            font-size: 12px;
        }

        .pag-btn-txt {
            width: 12%;
        }

        .pag-btn-num {
            width: 6%;
        }

        .pagination-buttons button:hover {
            background-color: #ccc;
        }

        .pagination-buttons .active {
            background-color: #6d000e;
        }

        .pagination-buttons .disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
    </style>
    
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
