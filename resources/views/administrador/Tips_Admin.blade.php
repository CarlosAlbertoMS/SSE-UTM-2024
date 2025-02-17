<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tips y Consejos - ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/administrador/Tips_Admin.css') }}">
</head>

<body>


    @include('layouts.administrador.header')

    <section id="contenido">
        <!--Inicio de la segunda barra de navegacion-->
        <div class="form-navbar">
            <div class="submenu">
                <div><a href="">
                        <img src="../assets/icons/agregar_r.svg" class="item-r">
                        <span class="fijos">Agregar Tip o Consejo</span>
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
                <input class="texto-busqueda" type="text" placeholder="Buscar...">
                <button class="btn-btn-warning" type="submit"><img src="../assets/icons/Buscar_B.PNG"></button>
            </form>
            <!--fin del buscador-->
        </div>
        <div class="linea"></div>
        <!--
            TU CODIGO AQUI
        -->
        <center>
            <!--Inicio de la tabla-->
            <table>
                <!-- Inicio del encabezado de la tabla-->
                <tr id="tabla-inicio">
                    <th>#</th>
                    <th>Título</th>
                    <th>Descripcción</th>
                    <th>Universidad</th>
                    <th>Publicado el...</th>
                </tr>
                <!-- Fin del encabezado-->
                <tr>
                    <td>1</td>
                    <td>Antes de firmar un contrato laboral... ¡Debes hacer lo siguiente!</td>
                    <td>Antes de firmar un contrato laboral, te recomendamos hacer lo siguiente: 1. Léelo detenidamente y más de ...</td>
                    <td>UMAR</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>¡No dejes de aprender!</td>
                    <td>Hoy en día no sólo basta con tener una carrera concluida, hay que contar con maestrías que nos ayuden a ...</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>¡Empieza a crear tu curriculum vitae 2019! Te ayudamos paso a paso.</td>
                    <td>Con el proposito de difundir y compartr, la revista nace como un proyecto academico y ha evolucionado....</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>¿Tu CV te haría destacar sobre otros candidatos?</td>
                    <td>1) Datos personales. Primero lo primero: nombre completo, edad, una dirección de correo electrónico y un numero....</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Antes de firmar un contrato laboral... ¡Debes hacer lo siguiente!</td>
                    <td>Antes de firmar un contrato laboral, te recomendamos hacer lo siguiente: 1. Léelo detenidamente y más de ...</td>
                    <td>UMAR</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>¡No dejes de aprender!</td>
                    <td>Hoy en día no sólo basta con tener una carrera concluida, hay que contar con maestrías que nos ayuden a ...</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>¡Empieza a crear tu curriculum vitae 2019! Te ayudamos paso a paso.</td>
                    <td>Con el proposito de difundir y compartr, la revista nace como un proyecto academico y ha evolucionado....</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>¿Tu CV te haría destacar sobre otros candidatos?</td>
                    <td>1) Datos personales. Primero lo primero: nombre completo, edad, una dirección de correo electrónico y un numero....</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Antes de firmar un contrato laboral... ¡Debes hacer lo siguiente!</td>
                    <td>Antes de firmar un contrato laboral, te recomendamos hacer lo siguiente: 1. Léelo detenidamente y más de ...</td>
                    <td>UMAR</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>¡No dejes de aprender!</td>
                    <td>Hoy en día no sólo basta con tener una carrera concluida, hay que contar con maestrías que nos ayuden a ...</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>¡Empieza a crear tu curriculum vitae 2019! Te ayudamos paso a paso.</td>
                    <td>Con el proposito de difundir y compartr, la revista nace como un proyecto academico y ha evolucionado....</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>¿Tu CV te haría destacar sobre otros candidatos?</td>
                    <td>1) Datos personales. Primero lo primero: nombre completo, edad, una dirección de correo electrónico y un numero....</td>
                    <td>UTM</td>
                    <td>2020-09-03</td>
                </tr>


                <tr id="tabla-fin">
                    <th colspan="5">Total de tips y consejos: 72</th>
                </tr>
            </table>
            <!--fin de la tabla-->
            <!--Inicio de la paginacion de la pagina-->
            <div class="pagination">
                <ul>
                    <a href="#">
                        <li class="otrasPaginas">Anterior</li>
                    </a>
                    <a href="#">
                        <li class="otrasPaginas">1</li>
                    </a>
                    <a href="#">
                        <li class="paginasActual">2</li>
                    </a>
                    <a href="#">
                        <li class="otrasPaginas">3</li>
                    </a>
                    <a href="#">
                        <li class="otrasPaginas">Siguiente</li>
                    </a>
                </ul>
            </div>
            <!--fin de la paginación-->

        </center>
    </section>

    @include('layouts.administrador.footer') <!-- Archivo de encabezado reutilizable -->


</body>

</html>