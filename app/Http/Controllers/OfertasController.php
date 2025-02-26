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

          
         
            return view('Egresados.Ofertas_laborales', compact('ofertas'));
        } catch (RequestException $e) {
            return back()->withErrors('No se pudieron obtener las ofertas. Inténtalo de nuevo más tarde.');
        } catch (\Exception $e) {
            return back()->withErrors('Ocurrió un error inesperado. Por favor, inténtalo más tarde.');
        }
    }
   
    public function obtener_ofertas_por_id($idempresa)
    {
        try {
            $url = env('API_URL') . "ofertas";
            $response = Http::get($url);
            $response->throw();
    
            $allOfertas = $response->json();
    
            // Verifica si se obtuvieron datos de la API
            if (empty($allOfertas)) {
                dd("No se obtuvieron ofertas de la API. Verifica la conexión o la URL.");
            } else {
                // Muestra los datos obtenidos para verificar su estructura
              //  dd("Conexión exitosa. Datos obtenidos:", $allOfertas);
            }
    
            // Si ya verificaste, comenta o elimina el dd() y continúa:
            
            $ofertas = array_filter($allOfertas, function($oferta) use ($idempresa) {
                return isset($oferta['empresa_id']) && $oferta['empresa_id'] == $idempresa;
            });
    
            foreach ($ofertas as &$oferta) {
                $oferta['carrera'] = Carrera::obtenerNombre($oferta['carrera']);
            }
            unset($oferta);
    
            $paginaActual = request('page', 1);
            $porPagina = 5;
            $totalOfertas = count($ofertas);
            $items = array_slice($ofertas, ($paginaActual - 1) * $porPagina, $porPagina);
    
            $paginador = new LengthAwarePaginator(
                $items,
                $totalOfertas,
                $porPagina,
                $paginaActual,
                ['path' => request()->url()]
            );
    
            return view('Egresados.Informacion-empresas-ofertas-laborales', compact('ofertas', 'totalOfertas', 'paginador', 'idempresa'));
            
        } catch (RequestException $e) {
            dd("Error en la conexión a la API: " . $e->getMessage());
        } catch (\Exception $e) {
            dd("Error inesperado: " . $e->getMessage());
        }
    }
    
    public function obtener_ofertas_paginados()
    {
        try {
            $url = env('API_URL') . "ofertas";
            $response = Http::get($url);
            $response->throw(); // Lanza excepción si hay error
            $ofertas = $response->json();
    
            // Reemplazar el número de la carrera con su nombre
            foreach ($ofertas as &$oferta) {
                $oferta['carrera'] = Carrera::obtenerNombre($oferta['carrera']);
            }
            unset($oferta);
    
            // Convertir a colección para facilitar el filtrado y la paginación
            $data = collect($ofertas);
    
            // Aplicar filtro por búsqueda (por título del empleo)
            $search = request()->query('search', '');
            if (!empty($search)) {
                $data = $data->filter(function ($oferta) use ($search) {
                    // En este ejemplo filtramos por el campo "titulo_empleo"
                    $titulo = trim($oferta['titulo_empleo'] ?? '');
                    return stripos($titulo, $search) !== false;
                })->values(); // Reindexamos la colección
            }
    
            // Obtener el total de ofertas filtradas
            $totalOfertas = $data->count();
    
            // Paginación manual
            $paginaActual = request('page', 1);
            $porPagina = 5;
            $currentItems = $data->forPage($paginaActual, $porPagina);
    
            $paginador = new \Illuminate\Pagination\LengthAwarePaginator(
                $currentItems,
                $totalOfertas,
                $porPagina,
                $paginaActual,
                [
                    'path'  => request()->url(),
                    'query' => request()->query(), // Para mantener los parámetros en los links
                ]
            );
    
            return view('administrador.Ofertas_Admin', compact('ofertas', 'totalOfertas', 'paginador'));
        } catch (RequestException $e) {
            return back()->withErrors('No se pudieron obtener las ofertas. Inténtalo de nuevo más tarde.');
        } catch (\Exception $e) {
            return back()->withErrors('Ocurrió un error inesperado. Por favor, inténtalo más tarde.');
        }
    }
    
}
