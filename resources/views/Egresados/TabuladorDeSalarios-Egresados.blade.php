<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/Egresados/TabuladorDeSalarios-Egresados.css')}}">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <title>Tabulador de Salarios</title>
</head>

<body>
    @include('layouts.egresados.header')

    <main>
        <div id="contenido">
            <section id="filtro">
                <x-buscador></x-buscador>

                <div class="lista_desplegable">
                    <select id="lista--filtro" name="lista--filtro" class="lista--filtro">
                        <option disabled selected>Filtrar por Carrera</option>
                        @foreach ($carreras as $id => $carrera)
                            <option value="{{ $id }}">{{ $carrera }}</option>
                        @endforeach
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
        </div>
    </main>
          
    @include('layouts.egresados.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('lista--filtro').addEventListener('change', function () {
                const value = this.value;
                console.log(value);
                filtrarPorCarrera(value);
            });

            function filtrarPorCarrera(carreraId) {
                console.log('llamada a la ruta');
                $.ajax({
            		url: `/Egresados/TabuladorSalarios/Carrera/${carreraId}`,
            		method: 'GET',
            		dataType: 'json',
            		success: function(response) {
                        console.log(response)
            		},
            		error: function(error) {
                		console.error('Error al cargar los datos con la carrera indicada.', error);
            		}
                })
            }
        });
    </script>
</body>
</html>
