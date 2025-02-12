<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;


class contactocontroller extends Controller
{
    private $baseUrl = 'http://localhost:8081';

    public function index()
    {
        $response = Http::get("{$this->baseUrl}/contactos");

        if ($response->successful()) {
            $empresas = $response->json();

      
            
            return view('Egresados.Directorio-de-empresas', compact('empresas'));
        }

        return response()->json([
            'error' => 'No se pudo obtener los contactos'
        ]);
    }
    

  
    public function ObtenerContacto($contacto_id)
    {
        $response = Http::get("{$this->baseUrl}/contactos/{$contacto_id}");
        if ($response->successful()) {
            $contacto = $response->json();
            return $contacto;
        }
    
        return response()->json([
            'error' => 'contacto no encontrada',
            'detalle' => $response->json(),
        ], $response->status());
    }
    
}
