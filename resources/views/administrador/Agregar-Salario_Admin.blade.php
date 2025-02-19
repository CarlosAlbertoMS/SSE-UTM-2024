<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar salario - ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/administrador/Agregar-Salario_Admin.css') }}">
</head>
<body>
    
    @include('layouts.header')


    <section id="contenido">
        
        <form action ="{{ route('salarios.store') }}" method="POST">
            @csrf
            <div class="formcamp">
                <div class="linea">
                    <div class="campo">
                        <div><label for="uname">Título del empleo</label></div>
                        <div><input type="text" id="empleo" name="empleo" placeholder="Título del empleo"></div>
                    </div>
                    <div class="campo">
                        <div><label for="uname">Experiencia</label></div>
                        <div><input type="text" id="experiencia" name="experiencia" placeholder="Años de experiencia"></div>
                    </div>
                </div>
                <div class="linea">
                    <div class="campo">
                        <div><label for="uname">Carrera</label></div>
                        <div><input type="text" id="carrera" name="carrera" placeholder="Carrera"></div>
                    </div>
                    <div class="linea">
                        <div class="campo">
                            <div><label for="uname">Monto mínimo mensual</label></div>
                            <div class="campo2"><input type="text" id="monto_min" name="monto_minimo" placeholder="Monto mínimo"></div>
                        </div>
                        <div class="campo">
                            <div><label for="uname">Monto máximo mensual</label></div>
                            <div class="campo2"><input type="text" id="monto_max" name="monto_maximo" placeholder="Monto máximo"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="formbutt">
            <a href="Salarios_Admin.html" class="cancelarbtn">Cancelar</a>
            <button type="submit" class="guardarbtn">Guardar</button>

            </div>
        </form>
        
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
    
    <div id="popup" class="overlay">
        <div id="popupBody">
            <div>
                <h2>Mensaje</h2>
                <p>¡Enhorabuena!, Cambios guardados con éxito</p>
                <a id="cerrar" href="Salarios_Admin.html"><div>Cerrar</div></a>
            </div>
        </div>
    </div>
    
</body>
</html>
