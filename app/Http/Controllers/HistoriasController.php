<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class HistoriasController extends Controller
{
    private $baseUrl = 'http://localhost:8081';
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

    public function crearHistoria(Request $request)
    {     // Ahora, preparas los datos para enviar a FastAPI
        $rutaImagen = null;
    
        if ($request->hasFile('imagen')) {
            // Guarda la imagen en storage/app/public/imagenes
            $rutaImagen = $request->file('imagen')->store('public/imagenes');
            
            // Convierte la ruta a accesible por URL
            $rutaImagen = str_replace('public/', 'storage/', $rutaImagen);
        }

        $historia =[
           'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'activo' => $request->activo,  
            'imagen_url' => $rutaImagen,
            'universidad' => $request ->universidad,      
            
        ];      
        
       
       
       // $response = Http::post("{$this->baseUrl}/egresados", $request->all());
       $response = Http::post("{$this->baseUrl}/historiaexito", $historia);


        if ($response->successful()) {
            return redirect()->route('administrador_Historias_Admin');
                }

        return response()->json([
            'error' => 'No se pudo crear la historia',
            'details' => $response->json()
        ], $response->status());
    }

    public function obtener_historias_paginados()
    {
        $empresas = collect(); // Inicializamos como colección vacía en caso de error.
        $error = null;

        try {
            $url = env('API_URL') . "historiaexito";
            $response = Http::get($url);
            $response->throw();
            $data = $response->json();

            // Obtener totales
            // Obtener totales
            $totalEventos = count($data);
            $noContestado = collect($data)->where('estado', 'No ha contestado')->count();
            $parcialmente = collect($data)->where('estado', 'Contestado parcialmente')->count();
            $completamente = collect($data)->where('estado', 'Contestado completamente')->count();

            // Paginación manual
            $currentPage = request()->get('page', 1);
            $perPage = 5;
            $historias = collect($data)->forPage($currentPage, $perPage);

            $historias = new LengthAwarePaginator(
                $historias,
                $totalEventos,
                $perPage,
                $currentPage,
                ['path' => request()->url(), 'query' => request()->query()]
            );
        } catch (RequestException $e) {
            $error = 'No se pudieron obtener los datos de las empresas. Inténtalo de nuevo más tarde.';
        } catch (\Exception $e) {
            $error = 'Ocurrió un error inesperado. Por favor, inténtalo más tarde.';
        }

        return view('administrador.Historias_Admin', compact('historias', 'error', 'totalEventos', 'noContestado', 'parcialmente', 'completamente'));
    }

}
