<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class HistoriasController extends Controller
{
    public function index()
    {
        $baseUrl = env('API_URL');
        $urlEventos = $baseUrl . "historiaexito";

        try {
            $response = Http::get($urlEventos);
            $response->throw();
            $historias = $response->json();
        } catch (RequestException $e) {
            return back()->withErrors('No se pudieron obtener los datos de las eventos. Inténtalo de nuevo más tarde.');
        } catch (\Exception $e) {
            return back()->withErrors('Ocurrió un error inesperado. Por favor, inténtalo más tarde.');
        }

        $paginaActual = request('page', 1);
        $porPagina = 4;
        $historias_size = count($historias);
    
        $items = array_slice($historias, ($paginaActual - 1) * $porPagina, $porPagina);
    
        $paginador = new LengthAwarePaginator(
            $items,            // Elementos de la página actual
            count($historias), // Total de elementos
            $porPagina,        // Elementos por página
            $paginaActual,
            ['path' => request()->url()] // URL base para los links de paginación
        );

        return view('Egresados.HistoriasExito', compact('historias_size', 'paginador'));
    }
}
