<div class="container--main--events">
    <div class="main--events-title"><p>Eventos Proximos</p></div>
    <div class="main--events-body">
        @foreach ($paginador as $evento)
            @php
                $lugar = $evento['lugar'] ?? 'N/A';
                $lugarCorto = strlen($lugar) > 35 ? substr($lugar, 0, 35) . '...' : $lugar;

                $nombre = $evento['nombre'] ?? 'N/A';
                $nombreCorto = mb_strlen($nombre) > 35 ? mb_substr($nombre, 0, 35, 'UTF-8') . '...' : $nombre;

                $descripcion = $evento['descripcion'] ?? 'N/A';
                $descripcionCorta = strlen($descripcion) > 100 ? substr($descripcion, 0, 100) . '...' : $descripcion;
            @endphp
            <div class="card--main--events">
                <div class="card--main--events-img">
                    <img src="{{ $evento['imagen_url'] }}" onerror="this.src='{{ asset('assets/img/normal_u1058.svg') }}';" alt="">
                    <div class="card--main--events-img-place" >
                        <p> {{ $lugarCorto }} </p>
                    </div>
                    <div class="card--main--events-img-info">
                        <div class="card--main--events-img-info-title">
                            <p> {{ $nombreCorto }} </p>
                        </div>
                        <div class="card--main--events-img-info-date">
                            <p> {{ $evento['fecha'] }} - </p>
                            <p> {{ $evento['fecha_fin'] }} </p>
                        </div>
                    </div>
                </div>
                <div class="card--main--events-text-1">
                    <p> {{ $descripcionCorta }} </p>
                </div>
                <div class="card--main--events-text-2">
                    <button class="btn-ver-detalle" data-id="{{ $evento['id'] }}" data-page="{{ $paginador->currentPage() }}">LEER MÁS</button>
                    <img src="../assets/icons/Marcador_B.svg" onclick="Marcador_selected(this)" alt="">
                </div>
            </div>
        @endforeach
    </div>
</div>

<x-paginador class="paginador" :paginador="$paginador" />
