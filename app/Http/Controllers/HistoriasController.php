<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

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
        } catch (RequestException $e) {
            return back()->withErrors('No se pudieron obtener los datos de las eventos. Inténtalo de nuevo más tarde.');
        } catch (\Exception $e) {
            return back()->withErrors('Ocurrió un error inesperado. Por favor, inténtalo más tarde.');
        }

        $paginaActual = request('page', 1);
        $porPagina = 4;
        $historias_size = count($historias);
    
        $items = array_slice($historias, ($paginaActual - 1) * $porPagina, $porPagina);
    
        $paginador = new LengthAwarePaginator(
            $items,            // Elementos de la página actual
            count($historias), // Total de elementos
            $porPagina,        // Elementos por página
            $paginaActual,
            ['path' => request()->url()] // URL base para los links de paginación
        );

        return view('Egresados.HistoriasExito', compact('historias_size', 'paginador'));
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

}
