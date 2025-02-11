<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;

class empresaController extends Controller
{
    public function index()
    {
        try {
            $url = env('API_URL') . "empresas";
            
            $response = Http::get($url);
            $response->throw();
            $empresas = $response->json();
            echo($empresas);
        } catch (RequestException $e) {
            return back()->withErrors('No se pudieron obtener los datos de las empresas. Inténtalo de nuevo más tarde.');
        } catch (\Exception $e) {
            return back()->withErrors('Ocurrió un error inesperado. Por favor, inténtalo más tarde.');
        }
    
        return view('Egresados.', compact('empresas'));
    }
    
}
