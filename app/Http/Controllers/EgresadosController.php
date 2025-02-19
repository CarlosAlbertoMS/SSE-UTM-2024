<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Client\RequestException;

class EgresadosController extends Controller
{

    private $baseUrl = 'http://localhost:8081'; // Cambia esto por la URL base de tu API

    /**
     * Obtener todos los egresados.
     */
    public function obtener_egresados_paginados()
    {
        $egresados = collect(); // Inicializamos como colección vacía en caso de error.
        $error = null;

        try {
            $url = env('API_URL') . "egresados";
            $response = Http::get($url);
            $response->throw();
            $data = $response->json();

            if (!is_array($data)) {
                throw new \Exception('La API no devolvió un array válido.');
            }

            // Obtener totales
            $totalEgresados = count($data);
            $noContestado = collect($data)->where('estado', 'No ha contestado')->count();
            $parcialmente = collect($data)->where('estado', 'Contestado parcialmente')->count();
            $completamente = collect($data)->where('estado', 'Contestado completamente')->count();

            // Paginación manual
            $currentPage = max(1, (int) request()->get('page', 1));
            $perPage = 10; // Ahora estamos paginando en bloques de 5
            $paginatedData = collect($data)->chunk($perPage);
            $egresados = $paginatedData->get($currentPage - 1, collect());

            // Extraer solo las matrículas de los egresados paginados
            $matriculas = $egresados->pluck('matricula');

            // Obtener la carrera y generación de cada egresado
            $carrerasGeneraciones = [];
            foreach ($matriculas as $matricula) {
                $carreraUrl = env('API_URL') . "egresado/carrera-generacion/{$matricula}";

                try {
                    $carreraResponse = Http::get($carreraUrl);
                    $carreraResponse->throw();
                    $carrerasGeneraciones[$matricula] = $carreraResponse->json();
                } catch (\Exception $e) {
                    Log::error("Error al obtener carrera y generación para matrícula {$matricula}: " . $e->getMessage());
                    $carrerasGeneraciones[$matricula] = ['carrera' => null, 'generacion' => null];
                }
            }

            // Imprimir en la terminal
            //dump($carrerasGeneraciones);

            $egresados = new \Illuminate\Pagination\LengthAwarePaginator(
                $egresados,
                $totalEgresados,
                $perPage,
                $currentPage,
                ['path' => request()->url(), 'query' => request()->query()]
            );
        } catch (RequestException $e) {
            Log::error('Error al obtener egresados: ' . $e->getMessage());
            $error = 'No se pudieron obtener los datos de los egresados. Inténtalo más tarde.';
        } catch (\Exception $e) {
            Log::error('Error inesperado: ' . $e->getMessage());
            $error = 'Ocurrió un error inesperado. Por favor, inténtalo más tarde.';
        }

        return view('administrador.Egresados_Admin', compact('egresados', 'error', 'totalEgresados', 'noContestado', 'parcialmente', 'completamente', 'carrerasGeneraciones'));
    }




    public function obtenerEgresados()
    {
        $response = Http::get("{$this->baseUrl}/egresados");

        if ($response->successful()) {
            return response()->json($response->json(), 200);
        }

        return response()->json([
            'error' => 'No se pudieron obtener los egresados',
            'details' => $response->json()
        ], $response->status());
    }

    /**
     * Obtener un egresado por su matrícula.
     */
    public function obtenerEgresado($matricula)
    {
        $response = Http::get("{$this->baseUrl}/egresados/{$matricula}");

        if ($response->successful()) {
            return response()->json($response->json(), 200);
        }

        return response()->json([
            'error' => 'No se pudo obtener el egresado',
            'details' => $response->json()
        ], $response->status());
    }

    /**
     * Crear un nuevo egresado.
     */
    public function crearEgresado(Request $request)
    {
        $response = Http::post("{$this->baseUrl}/egresados", $request->all());

        if ($response->successful()) {
            return response()->json($response->json(), 201);
        }

        return response()->json([
            'error' => 'No se pudo crear el egresado',
            'details' => $response->json()
        ], $response->status());
    }

    /**
     * Actualizar un egresado por su matrícula.
     */
    public function actualizarEgresado(Request $request, $matricula)
    {
        $response = Http::put("{$this->baseUrl}/egresados/{$matricula}", $request->all());

        if ($response->successful()) {
            return response()->json($response->json(), 200);
        }

        return response()->json([
            'error' => 'No se pudo actualizar el egresado',
            'details' => $response->json()
        ], $response->status());
    }

    /**
     * Eliminar un egresado por su matrícula.
     */
    public function eliminarEgresado($matricula)
    {
        $response = Http::delete("{$this->baseUrl}/egresados/{$matricula}");

        if ($response->successful()) {
            return response()->noContent();
        }

        return response()->json([
            'error' => 'No se pudo eliminar el egresado',
            'details' => $response->json()
        ], $response->status());
    }
}
