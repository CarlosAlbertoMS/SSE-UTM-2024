<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/Egresados/Ofertas-laborales.css')}}">
    <title>Ofertas Laborales</title>
</head>

@php
    $search = request()->query('search', ''); // Obtener el texto de búsqueda

    // Si hay una búsqueda, filtrar; si no, mostrar todas las ofertas
    $filteredOfertas = empty($search) ? $ofertas : array_filter($ofertas, function ($oferta) use ($search) {
    return stripos($oferta['titulo_empleo'], $search) !== false;
    });

    $currentPage = request()->query('page', 1);
    $perPage = 5; // Mostrar 5 ofertas por página
    $totalPages = ceil(count($filteredOfertas) / $perPage);
    $startIndex = ($currentPage - 1) * $perPage;
    $visibleEmpresas = array_slice($filteredOfertas, $startIndex, $perPage);

    // Lógica para mostrar solo tres números de página
    $startPage = max(1, $currentPage - 1);
    $endPage = min($totalPages, $startPage + 2);
@endphp

@include('layouts.egresados.header')

<main>
    <section class="main--section">
        <div class="main--container--1">
            <div class="main-form--1">
                <form method="GET">
                    <input type="text" id="search" name="search" placeholder="Buscar..." value="{{ request()->query('search', '') }}">
                    <button type="submit"><img src="../assets/icons/buscar_oferta.svg" alt="Buscar"></button>
                </form>
            </div>


            <div class="main-form--2">
                <div class="main--label--number--offers">
                    <p>{{ count($ofertas) }} Ofertas</p>
                </div>
                <div class="main--order--info">
                    <p>Ordenar por</p>
                    <select name="Ordenar">
                        <option selected value="0">Relevancia</option>
                        <option value="1">Fecha</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="main--container--2">
            @foreach ($visibleEmpresas as $oferta)

            <div class="main--card">
                <div class="main--card--img">
                    <img src="../assets/img/normal_u392.svg" alt="Oferta">
                </div>
                <div class="main--card--body">
                    <div class="main--card--body--Title">
                        <p>{{ $oferta['titulo_empleo'] }}</p>
                    </div>
                    <div class="main--card--body--Text">
                        <p>{{ $oferta['carrera'] }}</p>
                    </div>

                    <div class="main--card--body--Text">
                        <p>{{ $oferta['descripcion'] }}</p>
                    </div>
                </div>
                <div class="main--card--icons">
                    <div class="main--card-icon--1">
                        <img src="../assets/icons/Marcador_oferta.svg" onclick="Marcador_selected(this)" alt="Guardar">
                    </div>
                </div>
            </div>
            @endforeach
            <!-- PAGINACIÓN -->
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

        <footer>
            <div class="footer--container--1">
                <img src="../assets/img/u26.png" alt="Logo">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
    var img_ant = new Image();
    img_ant.src = "../assets/icons/Marcador_oferta.svg";

    function Marcador_selected(imagen) {
        if (img_ant.src === imagen.src) {
            imagen.src = "../assets/icons/Marcador_NG.svg";
        } else {
            imagen.src = img_ant.src;
        }
    }
</script>
</body>

</html>