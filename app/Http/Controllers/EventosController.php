<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Carrera;
use \DateTime;

class EventosController extends Controller
{
    public function index()
    {
        $baseUrl = env('API_URL');
        $urlEventos = $baseUrl . "eventos";

        try {
            $response = Http::get($urlEventos);
            $response->throw();
            $eventos = $response->json();
        } catch (RequestException $e) {
            return back()->withErrors('No se pudieron obtener los datos de las eventos. Inténtalo de nuevo más tarde.');
        } catch (\Exception $e) {
            return back()->withErrors('Ocurrió un error inesperado. Por favor, inténtalo más tarde.');
        }

        // Se debe decidir la fecha a considerar un evento reciente.
        $umbralFecha = '-2 years';
        [$recientes, $noRecientes] = self::filterRecentEvents($eventos, $umbralFecha);

        // TODO: Aqui poner el filtro por fecha de los eventos: recientes y no_recientes cada uno debe tener un paginador.
        $paginaActual = request('page', 1);
        $porPagina = 4;
        $recientes_size = count($recientes);
    
        $items = array_slice($recientes, ($paginaActual - 1) * $porPagina, $porPagina);
    
        $paginador = new LengthAwarePaginator(
            $items,            // Elementos de la página actual
            count($recientes), // Total de elementos
            $porPagina,        // Elementos por página
            $paginaActual,
            ['path' => request()->url()] // URL base para los links de paginación
        );

        return view('Egresados.Eventos', compact('recientes_size', 'paginador'));
    }

    // TODO: invertir el filtro, en la BD aparecen eventos antiguos, el filtro debe funcionar a futuro y no a pasado.
    public function filterRecentEvents($eventos, $umbralFecha)
    {
        $hoy = new DateTime();
        $limite = (clone $hoy)->modify($umbralFecha);
        
        $recientes = array_filter($eventos, function ($evento) use ($limite) {
            $fechaEvento = new DateTime($evento['fecha']);
            return $fechaEvento >= $limite;
        });
        
        $noRecientes = array_filter($eventos, function ($evento) use ($limite) {
            $fechaEvento = new DateTime($evento['fecha']);
            return $fechaEvento < $limite;
        });

        return [$recientes, $noRecientes];
    }

    public function show($id)
    {
        $baseUrl = env('API_URL');
        $urlEventoID = $baseUrl . "eventos/{$id}";

        try {
            $response = Http::get($urlEventoID);
            $response->throw();

            $evento = $response->json();
            return $evento;
        } catch (RequestException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Evento no encontrado',
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error interno del servidor',
            ], 500);
        }
    }
}
