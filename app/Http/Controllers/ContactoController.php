<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class ContactoController extends Model
{
    public function index()
    {
        try {
            $url = env('API_URL') . "contactos";

            $response = Http::get($url);
            $response->throw(); // Lanza una excepción si la respuesta no es exitosa

            $contactos = $response->json();
        } catch (RequestException $e) {
            return back()->withErrors('No se pudieron obtener los contactos. Inténtalo de nuevo más tarde.');
        } catch (\Exception $e) {
            return back()->withErrors('Ocurrió un error inesperado. Por favor, inténtalo más tarde.');
        }

        // Paginación manual
        $paginaActual = request('page', 1);
        $porPagina = 10;
        $totalContactos = count($contactos);
    
        $items = array_slice($contactos, ($paginaActual - 1) * $porPagina, $porPagina);
    
        $paginador = new LengthAwarePaginator(
            $items,            // Elementos de la página actual
            $totalContactos,   // Total de elementos
            $porPagina,        // Elementos por página
            $paginaActual,
            ['path' => request()->url()] // URL base para los links de paginación
        );

        return view('Egresados.Directorio-de-empresas', compact('contactos', 'totalContactos', 'paginador'));
    }

    public function ObtenerContacto($contacto_id)
    {
        try {
            $url = env('API_URL') . "contactos/{$contacto_id}";
            $response = Http::get($url);
            $response->throw(); // Lanza una excepción si la respuesta no es exitosa

            return $response->json();
        } catch (RequestException $e) {
            return response()->json([
                'error' => 'Contacto no encontrado',
                'detalle' => $e->getMessage(),
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Ocurrió un error inesperado',
                'detalle' => $e->getMessage(),
            ], 500);
        }
    }
}
