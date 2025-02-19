<header>
    <div id="header--encabezado">
        <img id="header--img" src="{{ asset('assets/img/u43.png') }}">
        <div id="header--titulo">
            Sistema de Seguimiento de Egresados y Bolsa de Trabajo
        </div>
        <img id="header--img" src="{{ asset('assets/img/utm_u31.png') }}">
    </div>
    <div id="header__div--menu">
        <div class="lista">
            <ul>
                <a href="{{ route('Egresados_Ofertas') }}" 
                   class="{{ Route::currentRouteName() == 'Egresados_Ofertas' ? 'pestanaActual' : 'otrasPestañas' }}">
                   <li>Ofertas Laborales</li>
                </a>
                <a href="{{ route('Egresados_Directorio') }}" 
                   class="{{ Route::currentRouteName() == 'Egresados_Directorio' ? 'pestanaActual' : 'otrasPestañas' }}">
                   <li>Directorio de Empresas</li>
                </a>
                <a href="{{ route('Egresados_Tabulador') }}" 
                   class="{{ Route::currentRouteName() == 'Egresados_Tabulador' ? 'pestanaActual' : 'otrasPestañas' }}">
                   <li>Tabulador de Salarios</li>
                </a>
                <a href="{{ route('Egresados_Eventos') }}" 
                   class="{{ Route::currentRouteName() == 'Egresados_Eventos' ? 'pestanaActual' : 'otrasPestañas' }}">
                   <li>Eventos</li>
                </a>
                <a href="{{ route('Egresados_Historias') }}" 
                   class="{{ Route::currentRouteName() == 'Egresados_Historias' ? 'pestanaActual' : 'otrasPestañas' }}">
                   <li>Historias de Éxito</li>
                </a>
                <a href="{{ route('administrador_Tips_Admin') }}" 
                   class="{{ Route::currentRouteName() == 'administrador_Tips_Admin' ? 'pestanaActual' : 'otrasPestañas' }}">
                   <li>Tips y consejos</li>
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


<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

	:root {
		--bg--gris: #6b6b6b;
		--bg--guinda: #6d000e;  
		--bg--guinda--hover: rgb(163,0,20);
		--bg--blanco: #ffffff;
		--bg--grisTrans: rgba(255, 255, 255, 0.92);
		--txt--grisOscuro: #333333;
		--txt--blanco: #ffffff;
	
		--border--gris: #797979;
		--bgbtn--search: #7f8c8d;
		--txt--filter:#818d8e;
		--bg--tab--blanco: #ffffff;
		--bg--tab--gris: #f2f2f2;
		--bg--tab--grisOscuro:#aaaaaa;
		--bg--tab--hover: rgb(245, 177, 86);
		--border--tabThead:#d7d7d7;
		--txt--NuevaOferta: #02a7f0;
		--txt--Aceptada: #70b603;
		--txt--EnProceso: #f59a23;
		--txt--Rechazada: #d9001b;

		--footer--bg--gris: rgba(242, 243, 244, 0.92);
		--footer--acerca: #071e33;
		--footer--txt: #7f7f7f;
	}

	* {
		margin: 0px;
		padding: 0px;
	}

	body {
		background-image: url('../../assets/img/imagen_main.jpg');
		background-attachment: fixed;
		background-size:cover;
	}

	header {
	  	width: 1024px;
	  	margin: 0px auto;
	}

	#header--encabezado {
	  	min-height: 82px;
	  	background-color: var(--bg--blanco);
	  	display: flex;
	  	justify-content: space-between;
	  	align-content: space-around;
	  	align-items: center;
	  	padding-left: 53px;
	  	padding-right: 53px;
	}

	#header--titulo{
	  	width: 706px;
	  	height: 32px;
	  	background-color: var(--bg--blanco);
	  	box-sizing: border-box;
	  	font-family: 'Poppins-Regular', 'Poppins', sans-serif;
	  	color: var( --txt--grisOscuro);
	  	text-align: left;
	  	line-height: normal;
	  	font-size: 24px;
	}

	#header--img {
	  	width: 75px;
	  	height: 73px;
	}

	#header__div--menu {
	  	height: 32px;
	  	background-color: var(--bg--gris);
	  	display: flex;
	  	justify-content: space-around;
	}

	.lista{
	  	width: 90%;
	}

	#header__div--menu ul {
	  	height: 100%;
	  	width: 100%;
	  	list-style: none;
	  	display: flex;
	  	justify-content:flex-start;
	}

	#header__div--menu ul li {
	  	max-width: 100%;
	  	min-width: 12%;
	  	font-size: 12px;
	  	font-family: 'Raleway-Regular', 'Raleway', sans-serif;
	  	text-align: center;
	}

	#header__div--menu ul a {
	  	width: 100%;
	  	height: 100%;
	  	display: flex;
	  	justify-content: center;
	  	align-items: center;
	  	text-decoration: none;
	  	color: var(--txt--blanco);
	}

	#header__div--menu ul a:hover {
	    background-color: var(--bg--guinda--hover);
	}

	.circulos {
	  	width: 10%;
	  	display: flex;
		flex-direction: row;
	  	justify-content: space-evenly;
		padding-top: 8px;
	}

	.header__menu--icons {
	  	display: flex;
	}

	.header__menu--icons img {
		height: 16px;
	  	width: 16px;
	}

	.pestanaActual {
		background-color: var(--bg--guinda);
	}
</style>
