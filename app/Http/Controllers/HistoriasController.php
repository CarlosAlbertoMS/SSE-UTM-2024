<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

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

            $collection = new Collection($historias);
            $sortedCollection = $collection->sortByDesc('updated_at');

            $historias = $sortedCollection->values()->all();

            $masReciente = array_shift($historias);

            $otrosRecientes = array_splice($historias, 0, 4);
        } catch (RequestException $e) {
            return back()->withErrors('No se pudieron obtener los datos de las eventos. Inténtalo de nuevo más tarde.');
        } catch (\Exception $e) {
            return back()->withErrors('Ocurrió un error inesperado. Por favor, inténtalo más tarde.');
        }

        $paginaActual = request('page', 1);
        $porPagina = 8;
    
        $items = array_slice($historias, ($paginaActual - 1) * $porPagina, $porPagina);
    
        $paginador = new LengthAwarePaginator(
            $items,            // Elementos de la página actual
            count($historias), // Total de elementos
            $porPagina,        // Elementos por página
            $paginaActual,
            ['path' => request()->url()] // URL base para los links de paginación
        );

        return view('Egresados.HistoriasExito', compact('masReciente', 'otrosRecientes', 'paginador'));
    }
}
