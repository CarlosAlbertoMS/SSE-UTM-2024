<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Egresados/Directorio-de-empresas.css') }}">
    <title>Directorio de Empresas</title>
</head>

@php
    $currentPage = request()->query('page', 1);
    $perPage = 8;
    $totalPages = ceil(count($empresas) / $perPage);
    $startIndex = ($currentPage - 1) * $perPage;
    $visibleEmpresas = array_slice($empresas, $startIndex, $perPage);

    // Lógica para mostrar solo tres números de página
    $startPage = max(1, $currentPage - 1);
    $endPage = min($totalPages, $startPage + 2);
@endphp

@include('layouts.egresados.header')

    <main>
        <section class="main--section">
            <div class="main--container--1">
                <form class="main-form--1" action="#" method="GET">
                    <input type="search" id="search" name="search" placeholder="Buscar...">
                    <button type="submit">
                        <img src="{{ asset('assets/icons/Buscar_B.png') }}" alt="Buscar">
                    </button>
                </form>
                
                <div class="main-form--2">
                    <div class="main--label--number--offers">
                        <p>{{ count($empresas) }} Empresas</p>
                    </div>
                    <div class="main--order--info">
                        <label>Ordenar por:</label>
                        <select name="ordenar">
                            <option value="relevancia" selected>Relevancia</option>
                            <option value="nombre">Nombre A-Z</option>
                            <option value="recientes">Más recientes</option>
                        </select>
                    </div>
                </div>
            </div>


<div class="main--container--2">
    <div class="wrapper">
        @foreach ($visibleEmpresas as $empresa)
            <div class="wrapper--cell" data-id="{{ $empresa['id'] }}">
                <div class="wrapper--cell--body">
                    <div class="wrapper--cell--body--title">
                        <p>{{ $empresa['nombre'] }}</p>
                    </div>
                    <div class="wrapper--cell--body--description">
                        <p>{{ $empresa['descripcion'] }}</p>
                    </div>
                    
                    <div class="wrapper--cell--body--contacto">
                        <div class="contacto-item">
                            <img src="{{ asset('assets/icons/Usuario_B.png') }}" alt="Contacto">
                            <span>xdxd</span>
                        </div>
                        <div class="contacto-item">
                            <img src="{{ asset('assets/icons/Telefono_B.png') }}" alt="Teléfono">
                            <span>{{ $empresa['telefono'] }}</span>
                        </div>
                        <div class="contacto-item">
                            <img src="{{ asset('assets/icons/Correo_B.png') }}" alt="Email">
                            <span>{{ $empresa['correo'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <br>
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
            <div class="footer--title--1"><p>Sobre SUNEO</p></div>
            <div class="footer--title--1"><p>Privacidad</p></div>
            <div class="footer--title--1"><p>Empresas</p></div>
            <div class="footer--title--1"><p>Ayuda</p></div>
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



<script>
    
    document.querySelectorAll('.wrapper--cell').forEach(function(cell) {
    cell.addEventListener('click', function() {
        var id = this.getAttribute('data-id');
        redirectToEmpresa(id);
    });
})
function redirectToEmpresa(id) {
    console.log(id);
    
    const url = "{{ route('Informacion-de-empresas', ['id' => 'PLACEHOLDER']) }}".replace('PLACEHOLDER', id);
    window.location.href = url
    
   
}
</script>
</body>
</html>
