<header>
    <div id="header--encabezado">
        <img id="header--img1" src="{{ asset('assets/img/u43.png') }}">
        <div id="header--titulo">
            Sistema de Seguimiento de Egresados y Bolsa de Trabajo
        </div>
        <img id="header--img2" src="{{ asset('assets/img/utm_u31.png') }}">
    </div>
    <div id="header__div--menu">
        <div class="lista">
            <ul>
                <a href="{{ route('administrador') }}" 
                   class="{{ Route::currentRouteName() == 'administrador' ? 'pestanaActual' : 'otrasPestañas' }}">
                   <li>Egresados</li>
                </a>
                <a href="{{ route('administrador_Empresas_Admin') }}" 
                   class="{{ Route::currentRouteName() == 'administrador_Empresas_Admin' ? 'pestanaActual' : 'otrasPestañas' }}">
                   <li>Empresas</li>
                </a>
                <a href="{{ route('administrador_Ofertas_Admin') }}" 
                   class="{{ Route::currentRouteName() == 'administrador_Ofertas_Admin' ? 'pestanaActual' : 'otrasPestañas' }}">
                   <li>Ofertas Laborales</li>
                </a>
                <a href="{{ route('administrador_Salarios_Admin') }}" 
                   class="{{ Route::currentRouteName() == 'administrador_Salarios_Admin' ? 'pestanaActual' : 'otrasPestañas' }}">
                   <li>Salarios</li>
                </a>
                <a href="{{ route('administrador_Eventos_Admin') }}" 
                   class="{{ Route::currentRouteName() == 'administrador_Eventos_Admin' ? 'pestanaActual' : 'otrasPestañas' }}">
                   <li>Eventos</li>
                </a>
                <a href="{{ route('administrador_Historias_Admin') }}" 
                   class="{{ Route::currentRouteName() == 'administrador_Historias_Admin' ? 'pestanaActual' : 'otrasPestañas' }}">
                   <li>Historias de Éxito</li>
                </a>
                <a href="{{ route('administrador_Tips_Admin') }}" 
                   class="{{ Route::currentRouteName() == 'administrador_Tips_Admin' ? 'pestanaActual' : 'otrasPestañas' }}">
                   <li>Tips y consejos</li>
                </a>
                <a href="{{ route('administrador_Estadisticas_Admin') }}" 
                   class="{{ Route::currentRouteName() == 'administrador_Estadisticas_Admin' ? 'pestanaActual' : 'otrasPestañas' }}">
                   <li>Estadísticas</li>
                </a>
            </ul>
        </div>
        <div class="circulos">
            <a class="header__menu--icons" href="#"><img src="{{ asset('assets/icons/help_ofertas.svg') }}" alt="" /></a>
            <a class="header__menu--icons" href="#"><img src="{{ asset('assets/icons/Ajustes_B.png') }}" alt="" /></a>
            <a class="header__menu--icons" href="#"><img src="{{ asset('assets/img/u462.png') }}" alt="" /></a>
        </div>
    </div>
</header>
