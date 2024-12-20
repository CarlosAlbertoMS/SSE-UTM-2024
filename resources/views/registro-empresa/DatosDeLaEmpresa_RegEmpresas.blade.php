<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="./DatosDeLaEmpresa_RegEmpresas.css" /> -->
    <link rel="stylesheet" href="{{ asset('css/Empresa/DatosDeLaEmpresa_RegEmpresas.css') }}"> <!-- Estilos específicos para la página -->

    <title>Datos de la empresa</title>
  </head>

  <body>
    <header>
        <figure>
            <img src="../assets/img/u26.png" class="header--img1" alt="" />
        </figure>
        <div class="main--title">
            <p>Sistema de Seguimiento de Egresados y Bolsa de Trabajo Empresas</p>
        </div>
        <figure>
            <img src="../assets/img/u43.png" class="header--img2" alt="" />
        </figure>
    </header>

    <main>
        <section class="main--section">
            <div class="main-img">
                <div class="main--back">
                    <!--main--container = main--back -->
                    <div class="main--header">
                        <div class="main--header--flecha-1 flecha-header-1">
                            <img src="../assets/flechas/FLECHA_INICIO_GRIS.png">
                            <div class="main--header--flecha--text-1">
                                <p>Universidad Objetivo</p>
                            </div>
                        </div>
                        <div class="main--header--flecha-2 flecha-header-2">
                            <img src="../assets/flechas/FLECHA_INTERMEDIO_GRIS.png">
                            <div class="main--header--flecha--text-2">
                                <p>Crear Cuenta de Empresa</p>
                            </div>
                        </div>
                        <div class="main--header--flecha-2 flecha-header-3">
                            <img src="../assets/flechas/FLECHA_INTERMEDIO.png">
                            <div class="main--header--flecha--text-3">
                                <p>Datos de la Empresa</p>
                            </div>
                        </div>
                        <div class="main--header--flecha-2 flecha-header-4">
                            <img src="../assets/flechas/FLECHA_FINAL_GRIS.png">
                            <div class="main--header--flecha--text-4">
                                <p>Encuesta de Satisfacción</p>
                            </div>
                        </div>
                    </div>
    
                    <section id="contenido--formulario-formulario">
    
                        <section id="formulario--formulario1">
                            <h1>Datos de la empresa</h1>
        
                            <p>Nombre de la Empresa*</p>
                            <input type="text" name="Nombre--E" class="datos--empresa" placeholder="Nombre de la empresa...">
        
                            <p>Correo Electrónico*</p>
                            <input type="text" name="Correo-E" class="datos--empresa" placeholder="Correo de la empresa...">
        
                            <p>Teléfono*</p>
                            <input type="text" name="Telefono-E" class="datos--empresa"
                                placeholder="Teléfono o de la empresa...">
        
                            <p>Perfil</p>
                            <input type="text" name="Perfil-E" class="datos--empresa"
                                placeholder="Cargar imagen no mayor a 2MB....">
        
                            <p>Descripción*</p>
                            <textarea type="text" name="Descripción-E" class="datos--empresa-descripcion"
                                placeholder="Describe a la empresa..."></textarea>
        
                            <section class="formulario--datos--empresa-flex">
                                <div>
                                    <p>Giro de la Empresa*</p>
                                    <input type="text" name="Giro-E" class="datos--empresa-flex"
                                        placeholder="Giro de la empresa...">
                                </div>
        
                                <div>
                                    <p>Sector*</p>
                                    <select class="datos--empresa-flex" name="-Sector-">
                                        <option value="value1" disabled="disabled">— Sector —</option>
                                        <option value="value1">-Público</option>
                                        <option value="value1">-Privado</option>
                                        <option value="value1">-Mixta</option>
                                    </select>
                                </div>
        
                            </section>
        
                            <p id="subtitule--form1">Dirección de la Empresa</p>
        
                            <section class="formulario--datos--empresa-flex">
                                <div>
                                    <p>Calle*</p>
                                    <input type="text" name="Giro-E" class="datos--empresa-flex" placeholder="Calle">
                                </div>
        
                                <div>
                                    <p>Colonia*</p>
                                    <input type="text" name="Giro-E" class="datos--empresa-flex" placeholder="Colonia">
                                </div>
        
                            </section>
        
                            <section class="formulario--datos--empresa-flex">
                                <div>
                                    <p>No. / Piso</p>
                                    <input type="text" name="Giro-E" class="datos--empresa--flex-1" placeholder="Número/Piso">
                                </div>
        
                                <div>
                                    <p>C.P.*</p>
                                    <input type="text" name="Giro-E" class="datos--empresa--flex-1" placeholder="C.P.">
                                </div>
        
                                <div>
                                    <p>Ciudad*</p>
                                    <input type="text" name="Giro-E" class="datos--empresa-flex" placeholder="Ciudad">
                                </div>
        
                            </section>
        
                            <p>Estado*</p>
                            <input type="text" name="Estado-E" class="datos--empresa-flex" placeholder="Estado">
        
                            <p>Página Web*</p>
                            <input type="text" name="PaginaWeb--E" class="datos--empresa"
                                placeholder="Página web de la empresa...">
        
                            <p>RFC</p>
                            <input type="text" name="RFC-E" class="datos--empresa-flex"
                                placeholder="Ingrese RFC de la empresa...">
        
                            <p>Información Adicionales</p>
        
                            <textarea type="text" name="Info-Adic-E" class="datos--empresa--flex-2"
                                placeholder="Agrega cualquier otra información adicional que crea necesario."></textarea>
        
                            <br>
                            <br>
                        </section>
        
                        <section id="formulario--formulario2">
                            <h1>Datos del Contacto*</h1>
        
                            <p>Nombre del Contacto*</p>
                            <input type="text" name="Nombre--C" class="datos--empresa" placeholder="Nombre del contacto...">
        
                            <p>Puesto en la empresa*</p>
                            <input type="text" name="Puesto--C" class="datos--empresa"
                                placeholder="Puesto en la empresa del contacto...">
        
                            <p>Correo Electrónico*</p>
                            <input type="text" name="Correo--C" class="datos--empresa" placeholder="Correo del contacto...">
        
                            <p>Teléfono*</p>
                            <input type="text" name="Telefono--C" class="datos--empresa"
                                placeholder="Teléfono o del contacto...">
                            <br>
                            <br>
                        </section>
                    </section>
        
                    <section class="" id="contenido--navegar-ingreso">
                        <p>*Campos obligatorios</p>
                        <div class="navegar--botones">
                            <button class="navegar--botones-G" type="button" href="">
                                <a href="{{route('empresa_cuenta')}}">Regresar</a>
                            </button>
                            <button class="navegar--botones-A" type="button">
                                <a href="{{route('empresa_encuesta')}}">Siguiente</a>
                            </button>
                        </div>
                    </section>
                </div>

                <!-- Background -->
                <img src="../assets/img/u46.jpg" alt="" class="img--background" />
            </div>
        </section>
    </main>

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
                    <p>SUNEO, Oaxaca, México. 2020</p>
                </section>
    
                <section id="footer-texto2">
                    <p>Teléfonos: (953) 53 203 99 o (953) 53 202 14 ext. 113 o 116</p>
                    <p>Carretera a Acatlima Km. 2.5 Huajuapan de León, Oaxaca, México C.P 69000</p>
                </section>
            </section>
        </section>

        <section id="logo--estado-img">
            <img src="../assets/img/u14.png">
        </section>

    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
