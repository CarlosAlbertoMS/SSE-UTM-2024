<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;

class empresaController extends Controller
{
    public function index()
    {
        try {
            $url = env('API_URL') . "empresas";

            $response = Http::get($url);
            $response->throw();
            $empresas = $response->json();

            echo ($empresas);

        } catch (RequestException $e) {
            return back()->withErrors('No se pudieron obtener los datos de las empresas. Inténtalo de nuevo más tarde.');
        } catch (\Exception $e) {
            return back()->withErrors('Ocurrió un error inesperado. Por favor, inténtalo más tarde.');
        }


        return view('Egresados.', compact('empresas'));
    }
    public function obtener_empresas()
    {
        $empresas = collect(); // Inicializamos como colección vacía en caso de error.
        $error = null;
    
        try {
            $url = env('API_URL') . "empresas";
            $response = Http::get($url);
            $response->throw();
            $data = $response->json();
    
            // Convertir los datos a colección
            $dataCollection = collect($data);
    
            // Aplicar filtro por búsqueda (por nombre de la empresa)
            $search = request()->query('search', '');
            if (!empty($search)) {
                $dataCollection = $dataCollection->filter(function ($empresa) use ($search) {
                    $nombre = trim($empresa['nombre'] ?? '');
                    return stripos($nombre, $search) !== false;
                })->values(); // Reindexamos la colección
            }
    
            // Actualizar el total de empresas filtradas
            $totalEmpresas = $dataCollection->count();
    
            // También puedes filtrar los totales de estados según la búsqueda:
            $noContestado = $dataCollection->where('estado', 'No ha contestado')->count();
            $parcialmente = $dataCollection->where('estado', 'Contestado parcialmente')->count();
            $completamente = $dataCollection->where('estado', 'Contestado completamente')->count();
    
            // Paginación manual
            $currentPage = request()->get('page', 1);
            $perPage = 5;
            $empresasPagina = $dataCollection->forPage($currentPage, $perPage);
    
            $empresas = new \Illuminate\Pagination\LengthAwarePaginator(
                $empresasPagina,    // Elementos de la página actual
                $totalEmpresas,     // Total de elementos (filtrados)
                $perPage,           // Elementos por página
                $currentPage,
                ['path' => request()->url(), 'query' => request()->query()]
            );
        } catch (RequestException $e) {
            $error = 'No se pudieron obtener los datos de las empresas. Inténtalo de nuevo más tarde.';
        } catch (\Exception $e) {
            $error = 'Ocurrió un error inesperado. Por favor, inténtalo más tarde.';
        }
    
        return view('administrador.Empresas_Admin', compact(
            'empresas',
            'error',
            'totalEmpresas',
            'noContestado',
            'parcialmente',
            'completamente'
        ));
    }
    
}
