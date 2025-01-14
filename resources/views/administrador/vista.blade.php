<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TITULO</title>
    <link rel="stylesheet" href="../estilo.css">
    <link rel="stylesheet" href="vista.css">
</head>
<body>
    
    <header>
        <div id="header--encabezado">
            <img id="header--img1" src="../assets/img/u43.png">
            <div id="header--titulo">
                Sistema de Seguimiento de Egresados y Bolsa de Trabajo
            </div>
            <img id="header--img2" src="../assets/img/utm_u31.png">
        </div>

        <div id="header__div--menu">
            <div class="lista">
                <ul>
                    <a href="Egresados_Admin.html" class="pestanaActual"><li>Egresados</li></a>
                    <a href="Empresas_Admin.html" class="otrasPestañas"><li>Empresas</li></a>
                    <a href="Ofertas_Admin.html" class="otrasPestañas"><li>Ofertas Laborales</li></a>
                    <a href="Salarios_Admin.html" class="otrasPestañas"><li >Salarios</li></a>
                    <a href="Eventos_Admin.html" class="otrasPestañas"><li>Eventos</li></a>
                    <a href="Historias_Admin.html" class="otrasPestañas"><li>Historias de Éxito</li></a>
                    <a href="Tips_Admin.html" class="otrasPestañas"><li>Tips y Consejos</li></a>
                    <a href="Estadisticas_Admin.html" class="otrasPestañas"><li>Estadísticas</li></a>
                </ul>
            </div>
            <div class="circulos">
                <a class="header__menu--icons"  href="#"><img src="../assets/icons/help_ofertas.svg" alt="" /></a>
                <a class="header__menu--icons"  href="#"><img src="../assets/icons/Ajustes_B.png" alt="" /></a>
                <a class="header__menu--icons"  href="#"><img src="../assets/img/u462.png" alt="" /></a>
            </div>
        </div>

    </header>

    <section id="contenido">
        <!--Inicio de la segunda barra de navegacion-->
        <div class="form-navbar">
            <div class="submenu">
                <div><a href="">
                    <img src="../assets/icons/normal_u23.svg" class="item-r">
                    <span class="fijos">Agregar egresado</span>
                    </a>
                </div>
                <div><a href="">
                    <img src="../assets/icons/normal_u24.svg" class="item-r">
                    <span class="fijos">Agregar Lote</span>
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
