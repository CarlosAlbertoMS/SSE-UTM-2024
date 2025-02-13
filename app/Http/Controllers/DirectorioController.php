<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;
use Illuminate\Pagination\LengthAwarePaginator;

class directorioController extends Controller
{
    public function index()
    {
        try {
            $url = env('API_URL') . "empresas";

            $response = Http::get($url);
            $response->throw(); // Lanza una excepción si la API no responde correctamente

            $empresas = $response->json();

            // Paginación manual
            $paginaActual = request('page', 1);
            $porPagina = 10;
            $totalEmpresas = count($empresas);

            $items = array_slice($empresas, ($paginaActual - 1) * $porPagina, $porPagina);

            $paginador = new LengthAwarePaginator(
                $items,            // Elementos de la página actual
                $totalEmpresas,    // Total de elementos
                $porPagina,        // Elementos por página
                $paginaActual,
                ['path' => request()->url()] // URL base para los links de paginación
            );

            return view('Egresados.Directorio-de-empresas', compact('empresas', 'totalEmpresas', 'paginador'));
        } catch (RequestException $e) {
            return back()->withErrors('No se pudieron obtener las empresas. Inténtalo de nuevo más tarde.');
        } catch (\Exception $e) {
            return back()->withErrors('Ocurrió un error inesperado. Por favor, inténtalo más tarde.');
        }
    }

    public function obtenerEmpresa($empresa_id)
    {
        try {
            $url = env('API_URL') . "empresas/{$empresa_id}";

            $response = Http::get($url);
            $response->throw();

            $empresa = $response->json();
            $contacto = null;

            // Si hay un contacto_id, obtener la información del contacto
            if (!empty($empresa['contacto_id'])) {
                $contactoUrl = env('API_URL') . "contactos/{$empresa['contacto_id']}";
                $contactoResponse = Http::get($contactoUrl);

                if ($contactoResponse->successful()) {
                    $contacto = $contactoResponse->json();
                }
            }

            return view('Egresados.Informacion-de-empresas', compact('empresa', 'contacto'));
        } catch (RequestException $e) {
            return back()->withErrors('No se pudo obtener la información de la empresa.');
        } catch (\Exception $e) {
            return back()->withErrors('Ocurrió un error inesperado. Por favor, inténtalo más tarde.');
        }
    }
}
