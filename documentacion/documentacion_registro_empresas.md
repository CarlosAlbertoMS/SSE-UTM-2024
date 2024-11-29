# SSEyB | Vistas/Views para el administrador

![This is an alt text.](utm_u31.png "Imagen insana")

### Nombre:
##### Bacilio Anota Marvin Salvador
### Fecha:
##### 15 de noviembre de 2024
___

# **Vistas/Views**
Directorio en el proyecto
> SSE\resources\views

## **Crear-Cuenta_Empresa**
> `C:\Users\marti\SSE-UTM-2024\resources\views\registro-empresa\Crear-Cuenta_Empresa.blade.php`

![This is an alt text.](Crear-Cuenta_Empresa.png "Imagen insana")

<!-- mdinclude: C:\Users\marti\SSE-UTM-2024\resources\views\registro-empresa\Crear-Cuenta_Empresa.blade.php -->

[Nombre del archivo](C:\Users\marti\SSE-UTM-2024\resources\views\registro-empresa\Crear-Cuenta_Empresa.blade.php)

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="./CrearCuenta-empresa.css" /> -->
    <link rel="stylesheet" href="{{ asset('css/Empresa/CrearCuenta-empresa.css') }}"> <!-- Estilos específicos para la página -->

    <title>Crear cuenta de empresa</title>
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
                    <div class="main--header">
                        <div class="main--header--flecha-1 flecha-1">
                            <img src="../assets/flechas/FLECHA_INICIO_GRIS.svg" alt="" />
                            <div class="main--header--flecha--text-1">
                                <p>Universidad Objetivo</p>
                            </div>
                        </div>
                        <div class="main--header--flecha-2 flecha-2">
                            <img src="../assets/flechas/FLECHA_INTERMEDIO.png" alt="" />
                            <div class="main--header--flecha--text-2">
                                <p>Crear Perfil de Empresa</p>
                            </div>
                        </div>
                        <div class="main--header--flecha-2 flecha-3">
                            <img src="../assets/flechas/FLECHA_INTERMEDIO_GRIS.png" alt="" />
                            <div class="main--header--flecha--text-3">
                                <p>Datos de la Empresa</p>
                            </div>
                        </div>
                        <div class="main--header--flecha-2 flecha-4">
                            <img src="../assets/flechas/FLECHA_FINAL_GRIS.png" alt="" />
                            <div class="main--header--flecha--text-4">
                                <p>Encuesta de Satisfacción</p>
                            </div>
                        </div>
                    </div>

                    <!--CONTENIDO-->
                    <div class="main-form">
                        <form action="" class="form-crear-perfil-empresa">
                            <li>
                                <label for="correo">Correo electrónico*</label>
                                <input type="email" name="correo" id="correo" placeholder="Correo de la empresa">
                            </li>
                            <li>
                                <label for="usuario">Usuario*</label>
                                <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario">
                            </li>
                            <li>
                                <label for="contrasenia">Contraseña*</label>
                                <input type="email" name="contrasenia" id="contrasenia" placeholder="Contraseña">
                            </li>
                            <li>
                                <label for="confirmar-contrasenia">Confirmar contraseña*</label>
                                <input type="email" name="confirmar-contrasenia" id="confirmar-contrasenia" placeholder="Contraseña">
                            </li>
                            <p class="campos-obligatorios">*Campos obligatorios</p>
                            <p class="informacion">Todos los datos proporcionados serán verificados para cerciorar su veracidad.</p>
                            <div class="contenedor-botones">
                                <a href="Ingreso_selecciona_universidad.html" class="button--1">Regresar</a>
                                <a href="{{route('empresa_datos')}}" class="button--2">Siguiente</a>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Background -->
                <img src="../assets/img/u46.jpg" alt="" class="img--background" />
            </div>
        </section>
    </main>

    <footer>
        <div class="footer--div1-img">
            <img src="../assets/img/u26.png" class="footer-img1" alt="">
        </div>
        <div class="footer--titleT1">
            <a href="#">Sobre SUNEO</a>
            <a href="#">Aviso de Privacidad</a>
            <a href="#">Empresas</a>
            <a href="#">Ayuda</a>
        </div>
        <div class="footer--text">
            <div class="footer--textT1">
                <p>Coordinación de Vinculación de Alumnos y Egresados UTM</p>
                <p>De Lunes a Viernes de 8:00 a 13:00 y de 16:00 a 19:00 hrs</p>
                <p>SUNEO, Oaxaca, México. 2020</p>
            </div>
            <div class="footer--textT2">
                <p>Teléfonos: (953) 53 203 99 o (953) 53 202 14 ext. 113 o 116</p>
                <p>Carretera a Acatlima Km. 2.5 Huajuapan de León, Oaxaca, México C.P
                    69000</p>
            </div>
        </div>
        <div class="footer--div2-img">
            <img src="../assets/img/u14.png" class="footer-img2" alt="" />
        </div>
    </footer>

    <aside id="utm" class="modal--container">
        <div class="content-modal">
            <div class="container-text1">
                <p class="modal-texto1">
                    La Universidad Tecnológica de la Mixteca, con domicilio en carretera a acatlima Km. 2.5,
                    Huajuapan de León, Oaxaca. utilizará tus datos personales recabados de este sistema
                    para realizar un seguimiento preciso de las actividades profesionales de nuestro
                    egresados que servirá como instrumento de análisis estadístico del desempeño
                    académico de tu universidad. Tu información se tratará con absoluta confidencialidad, y
                    solo será para uso del sistema, ni empleadores, ni personas ajenas al sistema podrán
                    visualizarla. Para mayor información acerca del tratamiento y de los derechos que
                    puedes hacer valer, puedes acceder al aviso de privacidad completo a través de nuestra
                    oficina de seguimiento a egresados, ubicada en la misma dirección.
                </p>
            </div>
            <div class="container-text2">
                <p class="modal-texto2"><a href="">Leer aviso de privacidad completo</a></p>
            </div>
            <div class="modal--container-buttons">
                <a href="#" class="modal-button1"> Cancelar </a>
                <a href="#" class="modal-button2"> Aceptar </a>
            </div>
        </div>
    </aside>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
