<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use app\Models\Carrera; 

class OfertasController extends Controller
{
    private $baseUrl = 'http://localhost:8081';

    public function index()
    {
        $response = Http::get("{$this->baseUrl}/ofertas");

        if ($response->successful()) {
            $ofertas = $response->json();

            // Reemplazar el número de la carrera con su nombre
            foreach ($ofertas as &$oferta) {
             //   $oferta['carrera'] = Carrera::obtenerNombre($oferta['carrera']);
            }

            return view('Egresados.Ofertas_laborales', compact('ofertas'));
        }

        return response()->json([
            'error' => 'No se pudo obtener las ofertas'
        ]);
    }
}
