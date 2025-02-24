<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Egresados - ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">

    <link rel="stylesheet" href="{{ asset('css/administrador/Egresados_Admin-Agregar-Egresado.css') }}">    
</head>
<body>
    @include('layouts.administrador.header')
    <section id="contenido">
        <!--
            TU CODIGO AQUI
        -->
        <center>
            <!--Inicio del formulario-->
            <p class="titulo-contenido">Agregar Egresado(a)</p>
            <form action="{{ route('egresados.crearEgresado') }}" method="POST">
                @csrf
                <!--Parte 1 formulario-->
                <div class="seccion-1-formulario">
                    <div class="contenedor__input-label nombre">
                        <label for="nombre">*Nombre(s)</label>
                        <input type="text" name="nombres" id="" placeholder="Ingrese nombre del egresado">
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label">
                            <label for="apellido-paterno">Apellido Paterno</label>
                            <input type="text" name="ap_paterno" id="" placeholder="Apellido paterno">
                        </div>
                        <div class="contenedor__input-label">
                            <label for="apellido-materno">Apellido Materno</label>
                            <input type="text" name="ap_materno" id="" placeholder="Apellido materno">    
                        </div>
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label curp">
                            <label for="curp">Curp</label>
                            <input type="text" name="curp" id="" placeholder="Ingrese curp del egresado">
                        </div>
                        <div class="contenedor__input-label">
                            <label for="opciones-genero">Género</label>
                            <select name="genero">
                                <option value="Masculino" selected="selected">Masculino</option>
                                <option value="Femenino">Femenino</option>
                                <option value="">Sin especificar</option>
                            </select>
                        </div>
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label">
                            <label for="fecha-nacimiento">Fecha de nacimiento</label>
                            <input type="text" name="fecha_nacimiento" id="fecha-nacimiento" placeholder="dd/mm/aa">
                        </div>
                        <div class="contenedor__input-label">
                            <label for="nacionalidad">Nacionalidad</label>
                            <select name="nacionalidad">
                                <option value="Mexicana" selected="selected">Mexicana</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="habilitado" value="1">

                    <div class="contenedor__input-label lugar-origen">
                        <label for="lugar-origen">Lugar de origen</label>
                        <input type="text" name="lugar_origen" id="" placeholder="Lugar de origen">
                    </div>              
                    <p class="txt-campos-obligatorios">*Campos obligatorios</p>
                </div>
            
                <!--Parte 2 formulario-->
                <div class="seccion-2-formulario">
                    <div class="contenedor__input-label contenedor-carrera">
                        <label for="opciones-carrera">*Carrera</label>
                        <select name="carrera">
                            @foreach ( $carreras as $id => $carrera )
                            <option value ="{{ $id }}">{{ $carrera }}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label">
                            <label for="matricula">*Matrícula</label>
                            <input type="number" name="matricula" id="" placeholder="Ingrese la matrícula">
                        </div>
                        <div class="contenedor__input-label">
                            <label for="generacion">*Generación</label>
                            <input type="text" name="generacion" id="" placeholder="Ingrese generación">
                        </div>
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label">
                            <label for="fecha-inicio-estudios">Fecha de inicio de estudios</label>
                            <input type="text" name="fecha_inicio" id="" placeholder="dd/mm/aa">
                        </div>
                        <div class="contenedor__input-label">
                            <label for="fecha-fin-estudios">Fecha de fin de estudios</label>
                            <input type="text" name="fecha_fin" id="" placeholder="dd/mm/aa">
                        </div>
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label">
                            <label for="forma-titulacion">Forma de titulación</label>
                            <select name="forma_titulacion">
                                <option value="Tesis" selected="selected">Tesis</option>
                                <option value="No titulado">Sin titulación</option>
                                <option value="CENEVAL">Ceneval</option>
                            </select>
                        </div>
                        <div class="contenedor__input-label">
                            <label for="fecha-titulo">Fecha de titulación</label>
                            <input type="text" name="fecha-titulacion" id="" placeholder="dd/mm/aa">
                        </div>
                    </div>
                    <div class="contenedor__input-label contenedor-promedio">
                        <label for="promedio">*Promedio</label>
                        <input type="text" name="promedio" id="" placeholder="Promedio">
                    </div>
                    <div class="contenedor__input-label contenedor-botones">
                        <a href="Egresados_Admin.html">
                            <input type="submit" value="Cancelar" class="btn-cancelar" id="btn-cancelar">
                        </a>
                        
                        <a href="#mensaje-egresado-agregado">
                            ***
                            <input type="submit" value="Guardar" class="btn-guardar" id="btn-guardar">
                        </a>
                    </div>
                </div>
            </form>
            <!--Fin del formulario-->
        </center>
    </section>
    @include('layouts.administrador.footer') <!-- Archivo de encabezado reutilizable -->


    <div id="mensaje-egresado-agregado" class="overlay">
        <div id="cuerpo-pop-up">
            <div>
                <h2>Mensaje</h2>
                <p>¡Enhorabuena!, Cambios guardados con éxito</p>
                <a id="cerrar" href="Egresados_Admin.html"><div>Cerrar</div></a>
            </div>
        </div>
    </div>
    
</body>
</html>