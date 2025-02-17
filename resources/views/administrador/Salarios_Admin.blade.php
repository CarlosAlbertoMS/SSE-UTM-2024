<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salarios - ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/administrador/Salarios_Admin.css') }}">
</head>

<body>

    @include('layouts.administrador.header')

    <section id="contenido">
        <!--Inicio de la segunda barra de navegacion-->
        <div class="form-navbar">
            <div class="submenu">
                <div><a href="Agregar-Salario_Admin.html">
                        <img src="../assets/icons/agregar_r.svg" class="item-r">
                        <span class="fijos">Agregar Salario</span>
                    </a>
                </div>
                <div><a href="">
                        <img src="../assets/icons/u164.svg" class="item-r">
                        <span class="fijos">Descargar PDF</span>
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
                    <th>Título del empleo</th>
                    <th>Carrera</th>
                    <th>Experiencia</th>
                    <th>Monto mínimo mensual</th>
                    <th>Monto máximo mensual</th>
                </tr>

                @foreach ($paginador as $tabulador)
                <tr>
                    <td> {{ $tabulador['empleo'] }} </td>
                    <td> {{ $carreras[$tabulador['carrera']] }} </td>
                    <td> {{ $tabulador['experiencia'] }} años</td>
                    <td> {{ $tabulador['monto_minimo'] }} </td>
                    <td> {{ $tabulador['monto_maximo'] }} </td>
                </tr>
                @endforeach

                <tr id="tabla-fin">
                    <th colspan="5">Total de salarios: {{ $tabulador_size }}</th>
                </tr>
            </table>

            <x-paginador :paginador="$paginador" />
        </center>
    </section>

    @include('layouts.administrador.footer') <!-- Archivo de encabezado reutilizable -->


</body>

</html>