<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/Egresados/HistoriasExito.css')}}">

    <title>Casos de Éxito</title>
</head>


<body>
    @include('layouts.egresados.header')

    <main>
        <div id="contenido">
            <div class="contenido--cabecera">
                <section id="filtro">
                    <x-buscador></x-buscador>
                </section> 

                <hr style="max-width: 986px; margin: 10px auto;">
            </div>
            
            <section class="orgullo--suneo">
                <div class="orgullo--suneo--texto">
                    <div class="orgullo--suneo--texto--titulo">
                        <h2>Orgullo SUNEO</h2> 
                    </div>

                    <div class="orgullo--suneo--texto--parrafo">
                        <p>
                            xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd 
                            xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd 
                            xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd 
                            xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd 
                            xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd 
                            xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd 
                            xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd 
                            xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd 
                            xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd 
                            xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd 
                            xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd 
                            xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd 
                            xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd xd 
                        </p>
                    </div>

                    <div class="orgullo--suneo--texto--nomina">
                        <a href="#">Nomina una noticia, aqui.</a>
                    </div>
                </div>

                <div class="orgullo--suneo--evento">
                    <div class="orgullo--suneo--evento--titulo">
                        <h4>Lo más reciente</h4>
                    </div>
                        
                    <div class="orgullo--suneo--evento--img">
                        <a href="">
                            <img src="{{ $masReciente['imagen_url'] }}" onerror="this.src='{{ asset('assets/img/cemex.png') }}';" alt="">
                        </a>
                    </div>
                </div>
            </section>

            <section class="historias--recientes">
                <div class="historias--recientes--titulo">
                    <h5>Lo más reciente...</h5>
                </div> 

                <div class="historias--recientes--cards">
                    @foreach ($otrosRecientes as $reciente)
                        @php
                            $titulo = $reciente['titulo'] ?? 'N/A';
                            $tituloCorto = mb_strlen($titulo) > 35 ? mb_substr($titulo, 0, 35, 'UTF-8') . '...' : $titulo;

                            $descripcion = $reciente['descripcion'] ?? 'N/A';
                            $descripcionCorta = strlen($descripcion) > 100 ? substr($descripcion, 0, 100) . '...' : $descripcion;
                        @endphp

                        <div class="card">
                            <div class="card--img">
                                <a href="#">
                                    <img src="{{ $reciente['imagen_url'] }}" onerror="this.src='{{ asset('assets/img/normal_u1052.svg') }}';" alt="">
                                    {{-- {{ $reciente['titulo'] }} --}}
                                    <div class="card--img--info">
                                        <div class="card--img--info--titulo">
                                            <p> {{ $tituloCorto }} </p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="card--desc">
                                <p> {{ $descripcionCorta }} </p>
                            </div>

                            <div class="card--det">
                                <button class="btn-ver-detalle" data-id="{{ $reciente['id'] }}" data-page="{{ $paginador->currentPage() }}">LEER MÁS</button>
                                {{-- <img src="../assets/icons/Marcador_B.svg" onclick="Marcador_selected(this)" alt=""> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <section class="mas--historias">
                <div class="mas--historias--titulo">
                    <h5>Más historias...</h5>
                </div> 

                <div class="mas--historias--cards">
                    <div class="mas--historias--cards--row">
                        @foreach ($paginador->take(4) as $historia)
                            @php
                                $titulo = $historia['titulo'] ?? 'N/A';
                                $tituloCorto = mb_strlen($titulo) > 35 ? mb_substr($titulo, 0, 35, 'UTF-8') . '...' : $titulo;

                                $descripcion = $historia['descripcion'] ?? 'N/A';
                                $descripcionCorta = strlen($descripcion) > 100 ? substr($descripcion, 0, 100) . '...' : $descripcion;
                            @endphp

                            <div class="card">
                                <div class="card--img">
                                    <a href="#">
                                        <img src="{{ $historia['imagen_url'] }}" onerror="this.src='{{ asset('assets/img/normal_u1052.svg') }}';" alt="">
                                        {{-- {{ $historia['titulo'] }} --}}
                                        <div class="card--img--info">
                                            <div class="card--img--info--titulo">
                                                <p> {{ $tituloCorto }} </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="card--desc mas--historias--desc">
                                    <p> {{ $descripcionCorta }} </p>
                                </div>

                                <div class="card--det mas--historias--det">
                                    <button class="btn-ver-detalle" data-id="{{ $historia['id'] }}" data-page="{{ $paginador->currentPage() }}">LEER MÁS</button>
                                    {{-- <img src="../assets/icons/Marcador_B.svg" onclick="Marcador_selected(this)" alt=""> --}}
                                </div>
                            </div>
                        @endforeach    
                    </div>

                    <div class="mas--historias--cards--row">
                        @foreach ($paginador->slice(4, 4) as $historia)
                            @php
                                $titulo = $historia['titulo'] ?? 'N/A';
                                $tituloCorto = mb_strlen($titulo) > 35 ? mb_substr($titulo, 0, 35, 'UTF-8') . '...' : $titulo;

                                $descripcion = $historia['descripcion'] ?? 'N/A';
                                $descripcionCorta = strlen($descripcion) > 100 ? substr($descripcion, 0, 100) . '...' : $descripcion;
                            @endphp

                            <div class="card">
                                <div class="card--img">
                                    <a href="#">
                                        <img src="{{ $historia['imagen_url'] }}" onerror="this.src='{{ asset('assets/img/normal_u1052.svg') }}';" alt="">
                                        {{-- {{ $historia['titulo'] }} --}}
                                        <div class="card--img--info">
                                            <div class="card--img--info--titulo">
                                                <p> {{ $tituloCorto }} </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="card--desc mas--historias--desc">
                                    <p> {{ $descripcionCorta }} </p>
                                </div>

                                <div class="card--det mas--historias--det">
                                    <button class="btn-ver-detalle" data-id="{{ $historia['id'] }}" data-page="{{ $paginador->currentPage() }}">LEER MÁS</button>
                                    {{-- <img src="../assets/icons/Marcador_B.svg" onclick="Marcador_selected(this)" alt=""> --}}
                                </div>
                            </div>
                        @endforeach    
                    </div>

                    <x-paginador class="paginador" :paginador="$paginador"/>
                </div>
            </section>
        </div>
    </main>
    
    @include('layouts.egresados.footer')
</body>
</html>
