<?php

namespace App\Http\Controllers;

use App\Carrera;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class TabuladorController extends Controller 
{
    public function index()
    {
        [$tabulador_size, $paginador] = self::getTabuladorContent();
        return view('Egresados.TabuladorDeSalarios-Egresados', compact('tabulador_size', 'paginador'));
    }
    
    public static function getTabuladorContent()
    {
        try {
            $url = env('API_URL') . "tabulador";

            $response = Http::get($url);
            $response->throw();
            $tabuladores = $response->json();
            foreach ($tabuladores as &$tabulador) {
                $tabulador['carrera'] = Carrera::obtenerNombre($tabulador['carrera']);
            }
            unset($tabulador);
        } catch (RequestException $e) {
            return back()->withErrors('No se pudieron obtener los datos de las tabulador. Inténtalo de nuevo más tarde.');
        } catch (\Exception $e) {
            return back()->withErrors('Ocurrió un error inesperado. Por favor, inténtalo más tarde.');
        }

        $paginaActual = request('page', 1);
        $porPagina = 10;
        $tabulador_size = count($tabuladores);
    
        $items = array_slice($tabuladores, ($paginaActual - 1) * $porPagina, $porPagina);
    
        $paginador = new LengthAwarePaginator(
            $items,            // Elementos de la página actual
            count($tabuladores), // Total de elementos
            $porPagina,        // Elementos por página
            $paginaActual,
            ['path' => request()->url()] // URL base para los links de paginación
        );

        return [$tabulador_size, $paginador];
    }
}
