<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EgresadosController extends Controller
{
    private $baseUrl = 'http://localhost:8081'; // Cambia esto por la URL base de tu API

    /**
     * Obtener todos los egresados.
     */
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