```

## **DatosDeLaEmpresa_RegEmpresas**
> `C:\Users\marti\SSE-UTM-2024\resources\views\registro-empresa\DatosDeLaEmpresa_RegEmpresas.blade.php`

![This is an alt text.](DatosDeLaEmpresa_RegEmpresas.png "Imagen insana")

<!-- mdinclude: C:\Users\marti\SSE-UTM-2024\resources\views\registro-empresa\DatosDeLaEmpresa_RegEmpresas.blade.php -->

[Nombre del archivo](C:\Users\marti\SSE-UTM-2024\resources\views\registro-empresa\DatosDeLaEmpresa_RegEmpresas.blade.php)

```html
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
                                <a href="../Vistas-Registro Empresas/CrearCuenta-Empresa.html">Regresar</a>
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

```

## **Encuesta-satisfaccion-Empresa**
> `C:\Users\marti\SSE-UTM-2024\resources\views\registro-empresa\Encuesta-satisfaccion-Empresa.blade.php`

![This is an alt text.](Encuesta-satisfaccion-Empresa.png "Imagen insana")

<!-- mdinclude: C:\Users\marti\SSE-UTM-2024\resources\views\registro-empresa\Encuesta-satisfaccion-Empresa.blade.php -->

[Nombre del archivo](C:\Users\marti\SSE-UTM-2024\resources\views\registro-empresa\Encuesta-satisfaccion-Empresa.blade.php)

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../estilo.css" />
    <!-- <link rel="stylesheet" href="./Encuesta-satisfaccion-Empresa.css" /> -->
    <link rel="stylesheet" href="{{ asset('css/Empresa/Encuesta-satisfaccion-Empresa.css') }}"> <!-- Estilos específicos para la página -->

    <title>Encuesta de Satisfacción</title>
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
                    <div class="main--header">
                        <div class="main--header--flecha-1 flecha-1">
                            <img src="../assets/flechas/FLECHA_INICIO_GRIS.svg" alt="" />
                            <div class="main--header--flecha--text-1">
                                <p>Universidad Objetivo</p>
                            </div>
                        </div>
                        <div class="main--header--flecha-2 flecha-2">
                            <img src="../assets/flechas/FLECHA_INTERMEDIO_GRIS.png" alt="" />
                            <div class="main--header--flecha--text-2">
                                <p>Crear Perfil de Empresa</p>
                            </div>
                        </div>
                        <div class="main--header--flecha-2 flecha-3">
                            <img src="../assets/flechas/FLECHA_INTERMEDIO_GRIS.png" alt="" />
                            <div class="main--header--flecha--text-3">
                                <p>Datos de la Empresa</p>
                            </div>
                        </div>
                        <div class="main--header--flecha-2 flecha-4">
                            <img src="../assets/flechas/FLECHA_FINAL.png" alt="" />
                            <div class="main--header--flecha--text-4">
                                <p>Encuesta de Satisfacción</p>
                            </div>
                        </div>
                    </div>

                    <!-- CONTENIDO -->
                    <div class="main-form">
                        <form action="" class="form-cuestionario-satisfaccion">
                            <div class="contenedor-padre-preguntas">
                                <!-- PREGUNTA 1 -->
                                <div class="contenedor-pregunta">
                                    <p class="pregunta-encuesta pregunta-1">
                                        1.- En caso de haber contratado previamente a un egresado, ¿cuál es el grado de
                                        conocimientos que éste ha mostrado en sus funciones dentro de la empresa?. O de
                                        lo contrario, ¿cuál es el grado de conocimiento esperado en el egresado?
                                    </p>
                                    <div class="contenedor-opciones-respuesta opciones-pregunta-1">
                                        <li>
                                            <input type="radio" name="respuesta1" id="">
                                            <label for="respuesta1">Excelente</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="respuesta2" id="">
                                            <label for="respuesta2">Sobresaliente</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="respuesta3" id="">
                                            <label for="respuesta3">Aceptable</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="respuesta4" id="">
                                            <label for="respuesta4">Insuficiente</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="respuesta5" id="">
                                            <label for="respuesta5">Deficiente</label>
                                        </li>
                                    </div>
                                </div>

                                <!-- PREGUNTA 2 -->
                                <div class="contenedor-pregunta">
                                    <p class="pregunta-encuesta">
                                        2.- ¿El egresado carece o careció de algúno(s) conocimiento(s) básico(s) para realizar sus actividades, al momento de egresar?
                                    </p>
                                    <div class="contenedor-respuesta-encuesta--p1">
                                        <div class="contenedor-respuesta-1-p2">
                                            <div class="contenedor-respuesta-si-p2">
                                                <input type="radio" name="respuesta-si" id="">
                                                <label for="respuesta-si">Sí, ¿Cuáles?</label>
                                            </div>
                                            <div class="contenedor-incisos-p2">
                                                <div class="parte1-incisos-p2">
                                                    <li class="contenedor-inciso-p2">
                                                        <label for="inciso-a">a)</label>
                                                        <input type="text" name="inciso-a" id="">
                                                    </li>
                                                    <li class="contenedor-inciso-p2">
                                                        <label for="inciso-a">b)</label>
                                                        <input type="text" name="inciso-a" id="">
                                                    </li>
                                                </div>
                                                <div class="parte2-incisos-p2">
                                                    <li class="contenedor-inciso-p2">
                                                        <label for="inciso-a">c)</label>
                                                        <input type="text" name="inciso-a" id="">
                                                    </li>
                                                    <li class="contenedor-inciso-p2">
                                                        <label for="inciso-a">a)</label>
                                                        <input type="text" name="inciso-a" id="">
                                                    </li>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contenedor-respuesta-2-p2">
                                            <input type="radio" name="respuesta-no" id="">
                                            <label for="respuesta-no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- PREGUNTA 3 -->
                                <div class="contenedor-pregunta">
                                    <p class="pregunta-encuesta">
                                        3.- ¿El egresado requiere o requirió actualizar sus conocomientos con base a las
                                        necesidades de la empresa?
                                    </p>
                                    <div class="contenedor__respuesta__encuesta--p3">
                                        <div class="contenedor__respuesta__1--p3">
                                            <div class="contenedor__subseccion__respuesta__1--p3">
                                                <li>
                                                    <input type="radio" name="respuesta-si" id="">
                                                    <label for="respuesta-si">Sí, ¿Cuáles?</label>
                                                </li>
                                            </div>
                                            <div class="contenedor__incisos--p3">
                                                <div class="subcontenedor__incisos-s1--p3">
                                                    <li class="contenedor__inciso--p3">
                                                        <label for="inciso__a--p3">a)</label>
                                                        <input type="text" name="inciso__a--p3" id="">
                                                    </li>
                                                    <li class="contenedor__inciso--p3">
                                                        <label for="inciso__b--p3">b)</label>
                                                        <input type="text" name="incis__b--p3" id="">
                                                    </li>
                                                </div>

                                                <div class="subcontenedor__incisos-s2--p3">
                                                    <li class="contenedor__inciso--p3">
                                                        <label for="inciso__c--p3">c)</label>
                                                        <input type="text" name="inciso__c--p3" id="">
                                                    </li>
                                                    <li class="contenedor__inciso--p3">
                                                        <label for="inciso__d--p3">d)</label>
                                                        <input type="text" name="inciso__d--p3" id="">
                                                    </li>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="contenedor__respuesta__2--p3">
                                            <input type="radio" name="respuesta-no" id="">
                                            <label for="respuesta-no">No</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- PREGUNTA 4 -->
                                <div class="contenedor-pregunta">
                                    <p class="pregunta-encuesta">
                                        4.- Seleccione máximo cinco habilidades que considere importantes deba
                                        desarrollar el egresado para realizar sus actividades dentro de la empresa.
                                    </p>
                                    <div class="contenedor__respuestas__encuesta--p4">
                                        <div class="contenedor__opciones--p4">
                                            <div class="subseccion__opciones__1--p4">
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__1--p4" id="">
                                                    <label for="respuesta__opcion__1--p4">Comunicar</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="rrespuesta__opcion__2--p4" id="">
                                                    <label for="respuesta__opcion__2--p4">Identificar y resolver problemas</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__3--p4" id="">
                                                    <label for="respuesta__opcion__3--p4">Aprender</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__4--p4" id="">
                                                    <label for="respuesta__opcion__4--p4">Categorizar/clasificar</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__5--p4" id="">
                                                    <label for="respuesta__opcion__5--p4">Procesar</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__6--p4" id="">
                                                    <label for="respuesta__opcion__6--p4">Resolver conflictos</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__7--p4" id="">
                                                    <label for="respuesta__opcion__7--p4">Interpretar</label>
                                                </li>
                                            </div>
                                            <div class="subseccion__opciones__2--p4">
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__8--p4" id="">
                                                    <label for="respuesta__opcion__8--p4">Honestidad</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__9--p4" id="">
                                                    <label for="respuesta__opcion__9--p4">Responsabilidad</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__10--p4" id="">
                                                    <label for="respuesta__opcion__10--p4">Imparcialidad</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__11--p4" id="">
                                                    <label for="respuesta__opcion__11--p4">Disciplina</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__12--p4" id="">
                                                    <label for="respuesta__opcion__12--p4">Puntualidad</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__13--p4" id="">
                                                    <label for="respuesta__opcion__13--p4">Disponibilidad</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__14--p4" id="">
                                                    <label for="respuesta__opcion__14--p4">Honradez</label>
                                                </li>
                                            </div>
                                            <div class="subseccion__opciones__3--p4">
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__15--p4" id="">
                                                    <label for="respuesta__opcion__15--p4">Lealtad</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__16--p4" id="">
                                                    <label for="respuesta__opcion__16--p4">Tolerancia</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__17--p4" id="">
                                                    <label for="respuesta__opcion__17--p4">Solidaridad</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__18--p4" id="">
                                                    <label for="respuesta__opcion__18--p4">Eficiencia</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__19--p4" id="">
                                                    <label for="respuesta__opcion__19--p4">Calidad en el trabajo</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__20--p4" id="">
                                                    <label for="respuesta__opcion__20--p4">Profesionalidad</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__21--p4" id="">
                                                    <label for="respuesta__opcion__21--p4">Justicia</label>
                                                </li>
                                            </div>
                                        </div>
                                        <div class="contenedor__opcion-otro--p4">
                                            <li>
                                                <label for="respuesta-p4-otros">Otras:</label>
                                                <input type="text" name="respuesta-p4-otros" id="">
                                            </li>
                                        </div>
                                    </div>
                                </div>

                                <!-- PREGUNTA 5 -->
                                <div class="contenedor-pregunta">
                                    <p class="pregunta-encuesta p-5">
                                        5.- Considerando las habilidades seleccionadas en el punto 4, ¿qúe habilidades
                                        no demuestra o demostró el egresado para realizar sus actividades, al momento de
                                        ingresar a su empresa?
                                    </p>
                                    <div class="contenedor__respuestas__encuesta--p5">
                                        <div class="subseccion__respuestas__1--p5">
                                            <li class="contenedor__inciso--p5">
                                                <label for="inciso-a">a)</label>
                                                <input type="text" name="inciso-a" id="">
                                            </li>
                                            <li class="contenedor__inciso--p5">
                                                <label for="inciso-a">b)</label>
                                                <input type="text" name="inciso-a" id="">
                                            </li>
                                            <li class="contenedor__inciso--p5">
                                                <label for="inciso-a">c)</label>
                                                <input type="text" name="inciso-a" id="">
                                            </li>
                                        </div>
                                        <div class="subseccion__respuestas__2--p5">
                                            <li class="contenedor__inciso--p5">
                                                <label for="inciso-a">d)</label>
                                                <input type="text" name="inciso-a" id="">
                                            </li>
                                            <li class="contenedor__inciso--p5">
                                                <label for="inciso-a">e)</label>
                                                <input type="text" name="inciso-a" id="">
                                            </li>
                                        </div>
                                    </div>
                                </div>

                                <!-- PREGUNTA 6 -->
                                <div class="contenedor-pregunta">
                                    <p class="pregunta-encuesta p-6">
                                        6.- ¿El egresado carece o careció del dominio de alguna(s) área(s)
                                        conocimiento(s) básico(s) para realizar sus
                                        habiliadades, al momento de ingresar a su empresa?
                                    </p>
                                    <div class="contenedor__respuestas__encuesta--p6">
                                        <div class="contenedor__respuesta__1--p6">
                                            <li class="respuesta__1--p6">
                                                <input type="radio" name="respuesta__si--p6" id="">
                                                <label for="respuesta__si--p6">Sí, ¿Cuáles?</label>
                                            </li>
                                            <div class="contenedor__incisos--p6">
                                                <div class="subseccion__incisos__1--p6">
                                                    <li class="contenedor__inciso--p6">
                                                        <label for="inciso__a--p6">a)</label>
                                                        <input type="text" name="inciso__a--p6" id="">
                                                    </li>
                                                    <li class="contenedor__inciso--p6">
                                                        <label for="inciso__b--p6">b)</label>
                                                        <input type="text" name="inciso__a--p6" id="">
                                                    </li>
                                                </div>
                                                <div class="subseccion__incisos__2--p6">
                                                    <li class="contenedor__inciso--p6">
                                                        <label for="inciso__c--p6">c)</label>
                                                        <input type="text" name="inciso__c--p6" id="">
                                                    </li>
                                                    <li class="contenedor__inciso--p6">
                                                        <label for="inciso__d--p6">d)</label>
                                                        <input type="text" name="inciso__d--p6" id="">
                                                    </li>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contenedor__respuesta__2--p6">
                                            <input type="radio" name="respuesta__no--p6" id="">
                                            <label for="respuesta__no--p6">No</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- PREGUNTA 7 -->
                                <div class="contenedor-pregunta">
                                    <p class="pregunta-encuesta">
                                        7.- Seleccione máximo cinco valores o actividades que considere importante debe tener el egresado para realizar sus actividades, al momento de ingresar a su empresa?
                                    </p>
                                    <div class="contenedor__respuesta__encuesta--p7">
                                        <div class="contenedor__subsecciones--p7">
                                            <div class="subseccion__respuestas__1--p7">
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__1--p7" id="">
                                                    <label for="respuesta__opcion__1--p7">Respeto</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__2--p7" id="">
                                                    <label for="respuesta__opcion__2--p7">Discrecionalidad</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__3--p7" id="">
                                                    <label for="respuesta__opcion__3--p7">Respeto a la naturaleza</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__4--p7" id="">
                                                    <label for="respuesta__opcion__4--p7">Perseverancia</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__5--p7" id="">
                                                    <label for="respuesta__opcion__5--p7">Limpieza</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__6--p7" id="">
                                                    <label for="respuesta__opcion__6--p7">Empatia</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__7--p7" id="">
                                                    <label for="respuesta__opcion__7--p7">Interpretar</label>
                                                </li>
                                            </div>
                                            <div class="subseccion__respuestas__2--p7">
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__8--p7" id="">
                                                    <label for="respuesta__opcion__8--p7">Honestidad</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__9--p7" id="">
                                                    <label for="respuesta__opcion__9--p7">Responsabilidad</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__10--p7" id="">
                                                    <label for="respuesta__opcion__10--p7">Imparcialidad</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__11--p7" id="">
                                                    <label for="respuesta__opcion__11--p7">Disciplina</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__12--p7" id="">
                                                    <label for="respuesta__opcion__12--p7">Puntualidad</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__13--p7" id="">
                                                    <label for="respuesta__opcion__13--p7">Disponibilidad</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__14--p7" id="">
                                                    <label for="respuesta__opcion__14--p7">Honradez</label>
                                                </li>
                                            </div>
                                            <div class="subseccion__respuestas__3--p7">
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__15--p7" id="">
                                                    <label for="respuesta__opcion__15--p7">Lealtad</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__16--p7" id="">
                                                    <label for="respuesta__opcion__16--p7">Tolerancia</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__17--p7" id="">
                                                    <label for="respuesta__opcion__17--p7">Solidaridad</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__18--p7" id="">
                                                    <label for="respuesta__opcion__18--p7">Eficiencia</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__19--p7" id="">
                                                    <label for="respuesta__opcion__19--p7">Calidad en el trabajo</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__20--p7" id="">
                                                    <label for="respuesta__opcion__20--p7">Profesionalidad</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="respuesta__opcion__21--p7" id="">
                                                    <label for="respuesta__opcion__21--p7">Justicia</label>
                                                </li>
                                            </div>
                                        </div>
                                        <div class="contenedor__respuesta__2--p7">
                                            <li>
                                                <label for="respuesta__otros--p7">Otras:</label>
                                                <input type="text" name="respuesta__otros--p7" id="">
                                            </li>
                                        </div>
                                    </div>
                                </div>

                                <!-- PREGUNTA 8 -->
                                <div class="contenedor-pregunta">
                                    <p class="pregunta-encuesta">
                                        8.- Considerando las habilidades seleccionadas en el punto 7, ¿qúe no demuestra o demostró el egresado para realizar sus actividades, al momento de ingresar a su empresa?
                                    </p>
                                    <div class="contenedor__respuestas__encuesta--p8">
                                        <div class="subseccion__1__respuestas--p8">
                                            <li class="contenedor__inciso--p8">
                                                <label for="inciso__a--p8">a)</label>
                                                <input type="text" name="inciso__a--p8" id="">
                                            </li>
                                            <li class="contenedor__inciso--p8">
                                                <label for="inciso__b--p8">b)</label>
                                                <input type="text" name="inciso__b--p8" id="">
                                            </li>
                                            <li class="contenedor__inciso--p8">
                                                <label for="inciso__c--p8">c)</label>
                                                <input type="text" name="inciso__c--p8" id="">
                                            </li>
                                        </div>
                                        <div class="subseccion__2__respuestas--p8">
                                            <li class="contenedor__inciso--p8">
                                                <label for="inciso__d--p8">d)</label>
                                                <input type="text" name="inciso__d--p8" id="">
                                            </li>
                                            <li class="contenedor__inciso--p8">
                                                <label for="inciso__e--p8">e)</label>
                                                <input type="text" name="inciso__e--p8" id="">
                                            </li>
                                        </div>
                                    </div>
                                </div>

                                <!-- PREGUNTA 9 -->
                                <div class="contenedor-pregunta">
                                    <p class="pregunta-encuesta">
                                        9.- Seleccione máximo cinco habilidades que considere importantes deba desarrollar el egresado para realizar sus actividades.
                                    </p>
                                    <div class="contenedor__respuestas__encuesta--p9">
                                        <div class="subseccion__1__respuestas--p9">
                                            <li class="contenedor__inciso--p9">
                                                <input type="radio" name="respuesta__opcion__1--p9" id="">
                                                <label for="respuesta__opcion__1--p9">Competencias laborales</label>
                                            </li>
                                            <li class="contenedor__inciso--p9">
                                                <input type="radio" name="respuesta__opcion__2--p9" id="">
                                                <label for="respuesta__opcion__2--p9">Ser egresado del SUNEO</label>
                                            </li>
                                            <li class="contenedor__inciso--otro--p9">
                                                <label for="respuesta__opcion__otros--p9">Otras:</label>
                                                <input type="text" name="respuesta__opcion__otros--p9" id="">
                                            </li>
                                        </div>
                                        <div class="subseccion__2__respuestas--p9">
                                            <li class="contenedor__inciso--p9">
                                                <input type="radio" name="respuesta__opcion__3--p9" id="">
                                                <label for="respuesta__opcion__3--p9">Estar titulado</label>
                                            </li>
                                            <li class="contenedor__inciso--p9">
                                                <input type="radio" name="respuesta__opcion__4--p9" id="">
                                                <label for="respuesta__opcion__4--p9">Dominar un idioma extranjero</label>
                                            </li>
                                        </div>
                                        <div class="subseccion__1__respuestas--p9">
                                            <li class="contenedor__inciso--p9">
                                                <input type="radio" name="respuesta__opcion__5--p9" id="">
                                                <label for="respuesta__opcion__5--p9">Acreditar el examen de selección</label>
                                            </li>
                                            <li class="contenedor__inciso--p9">
                                                <input type="radio" name="respuesta__opcion__6--p9" id="">
                                                <label for="respuesta__opcion__6--p9">habilidades socio-comunicativos</label>
                                            </li>
                                        </div>
                                    </div>
                                </div>

                                <!-- PREGUNTA 10 -->
                                <div class="contenedor-pregunta">
                                    <p class="pregunta-encuesta">
                                        10. Indique el valor que como empleador le da a los siguientes factores, al momento de contratar a un egresado.
                                    </p>
                                    <div class="contenedor__opciones__respuesta--p10">
                                        <!--tabla de opciones-->
                                        <table class="tabla__opciones--p10">                  
                                            <tr class="fila__titulos--p10" style="background-color: transparent;">
                                                <th class="columna__1__tabla--p10">
                                                </th>
                                                <th class="columna__2__tabla--p10">
                                                    <p>Indispensable</p>
                                                    <p>0</p>
                                                </th>
                                                <th class="columna__3__tabla--p10"> 3 </th>
                                                <th class="columna__4__tabla--p10"> 4 </th>
                                                <th class="columna__5__tabla--p10">
                                                    <p>No Indispensable</p>
                                                    <p>5</p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td class="contenedor__inciso--p10">
                                                    <p>
                                                        a) Área o campo de estudio.
                                                    </p>
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso__a__opcion__0--p10" id="">
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso__a__opcion__3--p10" id="">
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso__a__opcion__4--p10" id="">
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso__a__opcion__5--p10" id="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="contenedor__inciso--p10">
                                                    <p>
                                                        b) Titulo profesional.
                                                    </p>
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso-b__opcion-0__pregunta-10" id="">
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso-b__opcion-3__pregunta-10" id="">
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso-b__opcion-4__pregunta-10" id="">
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso-b__opcion-5__pregunta-10" id="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="contenedor__inciso--p10">
                                                    <p>
                                                        c) Experiencia laboral.
                                                    </p>
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso-c__opcion-0__pregunta-10" id="">
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso-c__opcion-3__pregunta-10" id="">
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso-c__opcion-4__pregunta-10" id="">
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso-c__opcion-5__pregunta-10" id="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="contenedor__inciso--p10">
                                                    <p>
                                                        d) Conocimiento de idioma extranjero.
                                                    </p>
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso-d__opcion-0__pregunta-10" id="">
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso-d__opcion-3__pregunta-10" id="">
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso-d__opcion-4__pregunta-10" id="">
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso-d__opcion-5__pregunta-10" id="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="contenedor__inciso--p10">
                                                    <p>
                                                        e) Recomendación/referencias
                                                    </p>
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso-e__opcion-0__pregunta-10" id="">
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso-e__opcion-3__pregunta-10" id="">
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso-e__opcion-4__pregunta-10" id="">
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso-e__opcion-5__pregunta-10" id="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="contenedor__inciso--p10">
                                                    <p>
                                                        f) Imagen de la institucion de Educación Superior.
                                                    </p>
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso-f__opcion-0__pregunta-10" id="">
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso-f__opcion-3__pregunta-10" id="">
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso-f__opcion-4__pregunta-10" id="">
                                                </td>
                                                <td class="contenedor__opcion">
                                                    <input type="radio" name="inciso-f__opcion-5__pregunta-10" id="">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <!-- PREGUNTA 11 -->
                                <div class="contenedor-pregunta">
                                    <p class="pregunta-encuesta">
                                        11.- ¿Continuaría contratando egresados del Sistema de Universidades Estatales del Estado de Oaxaca?
                                    </p>
                                    <div class="contenedor__opciones__respuesta--p11">
                                        <div class="contenedor__respuesta__1--p11">
                                            <input type="radio" name="respuesta__si--p11" id="">
                                            <label for="respuesta__si--p11">Sí, ¿Cuáles?</label>
                                        </div>
                                        <div class="contenedor__respuesta__2-p11">
                                            <input type="radio" name="respuesta__no--p11" id="">
                                            <label for="respuesta__no-p11">No,¿Por qué?</label>
                                            <input type="text" name="" class="input__respuesta_no-p11">
                                        </div>
                                    </div>
                                </div>

                                <!-- PREGUNTA 12 -->
                                <div class="contenedor-pregunta">
                                    <p class="pregunta-encuesta">
                                        12. ¿Qué recomendaría mejorar en la formación profesional de los egresados del SUNEO?
                                    </p>
                                    <div class="contenedor__respuesta--p12">
                                        <textarea name="recomendaciones__encuesta"  placeholder="Agregue recomendaciones aquí"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="contenedor-botones" id="contenedor-botones">
                                <button class="button--1"><a href="DatosDeLaEmpresa_RegEmpresas.html">Regresar</a></button>
                                
                                <input type="submit" value="Enviar" class="button--2">
                            </div>
                        </form>
                    </div>

                </div>
                <!--Img de fondo-->
                <img src="../assets/img/u46.jpg" alt="" class="img--background" />
            </div>
        </section>
    </main>

    <footer>
        <div class="footer--div1-img">
            <img src="../assets/img/u26.png" class="footer-img1" alt="">
        </div>
        <div class="footer--titleT1">
            <a href="#">Sobre SUNEO</a>
            <a href="#">Aviso de Privacidad</a>
            <a href="#">Empresas</a>
            <a href="#">Ayuda</a>
        </div>
        <div class="footer--text">
            <div class="footer--textT1">
                <p>Coordinación de Vinculación de Alumnos y Egresados UTM</p>
                <p>De Lunes a Viernes de 8:00 a 13:00 y de 16:00 a 19:00 hrs</p>
                <p>SUNEO, Oaxaca, México. 2020</p>
            </div>
            <div class="footer--textT2">
                <p>Teléfonos: (953) 53 203 99 o (953) 53 202 14 ext. 113 o 116</p>
                <p>
                    Carretera a Acatlima Km. 2.5 Huajuapan de León, Oaxaca, México C.P 69000
                </p>
            </div>
        </div>
        <div class="footer--div2-img">
            <img src="../assets/img/u14.png" class="footer-img2" alt="" />
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
```

