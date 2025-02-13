<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Carrera;

class OfertasController extends Controller
{
    public function index()
    {
        try {
            $url = env('API_URL') . "ofertas";

            $response = Http::get($url);
            $response->throw(); // Lanza una excepción si la API no responde correctamente

            $ofertas = $response->json();

            // Reemplazar el número de la carrera con su nombre
            foreach ($ofertas as &$oferta) {
                $oferta['carrera'] = Carrera::obtenerNombre($oferta['carrera']);
            }
            unset($oferta); // Evita problemas con referencias posteriores

            // Paginación manual
            $paginaActual = request('page', 1);
            $porPagina = 10;
            $totalOfertas = count($ofertas);

            $items = array_slice($ofertas, ($paginaActual - 1) * $porPagina, $porPagina);

            $paginador = new LengthAwarePaginator(
                $items,            // Elementos de la página actual
                $totalOfertas,     // Total de elementos
                $porPagina,        // Elementos por página
                $paginaActual,
                ['path' => request()->url()] // URL base para los links de paginación
            );

            return view('Egresados.Ofertas_laborales', compact('ofertas', 'totalOfertas', 'paginador'));
        } catch (RequestException $e) {
            return back()->withErrors('No se pudieron obtener las ofertas. Inténtalo de nuevo más tarde.');
        } catch (\Exception $e) {
            return back()->withErrors('Ocurrió un error inesperado. Por favor, inténtalo más tarde.');
        }
    }
}
