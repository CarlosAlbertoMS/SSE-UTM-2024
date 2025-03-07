<!DOCTYPE html>
<html lang="es">
@if (session('success'))
    <div id="success-message" class="success-message2">
        {{ session('success') }}
    </div>
@endif

<style>
.success-message2 {
    background-color: #38a169; /* Verde */
    color: white;
    padding: 16px;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 24px;
    font-weight: 600;
    font-size: 1.125rem; /* 18px */
    transition: transform 0.3s ease-in-out;
}

.success-message2:hover {
    transform: scale(1.05);
}
</style>

<script>
    // Desaparece el mensaje después de 3 segundos
    setTimeout(function() {
        var message = document.getElementById('success-message');
        if (message) {
            message.style.display = 'none';
        }
    }, 3000); // 3000ms = 3 segundos
</script>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salarios - ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/administrador/Salarios_Admin.css') }}">
    <script src="{{ asset('js/verDetalles.js') }}"></script>

</head>


<body>
    
    @include('layouts.administrador.header')

    <section id="contenido">
        <!--Inicio de la segunda barra de navegacion-->
        <div class="form-navbar">
            <div class="submenu">
   

                <a href="{{ route('administrador_agregar_salario') }}"
                    class="{{ Route::currentRouteName() == 'administrador_agregar_salario' ? 'pestanaActual' : 'otrasPestañas' }}">
                    <img src="../assets/icons/agregar_r.svg" class="item-r">
                    <span class="fijos">Agregar Salario</span>                
                </a>
                
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
                    <td> {{ $tabulador['carrera'] }} </td>
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
<style>
#shape {
        width: 24px;
        height: 16px;
        background-color: #6d000e;
        box-sizing: border-box;
    }

    /* Mensaje de error */
    .error-message {
        color: #ff0000;
        padding: 10px;
        margin: 10px 0;
        display: none;
        /* Oculto inicialmente */
    }

    /* Fila seleccionada */
    tr.selected {
        background-color: #6d000e;
        cursor: pointer;
    }

    /* Botón "Ver Detalles" desactivado */
    #btn-ver-detalles .nofijos {
        color: var(--txt-navbar-nofijo);
        /* Gris */
        pointer-events: none;
        /* Deshabilita clic */
    }

    /* Botón "Ver Detalles" activado */
    #btn-ver-detalles.active .nofijos .item-r {
        color: #ff0000 !important;
        /* Rojo */
        pointer-events: auto;
        /* Habilita clic */
    }
</style>

</html>