## **Ingreso_Selecciona_Universidad**
> `C:\Users\marti\SSE-UTM-2024\resources\views\registro-empresa\Ingreso_Selecciona_Universidad.blade.php`

![This is an alt text.](Ingreso_Selecciona_Universidad.png "Imagen insana")

<!-- mdinclude: C:\Users\marti\SSE-UTM-2024\resources\views\registro-empresa\Ingreso_Selecciona_Universidad.blade.php -->

[Nombre del archivo](C:\Users\marti\SSE-UTM-2024\resources\views\registro-empresa\Ingreso_Selecciona_Universidad.blade.php)

```html
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <link rel="stylesheet" href="./ingreso_selecciona_universidad.css" /> -->
  <link rel="stylesheet" href="{{ asset('css/Empresa/Ingreso_Selecciona_Universidad.css') }}"> <!-- Estilos específicos para la página -->

  <title>Document</title>
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
          <div class="main--header">
            <div class="main--header--flecha-1 flecha-1">
              <img src="../assets/flechas/FLECHA_INICIO.png" alt="" />
              <div class="main--header--flecha--text-1">
                <p>Universidad Objetivo</p>
              </div>
            </div>
            <div class="main--header--flecha-2 flecha-2">
              <img src="../assets/flechas/FLECHA_INTERMEDIO_GRIS.png" alt="" />
              <div class="main--header--flecha--text-2">
                <p>Crear Perfil de Empresa</p>
              </div>
            </div>
            <div class="main--header--flecha-2 flecha-3">
              <img src="../assets/flechas/FLECHA_INTERMEDIO_GRIS.png" alt="" />
              <div class="main--header--flecha--text-3">
                <p>Datos de la Empresa</p>
              </div>
            </div>
            <div class="main--header--flecha-2 flecha-4">
              <img src="../assets/flechas/FLECHA_FINAL_GRIS.png" alt="" />
              <div class="main--header--flecha--text-4">
                <p>Encuesta de Satisfacción</p>
              </div>
            </div>
          </div>
          <div class="main-form">
            <div class="text-container">
              <div class="body--main-title">
                <p>Registro</p>
              </div>
              <div class="body--main-text">
                <p>Hola! Estás a punto de iniciar tu registro como empresa en el Sistema de Seguimiento de Egresados y Bolsa de Trabajo del SUNEO, de antemano te  agradecemos por colaborar cordialmente con tu empresa.</p>
              </div>
              <div class="body--main-subtitle">
                <p>Selecciona la o las Universidad Objetivas para tus Ofertas Laborales</p>
              </div>
            </div>
            <div class="img-container">
              <a href="#utm"><img src="../assets/img/utm_u31.png" alt="" class="logo--school"></a>
              <a href="#umar"><img src="../assets/img/umar_u33.png" alt="" class="logo--school"></a>
              <a href="#unistmo"><img src="../assets/img/unistmo_u37.png" alt="" class="logo--school" />
              <a href="#unpa"><img src="../assets/img/unpa_u38.png" alt="" class="logo--school" />
              <a href="#unsis"><img src="../assets/img/unsis_u40.png" alt="" class="logo--school" />
              <a href="#unsij"><img src="../assets/img/unsij_u39.png" alt="" class="logo--school" />
              <a href="#unca"><img src="../assets/img/unca_u34.png" alt="" class="logo--school" />
              <a href="#nova"><img src="../assets/img/nova_u32.png" alt="" class="logo--school" />
              <a href="#uncos"><img src="../assets/img/uncos_u35.png" alt="" class="logo--school" />
              <a href="#unicha"><img src="../assets/img/unicha_u36.png" alt="" class="logo--school"></a>
            </div>
            <a href="#" class="button--1"> Regresar </a>
          </div>
        </div>

        <!-- Background -->
        <img src="../assets/img/u46.jpg" alt="" class="img--background" />
      </div>
    </section>
  </main>

  <footer>
    <div class="footer--div1-img">
      <img src="../assets/img/u26.png" class="footer-img1" alt="">
    </div>
    <div class="footer--titleT1">
      <a href="#">Sobre SUNEO</a>
      <a href="#">Aviso de Privacidad</a>
      <a href="#">Empresas</a>
      <a href="#">Ayuda</a>
    </div>
    <div class="footer--text">
      <div class="footer--textT1">
        <p>Coordinación de Vinculación de Alumnos y Egresados UTM</p>
        <p>De Lunes a Viernes de 8:00 a 13:00 y de 16:00 a 19:00 hrs</p>
        <p>SUNEO, Oaxaca, México. 2020</p>
      </div>
      <div class="footer--textT2">
        <p>Teléfonos: (953) 53 203 99 o (953) 53 202 14 ext. 113 o 116</p>
        <p>Carretera a Acatlima Km. 2.5 Huajuapan de León, Oaxaca, México C.P
          69000</p>
      </div>
    </div>
    <div class="footer--div2-img">
      <img src="../assets/img/u14.png" class="footer-img2" alt="" />
    </div>
  </footer>

  <aside id="utm" class="modal--container">
    <div class="content-modal">
      <div class="container-text1">
        <p class="modal-texto1">
          La Universidad Tecnológica de la Mixteca, con domicilio en carretera a acatlima Km. 2.5,
          Huajuapan de León, Oaxaca. utilizará tus datos personales recabados de este sistema
          para realizar un seguimiento preciso de las actividades profesionales de nuestro
          egresados que servirá como instrumento de análisis estadístico del desempeño
          académico de tu universidad. Tu información se tratará con absoluta confidencialidad, y
          solo será para uso del sistema, ni empleadores, ni personas ajenas al sistema podrán
          visualizarla. Para mayor información acerca del tratamiento y de los derechos que
          puedes hacer valer, puedes acceder al aviso de privacidad completo a través de nuestra
          oficina de seguimiento a egresados, ubicada en la misma dirección.
        </p>
      </div>
      <div class="container-text2">
        <p class="modal-texto2"><a href="">Leer aviso de privacidad completo</a></p>
      </div>
      <div class="modal--container-buttons">
        <a href="#" class="modal-button1"> Cancelar </a>
        <a href="CrearCuenta-Empresa.html" class="modal-button2"> Aceptar </a>
      </div>
    </div>
  </aside>

 <aside id="umar" class="modal--container">
    <div class="content-modal">
      <div class="container-text1">
        <p class="modal-texto1">
          La Universidad UMAR
        </p>
      </div>
      <div class="container-text2">
        <p class="modal-texto2">Leer aviso de privacidad completo</p>
      </div>
      <div class="modal--container-buttons">
        <a href="#" class="modal-button1"> Cancelar </a>
        <a href="#" class="modal-button2"> Aceptar </a>
      </div>
    </div>
  </aside>

   <aside id="unistmo" class="modal--container">
    <div class="content-modal">
      <div class="container-text1">
        <p class="modal-texto1">
          La Universidad UNISTMO
        </p>
      </div>
      <div class="container-text2">
        <p class="modal-texto2">Leer aviso de privacidad completo</p>
      </div>
      <div class="modal--container-buttons">
        <a href="#" class="modal-button1"> Cancelar </a>
        <a href="#" class="modal-button2"> Aceptar </a>
      </div>
    </div>
  </aside>

   <aside id="unpa" class="modal--container">
    <div class="content-modal">
      <div class="container-text1">
        <p class="modal-texto1">
          La Universidad UNPA
        </p>
      </div>
      <div class="container-text2">
        <p class="modal-texto2">Leer aviso de privacidad completo</p>
      </div>
      <div class="modal--container-buttons">
        <a href="#" class="modal-button1"> Cancelar </a>
        <a href="#" class="modal-button2"> Aceptar </a>
      </div>
    </div>
  </aside>

   <aside id="unsis" class="modal--container">
    <div class="content-modal">
      <div class="container-text1">
        <p class="modal-texto1">
          La Universidad UNSIS
        </p>
      </div>
      <div class="container-text2">
        <p class="modal-texto2">Leer aviso de privacidad completo</p>
      </div>
      <div class="modal--container-buttons">
        <a href="#" class="modal-button1"> Cancelar </a>
        <a href="#" class="modal-button2"> Aceptar </a>
      </div>
    </div>
  </aside>

   <aside id="unsij" class="modal--container">
    <div class="content-modal">
      <div class="container-text1">
        <p class="modal-texto1">
          La Universidad UNSIJ
        </p>
      </div>
      <div class="container-text2">
        <p class="modal-texto2">Leer aviso de privacidad completo</p>
      </div>
      <div class="modal--container-buttons">
        <a href="#" class="modal-button1"> Cancelar </a>
        <a href="#" class="modal-button2"> Aceptar </a>
      </div>
    </div>
  </aside>

     <aside id="unca" class="modal--container">
    <div class="content-modal">
      <div class="container-text1">
        <p class="modal-texto1">
          La Universidad UNCA
        </p>
      </div>
      <div class="container-text2">
        <p class="modal-texto2">Leer aviso de privacidad completo</p>
      </div>
      <div class="modal--container-buttons">
        <a href="#" class="modal-button1"> Cancelar </a>
        <a href="#" class="modal-button2"> Aceptar </a>
      </div>
    </div>
  </aside>

     <aside id="nova" class="modal--container">
    <div class="content-modal">
      <div class="container-text1">
        <p class="modal-texto1">
          La Universidad NOVA
        </p>
      </div>
      <div class="container-text2">
        <p class="modal-texto2">Leer aviso de privacidad completo</p>
      </div>
      <div class="modal--container-buttons">
        <a href="#" class="modal-button1"> Cancelar </a>
        <a href="#" class="modal-button2"> Aceptar </a>
      </div>
    </div>
  </aside>

     <aside id="uncos" class="modal--container">
    <div class="content-modal">
      <div class="container-text1">
        <p class="modal-texto1">
          La Universidad UNCOS
        </p>
      </div>
      <div class="container-text2">
        <p class="modal-texto2">Leer aviso de privacidad completo</p>
      </div>
      <div class="modal--container-buttons">
        <a href="#" class="modal-button1"> Cancelar </a>
        <a href="#" class="modal-button2"> Aceptar </a>
      </div>
    </div>
  </aside>

<aside id="unicha" class="modal--container">
    <div class="content-modal">
      <div class="container-text1">
        <p class="modal-texto1">
          La Universidad UNICHA
        </p>
      </div>
      <div class="container-text2">
        <p class="modal-texto2">Leer aviso de privacidad completo</p>
      </div>
      <div class="modal--container-buttons">
        <a href="#" class="modal-button1"> Cancelar </a>
        <a href="#" class="modal-button2"> Aceptar </a>
      </div>
    </div>
  </aside>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
```

