<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use App\Models\EmpresaAdmin; // Importamos el modelo Empresa

class EmpresaAdminController extends Controller
{
    private $apiBaseUrl = 'http://localhost:8082'; // URL base de la API de FastAPI

    // Obtener todos los egresados
    public function obtenerEmpresas()
    {
        $response = Http::get("{$this->apiBaseUrl}/empresas");

        if ($response->successful()) {
            return response()->json($response->json());
        }

        return response()->json([
            'error' => 'No se pudieron obtener los empresas',
            'detalle' => $response->json(),
        ], $response->status());
    }

    // Obtener un egresado por matrícula
    public function obtenerEmpresa($empresa_id)
    {
        $response = Http::get("{$this->apiBaseUrl}/empresas/{$empresa_id}");

        if ($response->successful()) {
            return response()->json($response->json());
        }

        return response()->json([
            'error' => 'Empresa no encontrada',
            'detalle' => $response->json(),
        ], $response->status());
    }

    // Crear un nuevo egresado
   /* public function crearEmpresa(Request $request)
    {
        $response = Http::post("{$this->apiBaseUrl}/empresas", $request->all());

        if ($response->successful()) {
            return response()->json($response->json(), 201);
        }

        return response()->json([
            'error' => 'No se pudo crear la empresa',
            'detalle' => $response->json(),
        ], $response->status());
    }
*/
public function crearEmpresa(Request $request)
{
    // Validación de datos
    $data = $request->validate([
        'empresa.nombre' => 'required|string|max:255',
        'empresa.direccion' => 'required|string|max:255',
        'empresa.telefono' => 'nullable|string|max:15',

        'contacto.email' => 'required|email|max:255',
        'contacto.nombre_contacto' => 'required|string|max:255',
        'contacto.telefono_contacto' => 'nullable|string|max:15',
    ]);

    // Guardar los datos de la empresa
    $empresa = EmpresaAdmin::create([
        'nombre' => $data['empresa']['nombre'],
        'direccion' => $data['empresa']['direccion'],
        'telefono' => $data['empresa']['telefono'],
    ]);

    // Guardar los datos del contacto asociado a la empresa
    $empresa->contactos()->create([
        'email' => $data['contacto']['email'],
        'nombre_contacto' => $data['contacto']['nombre_contacto'],
        'telefono_contacto' => $data['contacto']['telefono_contacto'],
    ]);

    // Redirigir con mensaje de éxito
    return redirect()->route('empresas.agregar')->with('success', 'Empresa y contacto creados con éxito.');
}

    // Actualizar un egresado por matrícula
    public function actualizarEmpresa(Request $request, $empresa_id)
    {
        $response = Http::put("{$this->apiBaseUrl}/empresas/{$empresa_id}", $request->all());

        if ($response->successful()) {
            return response()->json($response->json());
        }

        return response()->json([
            'error' => 'No se pudo actualizar la empresa',
            'detalle' => $response->json(),
        ], $response->status());
    }

    // Eliminar un egresado por matrícula
    public function eliminarEmpresa($empresa_id)
    {
        $response = Http::delete("{$this->apiBaseUrl}/empresas/{$empresa_id}");

        if ($response->status() === 204) { // FastAPI devuelve 204 para eliminaciones exitosas
            return response()->json(['mensaje' => 'Empresa eliminada exitosamente'], 204);
        }

        return response()->json([
            'error' => 'No se pudo eliminar la empresa',
            'detalle' => $response->json(),
        ], $response->status());
    }

    public function guardarPasoUno(Request $request)
{
    // Validar los datos del primer paso
    $data = $request->validate([
        'nombre' => 'required|string',
        'direccion' => 'required|string',
        'telefono' => 'nullable|string',
    ]);

    // Guardar en la sesión
    session()->put('paso_1', $data);

    // Redirigir al siguiente paso o a la vista correspondiente
    return redirect()->route('formulario.paso2');
}

}