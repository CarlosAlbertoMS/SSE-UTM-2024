<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabulador de Salarios</title>
    <link rel="stylesheet" href="{{asset('css/Egresados/TabuladorDeSalarios-Egresados.css')}}">
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
                    <li><a href="{{route('Egresados_Ofertas')}}">Ofertas Laborales</a></li>
                    <li><a href="{{route('Informacion-empresas')}}">Directorio de Empresas</a></li>
                    <li style="background-color: #6d000e;"><a href="{{route('TabuladorDeSalarios-Egresados')}}">Tabulador de Salarios</a></li>
                    <li><a href="{{route('Eventos')}}">Eventos</a></li>
                    <li><a href="{{route('CasosDeExito-Egresados')}}">Historias de Éxito</a></li>
                    <li><a href="#">Tips y Consejos</a></li>
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
        <section id="filtro">
            <div class="buscador">
                    <input type="search" placeholder="Buscar..."/>
                <button type="button">
                    <img src="../assets/icons/Buscar_B.png">
                </button>
            </div>
            <div class="lista_desplegable">
                <select name="lista--filtro" class="lista--filtro">
                    <option disabled selected>Filtrar por Carrera</option>
                    <option value="1">Ing. en Computación</option> 
                    <option value="2">Ing. en Electrónica</option> 
                    <option value="3">Ing. en Mecatrónica</option>
                    <option value="10">Ing. en Diseño</option> 
                    <option value="11">Lic. en Matemáticas</option> 
                    <option value="12">Lic. Ciencias Empresariales</option> 
                </select>
            </div>
        </section>
        
        <hr style="max-width: 986px; margin: 10px auto;">
        
        <section id="section--tabla">
            <table>
                <thead>
                    <tr>
                        <th colspan="3"></th>
                        <th colspan="2" class="thead--guinda">Salario Mensual</th>
                    </tr>
                    <tr>
                        <th class="thead--gris">Título del Empleo</th>
                        <th class="thead--gris">Carrera</th>
                        <th class="thead--gris">Experiencia</th>
                        <th class="thead--gris2">Monto mínimo</th>
                        <th class="thead--gris2">Monto máximo</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td>Ingeniero en Electrónica</td>
                        <td>Ing. en Electrónica</td>
                        <td>Cero años</td>
                        <td class="colgris">$12,000</td>
                        <td class="colgris">$13,000</td>
                    </tr>
                    <tr>
                        <td>Electromecánico</td>
                        <td>Ing. en Mecánica Automotríz</td>
                        <td>Tres años</td>
                        <td class="colgris">$8,000</td>
                        <td class="colgris">$18,000</td>
                    </tr>
                    <tr>
                        <td>Eléctrico automotriz</td>
                        <td>Ing. en Mecánica Automotríz</td>
                        <td>Dos años</td>
                        <td>$8,000</td>
                        <td>$11,000</td>
                    </tr>
                    <tr>
                        <td>Mecánico diesel</td>
                        <td>Ing. en Mecánica Automotríz</td>
                        <td>Dos años</td>
                        <td>$8,000</td>
                        <td >$12,000</td>
                    </tr>
                    <tr>
                        <td>Pintor automotríz</td>
                        <td>Ing. en Mecánica Automotríz</td>
                        <td>Dos años</td>
                        <td>$6,500</td>
                        <td>$10,000</td>
                    </tr>
                    <tr>
                        <td>Gerente de ventas</td>
                        <td>Lic. en Ciencias Empresariales</td>
                        <td>Seis años</td>
                        <td>$6,000</td>
                        <td>$30,000</td>
                    </tr>
                    <tr>
                        <td>Ejecutivo de ventas</td>
                        <td>Lic. en Ciencias Empresariales</td>
                        <td>Cinco años</td>
                        <td>$5,000</td>
                        <td>$20,000</td>
                    </tr>
                    <tr>
                        <td>Auxiliar de finanzas</td>
                        <td>Lic. en Ciencias Empresariales</td>
                        <td>Dos años</td>
                        <td>$7,000</td>
                        <td>$14,000</td>
                    </tr>
                    <tr>
                        <td>Analista financiero</td>
                        <td>Lic. en Ciencias Empresariales</td>
                        <td>Cuatro años</td>
                        <td>$10,000</td>
                        <td>$18,000</td>
                    </tr>
                    <tr>
                        <td>Gerente de recursos humanos</td>
                        <td>Lic. en Ciencias Empresariales</td>
                        <td>Seis años</td>
                        <td>$4,300</td>
                        <td>$25,000</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <div class="contenido--navegar">
                <ul>
                    <li><a href="#">Anterior</a></li>
                    <li><a href="#">1</a></li>
                    <li style="background-color: #6d000e;"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">Siguiente</a></li>
                </ul>
            </div>
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
