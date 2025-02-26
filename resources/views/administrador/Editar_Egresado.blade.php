<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Egresado - ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/administrador/Egresados_Admin-Agregar-Egresado.css') }}">    
</head>
<body>
    @include('layouts.administrador.header')
    <section id="contenido">
        <center>
            <p class="titulo-contenido">Editar Egresado(a)</p>
            <form action="{{ route('egresados.actualizarEgresado',  $egresado['matricula']) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="seccion-1-formulario">
                    <div class="contenedor__input-label nombre">
                        <label for="nombre">*Nombre(s)</label>
                        <input type="text" name="nombres" value="{{ $egresado['nombres'] ?? '' }}" placeholder="Ingrese nombre del egresado">
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label">
                            <label for="apellido-paterno">Apellido Paterno</label>
                            <input type="text" name="ap_paterno" value="{{ $egresado['ap_paterno'] ?? '' }}" placeholder="Apellido paterno">
                        </div>
                        <div class="contenedor__input-label">
                            <label for="apellido-materno">Apellido Materno</label>
                            <input type="text" name="ap_materno" value="{{ $egresado['ap_materno'] ?? '' }}" placeholder="Apellido materno">    
                        </div>
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label curp">
                            <label for="curp">Curp</label>
                            <input type="text" name="curp" value="{{ $egresado['curp'] ?? '' }}" placeholder="Ingrese curp del egresado">
                        </div>
                        <div class="contenedor__input-label">
                            <label for="genero">Género</label>
                            <select name="genero">
                                <option value="Masculino" {{ $egresado['genero'] == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                <option value="Femenino" {{ $egresado['genero'] == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                                <option value="" {{ $egresado['genero'] == '' ? 'selected' : '' }}>Sin especificar</option>
                            </select>
                        </div>
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label">
                            <label for="fecha-nacimiento">Fecha de nacimiento</label>
                            <input type="text" name="fecha_nacimiento" value="{{ $egresado['fecha_nacimiento'] ?? '' }}" placeholder="dd/mm/aa">
                        </div>
                        <div class="contenedor__input-label">
                            <label for="nacionalidad">Nacionalidad</label>
                            <select name="nacionalidad">
                                <option value="Mexicana" {{ $egresado['nacionalidad'] == 'Mexicana' ? 'selected' : '' }}>Mexicana</option>
                                <option value="otro" {{ $egresado['nacionalidad'] == 'otro' ? 'selected' : '' }}>Otro</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="habilitado" value="1">

                    <div class="contenedor__input-label lugar-origen">
                        <label for="lugar-origen">Lugar de origen</label>
                        <input type="text" name="lugar_origen" value="{{ $egresado['lugar_origen'] ?? '' }}" placeholder="Lugar de origen">
                    </div>              

                    <p class="txt-campos-obligatorios">*Campos obligatorios</p>
                </div>

                <div class="seccion-2-formulario">
                    <div class="contenedor__input-label contenedor-carrera">
                        <label for="carrera">*Carrera</label>
                        <select name="carrera">
                            @foreach ($carreras as $id => $carrera)
                            <option value="{{ $id }}" {{ isset($egresado['preparacion_id']) && $egresado['preparacion_id'] == $id ? 'selected' : '' }}>{{ $carrera }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label">
                            <label for="matricula">*Matrícula</label>
                            <input type="number" name="matricula" value="{{ $egresado['matricula'] ?? '' }}" placeholder="Ingrese la matrícula">
                        </div>
                        <div class="contenedor__input-label">
                            <label for="generacion">*Generación</label>
                            <input type="text" name="generacion" value="{{ $preparacion['generacion'] ?? '' }}" placeholder="Ingrese generación">
                        </div>
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label">
                            <label for="fecha-inicio">Fecha de inicio de estudios</label>
                            <input type="text" name="fecha_inicio" value="{{ $preparacion['fecha_inicio'] ?? '' }}" placeholder="dd/mm/aa">
                        </div>
                        <div class="contenedor__input-label">
                            <label for="fecha-fin">Fecha de fin de estudios</label>
                            <input type="text" name="fecha_fin" value="{{ $preparacion['fecha_fin'] ?? '' }}" placeholder="dd/mm/aa">
                        </div>
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label">
                            <label for="fecha-inicio">Forma de titulacion</label>
                            <input type="text" name="forma_titulacion" value="{{ $preparacion['forma_titulacion'] ?? '' }}" placeholder="dd/mm/aa">
                        </div>
                        <div class="contenedor__input-label">
                            <label for="fecha-fin">Promedio</label>
                            <input type="text" name="promedio" value="{{ $preparacion['promedio'] ?? '' }}" placeholder="dd/mm/aa">
                        </div>
                    </div>
                    <input type="hidden" name="preparacion_id" value="{{ $egresado['preparacion_id'] }}">


                    <!-- Botones de acción -->
                    <div class="contenedor__input-label contenedor-botones">
                    <a href="{{ route('administrador') }}">
                            <input type="button" value="Cancelar" class="btn-cancelar">
                        </a>
                        <input type="submit" value="Actualizar" class="btn-guardar">
                    </div>
                </div>
            </form>
        </center>
    </section>
</body>
</html>
