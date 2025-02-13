<?php

namespace App\Http\Controllers;

use App\Carrera;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    public function index()
    {
        try {
            $url = env('API_URL') . "tabulador";
            
            $response = Http::get($url);
            $response->throw();
            $tabulador = $response->json();
        } catch (RequestException $e) {
            return back()->withErrors('No se pudieron obtener los datos de las tabulador. Inténtalo de nuevo más tarde.');
        } catch (\Exception $e) {
            return back()->withErrors('Ocurrió un error inesperado. Por favor, inténtalo más tarde.');
        }

        $paginaActual = request('page', 1);
        $porPagina = 10;
        $tabulador_size = count($tabulador);

        $items = array_slice($tabulador, ($paginaActual - 1) * $porPagina, $porPagina);
        
        $paginador = new LengthAwarePaginator(
            $items,          // Elementos de la página actual
            count($tabulador), // Total de elementos
            $porPagina,      // Elementos por página
            $paginaActual,   // Página actual
            ['path' => request()->url()] // URL base para los links de paginación
        );
    
        $carreras = Carrera::obtenerCarreras();
        return view('administrador.Salarios_Admin', compact('tabulador', 'tabulador_size', 'carreras', 'paginador'));
    }
}
