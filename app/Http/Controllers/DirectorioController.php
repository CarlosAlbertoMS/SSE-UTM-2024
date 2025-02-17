<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\contactocontroller;

class directorioController extends Controller
{
    private $baseUrl = 'http://localhost:8081';

    public function index()
    {
        $response = Http::get("{$this->baseUrl}/empresas");

        if ($response->successful()) {
            $empresas = $response->json();

      
            
            return view('Egresados.Directorio-de-empresas', compact('empresas'));
        }

        return response()->json([
            'error' => 'No se pudo obtener las empresas'
        ]);
    }
    



    public function obtenerEmpresa($empresa_id)
    {
        $response = Http::get("{$this->baseUrl}/empresas/{$empresa_id}");
    
        if ($response->successful()) {
            $empresa = $response->json();
    
            // Verifica si hay un contacto_id en la empresa
            if (!empty($empresa['contacto_id'])) {
                $contactoController = new ContactoController();
                $contacto = $contactoController->ObtenerContacto($empresa['contacto_id']);
    
              
            }
    
            return view('Egresados.Informacion-de-empresas', compact('empresa', 'contacto'));
        }
    
        return response()->json([
            'error' => 'Empresa no encontrada',
            'detalle' => $response->json(),
        ], $response->status());
    }
    
    
}
