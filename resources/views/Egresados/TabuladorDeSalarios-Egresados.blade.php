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
    
    @include('layouts.egresados.header')
    
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
                    </tr
                </thead>
                
                <tbody>
                    @foreach ($paginador as $tabulador)
                        <tr>
                            <td> {{ $tabulador['empleo'] ?? 'N/A' }} </td>
                            <td> {{ $tabulador['carrera'] ?? 'N/A' }} </td>
                            <td> {{ $tabulador['experiencia'] ?? 'N/A' }} años </td>
                            <td> {{ $tabulador['monto_minimo'] ?? 'N/A' }}</td>
                            <td> {{ $tabulador['monto_maximo'] ?? 'N/A' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <x-paginador :paginador="$paginador" />
        </section>
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
