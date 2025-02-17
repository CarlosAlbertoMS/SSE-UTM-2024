<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FastApiController extends Controller
{
    public function getFastApiData()
    {
        $response = Http::get('https://tu-fastapi-endpoint.com/ruta');
        
        if ($response->successful()) {
            return $response->json(); // Manda los datos tal cual al frontend
        }

        return response()->json([
            'error' => 'No se pudo conectar con FastAPI'
        ], $response->status());
    }
}
