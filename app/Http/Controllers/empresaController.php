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
            echo($empresas);
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
    
            // Obtener totales
            $totalEgresados = count($data);
            $noContestado = collect($data)->where('estado', 'No ha contestado')->count();
            $parcialmente = collect($data)->where('estado', 'Contestado parcialmente')->count();
            $completamente = collect($data)->where('estado', 'Contestado completamente')->count();
    
            // Paginación manual
            $currentPage = request()->get('page', 1);
            $perPage = 5; 
            $empresas = collect($data)->forPage($currentPage, $perPage);
    
            $empresas = new \Illuminate\Pagination\LengthAwarePaginator(
                $empresas, $totalEgresados, $perPage, $currentPage,
                ['path' => request()->url(), 'query' => request()->query()]
            );
    
        } catch (RequestException $e) {
            $error = 'No se pudieron obtener los datos de las empresas. Inténtalo de nuevo más tarde.';
        } catch (\Exception $e) {
            $error = 'Ocurrió un error inesperado. Por favor, inténtalo más tarde.';
        }
        
        return view('administrador.Empresas_Admin', compact('empresas', 'error', 'totalEgresados', 'noContestado', 'parcialmente', 'completamente'));
    }
    
}
