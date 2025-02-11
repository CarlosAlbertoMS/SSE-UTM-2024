<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;


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
}