## **propuesta-suneo**
> `C:\Users\marti\SSE-UTM-2024\resources\views\registro-empresa\propuesta-suneo.blade.php`

![This is an alt text.](propuesta-suneo.png "Imagen insana")

<!-- mdinclude: C:\Users\marti\SSE-UTM-2024\resources\views\registro-empresa\propuesta-suneo.blade.php -->

[Nombre del archivo](C:\Users\marti\SSE-UTM-2024\resources\views\registro-empresa\propuesta-suneo.blade.php)

```html
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inicio</title>
  <!-- <link rel="stylesheet" href="propuesta-suneo.css" /> -->
  <link rel="stylesheet" href="{{ asset('css/Empresa/propuesta-suneo.css') }}"> <!-- Estilos específicos para la página -->

</head>

<body>
  <header>
    <div class="header">
      <div class="header--img">
        <img src="../assets/img/utm_u31.png" class="header--img-elements" alt="" />
        <img src="../assets/img/umar_u33.png" class="header--img-elements" alt="" />
        <img src="../assets/img/unistmo_u37.png" class="header--img-elements" alt="" />
        <img src="../assets/img/unpa_u38.png" class="header--img-elements" alt="" />
        <img src="../assets/img/unsis_u40.png" class="header--img-elements" alt="" />
        <img src="../assets/img/unsij_u39.png" class="header--img-elements" alt="" />
        <img src="../assets/img/unca_u34.png" class="header--img-elements" alt="" />
        <img src="../assets/img/nova_u32.png" class="header--img-elements" alt="" />
        <img src="../assets/img/uncos_u35.png" class="header--img-elements" alt="" />
        <img src="../assets/img/unicha_u36.png" class="header--img-elements" alt="" />
      </div>
    </div>

  </header>
  <main>
    <section>
      <div class="main--title">
        <p>Sistema de Seguimiento de Egresados y Bolsa de Trabajo - Empresas</p>
      </div>
    </section>
    <div class="main--section">
      <div class="main--container">
        <div class="main--img-container">
          <img src="../assets/img/imagen_main.jpg" class="main--img" alt="" />
        </div>
        <div class="main--form">
          <div class="main--form-img">
            <img src="../assets/img/u43.png" class="form--img" alt="" />
          </div>
          <form class="main--form-form" action="#">
            <div class="form--select">
              <img src="../assets/icons/u27.svg" width="16" height="15" alt="" />
              <select name="Universidad">
                <option selected value="0"> Selecciona tu universidad </option>
                <option value="1">Universidad Tecnológica de la Mixteca</option>
                <option value="2">UNSIS</option>
              </select>
            </div>
            <div class="form--input-1">
              <img src="../assets/icons/Arroba.svg" width="16" height="15" alt="" />
              <input type="email" id="mail" name="mail" class="opc--text" placeholder="Correo electrónico">
            </div>
            <div class="form--input-2">
              <img src="../assets/icons/Contraseña.svg" width="16" height="15" alt="" />
              <input type="password" id="pass" name="pass" class="opc--text" placeholder="Contraseña">
            </div>
            <div class="form--button-text">
              <a href="#" class="text--forget">¿Olvido su contraseña?</a>
              <button type="submit">Entrar</button>
              <a href="#" class="register--text">Registrate</a>
            </div>
          </form>
        </div>
        </section>
  </main>
  <button id="display" class="opc--find">
    <p class="tex">Aquí encontrarás</p>
    <img src="../assets/icons/flecha-apunta-hacia-abajo.png" class="img--arrow" alt="" />
  </button>
  <div id="hide-me" class="opc--find-hide">
    <div class="opc--find-principal">
      <ul>
        Ofertas laborales
      </ul>
      <ul>
        Directorio de empresas
      </ul>
      <ul>
        Ranking de las mejores empresas
      </ul>
    </div>
  </div>

  <footer>
    <div class="footer--div1-img">
      <img src="../assets/img/u26.png" class="footer-img1" alt="">
    </div>
    <div class="footer--titleT1">
      <a href="#">Sobre SUNEO</a>
      <a href="#">Aviso de Privacidad</a>
      <a href="#">Empresas</a>
      <a href="#">Ayuda</a>
    </div>
    <div class="footer--text">
      <div class="footer--textT1">
        <p>Coordinación de Vinculación de Alumnos y Egresados UTM</p>
        <p>De Lunes a Viernes de 8:00 a 13:00 y de 16:00 a 19:00 hrs</p>
        <p>SUNEO, Oaxaca, México. 2020</p>
      </div>
      <div class="footer--textT2">
        <p>Teléfonos: (953) 53 203 99 o (953) 53 202 14 ext. 113 o 116</p>
        <p>Carretera a Acatlima Km. 2.5 Huajuapan de León, Oaxaca, México C.P
          69000</p>
      </div>
    </div>
    <div class="footer--div2-img">
      <img src="../assets/img/u14.png" class="footer-img2" alt="" />
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>

    if ($('#hide-me').is(":visible")) {
      $('#hide-me').css('display', 'none', 'x');
    }
    $('#display').click(function (e) {
      $('#hide-me').css('visibility', 'none');

      if ($('#hide-me').is(":visible")) {
        $('#hide-me').css('display', 'none');
      } else {
        $('#hide-me').css('display', 'block');
      }
    });
  </script>
</body>

</html>
```

