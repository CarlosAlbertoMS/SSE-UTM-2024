<!doctype html>
<html lang="en">

	<head>
		<meta charset="UTF-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    	<link rel="stylesheet" href="{{asset('css/Egresados/Eventos.css')}}" />
    	<link rel="stylesheet" href="{{asset('css/Egresados/TabuladorDeSalarios-Egresados.css')}}">
        <link rel="stylesheet" href="{{asset('css/Egresados/Eventos-Individual.css')}}">

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    	<script src="{{ asset('js/eventos.js') }}"></script>

		<title>Eventos</title>
	</head>

	@include('layouts.egresados.header')
   
	<main>
		<section class="main--section">
			<div class="main--container--1">
				<x-buscador></x-buscador>
			</div>
			<div class="main--container--2">
				@include('layouts.egresados.eventos-index', ['paginador' => $paginador])	
			</div>
		</section>
	</main>
</html>
