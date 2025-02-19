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
            // Obtener las empresas
            $url = env('API_URL') . "empresas";
            $response = Http::get($url);
            $response->throw(); // Lanza una excepción si la API falla
            $empresas = $response->json();
    
            // Obtener los contactos
            $contactoUrl = env('API_URL') . "contactos";
            $contactoResponse = Http::get($contactoUrl);
            $contactos = $contactoResponse->successful() ? $contactoResponse->json() : [];
    
            // Reemplazar 'contacto_id' por el nombre del contacto
            foreach ($empresas as &$empresa) {
                if (isset($empresa['contacto_id'])) {
                    // Buscar el contacto que coincida con el ID
                    foreach ($contactos as $contacto) {
                        if ($contacto['id'] == $empresa['contacto_id']) {
                            // Reemplaza el valor por el nombre (o crea una nueva clave si lo prefieres)
                            $empresa['contacto_id'] = $contacto['nombre'];
                            break;
                        }
                    }
                }
            }
    
            return view('Egresados.Directorio-de-empresas', compact('empresas'));
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
