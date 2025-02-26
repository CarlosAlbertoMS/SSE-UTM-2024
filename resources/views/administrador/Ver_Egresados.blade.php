<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Detalles del Egresado - ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/administrador/Egresados_Admin-Agregar-Egresado.css') }}">
</head>
<body>
    @include('layouts.administrador.header')
    <section id="contenido">
        <center>
            <p class="titulo-contenido">Ver Detalles del Egresado(a)</p>
            <form>
                @csrf
                @method('GET') <!-- Usamos GET porque solo estamos visualizando los datos -->

                <div class="seccion-1-formulario">
                    <div class="contenedor__input-label nombre">
                        <label for="nombre">*Nombre(s)</label>
                        <input type="text" name="nombres" value="{{ $egresado['nombres'] ?? '' }}" placeholder="Ingrese nombre del egresado" readonly>
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label">
                            <label for="apellido-paterno">Apellido Paterno</label>
                            <input type="text" name="ap_paterno" value="{{ $egresado['ap_paterno'] ?? '' }}" placeholder="Apellido paterno" readonly>
                        </div>
                        <div class="contenedor__input-label">
                            <label for="apellido-materno">Apellido Materno</label>
                            <input type="text" name="ap_materno" value="{{ $egresado['ap_materno'] ?? '' }}" placeholder="Apellido materno" readonly>    
                        </div>
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label curp">
                            <label for="curp">Curp</label>
                            <input type="text" name="curp" value="{{ $egresado['curp'] ?? '' }}" placeholder="Ingrese curp del egresado" readonly>
                        </div>
                        <div class="contenedor__input-label">
                            <label for="genero">Género</label>
                            <select name="genero" disabled>
                                <option value="Masculino" {{ $egresado['genero'] == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                <option value="Femenino" {{ $egresado['genero'] == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                                <option value="" {{ $egresado['genero'] == '' ? 'selected' : '' }}>Sin especificar</option>
                            </select>
                        </div>
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label">
                            <label for="fecha-nacimiento">Fecha de nacimiento</label>
                            <input type="text" name="fecha_nacimiento" value="{{ $egresado['fecha_nacimiento'] ?? '' }}" placeholder="dd/mm/aa" readonly>
                        </div>
                        <div class="contenedor__input-label">
                            <label for="nacionalidad">Nacionalidad</label>
                            <select name="nacionalidad" disabled>
                                <option value="Mexicana" {{ $egresado['nacionalidad'] == 'Mexicana' ? 'selected' : '' }}>Mexicana</option>
                                <option value="otro" {{ $egresado['nacionalidad'] == 'otro' ? 'selected' : '' }}>Otro</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="habilitado" value="1">

                    <div class="contenedor__input-label lugar-origen">
                        <label for="lugar-origen">Lugar de origen</label>
                        <input type="text" name="lugar_origen" value="{{ $egresado['lugar_origen'] ?? '' }}" placeholder="Lugar de origen" readonly>
                    </div>              

                    <p class="txt-campos-obligatorios">*Campos obligatorios</p>
                </div>

                <div class="seccion-2-formulario">
                    <div class="contenedor__input-label contenedor-carrera">
                        <label for="carrera">*Carrera</label>
                        <select name="carrera" disabled>
                            @foreach ($carreras as $id => $carrera)
                            <option value="{{ $id }}" {{ isset($egresado['preparacion_id']) && $egresado['preparacion_id'] == $id ? 'selected' : '' }}>{{ $carrera }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label">
                            <label for="matricula">*Matrícula</label>
                            <input type="number" name="matricula" value="{{ $egresado['matricula'] ?? '' }}" placeholder="Ingrese la matrícula" readonly>
                        </div>
                        <div class="contenedor__input-label">
                            <label for="generacion">*Generación</label>
                            <input type="text" name="generacion" value="{{ $preparacion['generacion'] ?? '' }}" placeholder="Ingrese generación" readonly>
                        </div>
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label">
                            <label for="fecha-inicio">Fecha de inicio de estudios</label>
                            <input type="text" name="fecha_inicio" value="{{ $preparacion['fecha_inicio'] ?? '' }}" placeholder="dd/mm/aa" readonly>
                        </div>
                        <div class="contenedor__input-label">
                            <label for="fecha-fin">Fecha de fin de estudios</label>
                            <input type="text" name="fecha_fin" value="{{ $preparacion['fecha_fin'] ?? '' }}" placeholder="dd/mm/aa" readonly>
                        </div>
                    </div>
                    <div class="contenedor__input-label contenedor-doble">
                        <div class="contenedor__input-label">
                            <label for="forma_titulacion">Forma de Titulación</label>
                            <input type="text" name="forma_titulacion" value="{{ $preparacion['forma_titulacion'] ?? '' }}" placeholder="Forma de titulación" readonly>
                        </div>
                        <div class="contenedor__input-label">
                            <label for="promedio">Promedio</label>
                            <input type="text" name="promedio" value="{{ $preparacion['promedio'] ?? '' }}" placeholder="Promedio" readonly>
                        </div>
                    </div>
                    <input type="hidden" name="preparacion_id" value="{{ $egresado['preparacion_id'] }}">

                    <!-- Botones de acción -->
                    <div class="contenedor__input-label contenedor-botones">
                        <a href="{{ route('administrador') }}">
                            <input type="button" value="Volver" class="btn-cancelar">
                        </a>
                    </div>
                </div>
            </form>
        </center>
    </section>
</body>
</html>
