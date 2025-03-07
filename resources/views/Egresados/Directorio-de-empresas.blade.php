<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Egresados/Directorio-de-empresas.css') }}">
    <title>Directorio de Empresas</title>
</head>

@php
$search = request()->query('search', '');

// Si hay una búsqueda, filtrar; si no, mostrar todas las ofertas
    $filteredEmpresas = empty($search) ? $empresas : array_filter($empresas, function ($empresa) use ($search) {
    return stripos($empresa['nombre'], $search) !== false;
    });


// Paginación
$currentPage = request()->query('page', 1);
$perPage = 8;
$totalPages = ceil(count($filteredEmpresas) / $perPage);
$startIndex = ($currentPage - 1) * $perPage;
$visibleEmpresas = array_slice($filteredEmpresas, $startIndex, $perPage);
// Lógica para mostrar solo tres números de página
$startPage = max(1, $currentPage - 1);
$endPage = min($totalPages, $startPage + 2);
@endphp


@include('layouts.egresados.header')

<main>
    <section class="main--section">
        <!-- CONTENEDOR 1: BÚSQUEDA Y ORDENAMIENTO -->
        <div class="main--container--1">
        <div class="main-form--1">
                <form method="GET">
                    <input type="text" id="search" name="search" placeholder="Buscar..." value="{{ request()->query('search', '') }}">
                    <button type="submit"><img src="../assets/icons/buscar_oferta.svg" alt="Buscar"></button>
                </form>
            </div>  

            <div class="main-form--2">
                <div class="main--label--number--offers">
                    <p>{{ count($empresas) }} Empresas</p>
                </div>
                <div class="main--order--info">
                    <label>Ordenar por:</label>
                    <select>
                        <option>no se</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- CONTENEDOR 2: LISTADO DE EMPRESAS + PAGINACIÓN -->
        <div class="main--container--2">
            <div class="wrapper">
                @foreach ($visibleEmpresas as $empresa)
                <div class="wrapper--cell" data-id="{{ $empresa['id'] }}">
                    <div class="wrapper--cell--img">
                        <img src="{{ asset('assets/img/cemex.png') }}" alt="empresa">
                    </div>
                    <div class="wrapper--cell--body">
                        <div class="wrapper--cell--body--title">
                            <p>{{ $empresa['nombre'] }}</p>
                        </div>
                        <div class="wrapper--cell--body--description">
                            <p>{{ $empresa['descripcion'] }}</p>
                        </div>
                        <div class="wrapper--cell--body--icon1">
                            <img src="{{ asset('assets/icons/Usuario_B.png') }}" alt="">
                            <div class="wrapper--cell--body-icon1--text">
                                <p>{{ $empresa['contacto_id'] }}</p>
                            </div>
                        </div>
                        <div class="wrapper--cell--body--icon2">
                            <img src="{{ asset('assets/icons/Telefono_B.png') }}" alt="">
                            <div class="wrapper--cell--body--icon2--text">
                                <p>{{ $empresa['telefono'] }}</p>
                            </div>
                        </div>
                        <div class="wrapper--cell--body--icon3">
                            <img src="{{ asset('assets/icons/Correo_B.png') }}" alt="">
                            <div class="wrapper--cell--body--icon3--text">
                                <p>{{ $empresa['correo'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- PAGINACIÓN (dentro de main--container--2) -->
            <div class="main--pagination">
                @if ($currentPage > 1)
                <div class="main--pagination--opc-1">
                    <a href="?page={{ $currentPage - 1 }}">Anterior</a>
                </div>
                @endif

                @for ($i = $startPage; $i <= $endPage; $i++)
                    <div class="main--pagination--opc-2">
                    <a href="?page={{ $i }}" class="{{ $currentPage == $i ? 'active' : '' }}">{{ $i }}</a>
            </div>
            @endfor

            @if ($currentPage < $totalPages)
                <div class="main--pagination--opc-1">
                <a href="?page={{ $currentPage + 1 }}">Siguiente</a>
        </div>
        @endif
        </div>
        </div>

        <!-- FOOTER DENTRO DE LA SECCIÓN -->
        <footer>
            <div class="footer--container--1">
                <img src="{{ asset('assets/img/u26.png') }}" alt="Logo">
            </div>
            <div class="footer--container--2">
                <div class="footer--Title">
                    <div class="footer--title--1">
                        <p>Sobre SUNEO</p>
                    </div>
                    <div class="footer--title--1">
                        <p>Privacidad</p>
                    </div>
                    <div class="footer--title--1">
                        <p>Empresas</p>
                    </div>
                    <div class="footer--title--1">
                        <p>Ayuda</p>
                    </div>
                </div>
                <div class="footer--Text">
                    <div class="footer--title--2-1">
                        <p>Coordinación de Vinculación de Alumnos y Egresados UTM</p>
                    </div>
                    <div class="footer--title--2-2">
                        <p>Teléfonos: (953) 53 203 99 o (953) 53 202 14 ext. 113 o 116</p>
                    </div>
                </div>
                <div class="footer--Text">
                    <div class="footer--title--2-1">
                        <p>De Lunes a Viernes de 8:00 a 13:00 y de 16:00 a 19:00 hrs</p>
                    </div>
                    <div class="footer--title--2-2">
                        <p>Carretera a Acatlima Km. 2.5 Huajuapan de León, Oaxaca, México C.P 69000</p>
                    </div>
                </div>
            </div>
        </footer>
    </section>
</main>

<!-- SCRIPTS AL FINAL DEL BODY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript">
    var img_ant = new Image();
    img_ant.src = "{{ asset('assets/icons/Marcador_oferta.svg') }}";

    function Marcador_selected(imagen) {
        if (img_ant.src === imagen.src) {
            imagen.src = "{{ asset('assets/icons/Marcador_NG.svg') }}";
        } else {
            imagen.src = img_ant.src;
        }
    }
</script>

<script>
    document.querySelectorAll('.wrapper--cell').forEach(function(cell) {
        cell.addEventListener('click', function() {
            var id = this.getAttribute('data-id');
            redirectToEmpresa(id);
        });
    });

    function redirectToEmpresa(id) {
        console.log(id);
        const url = "{{ route('Informacion-de-empresas', ['id' => 'PLACEHOLDER']) }}"
            .replace('PLACEHOLDER', id);
        window.location.href = url;
    }
</script>
</body>

</html>