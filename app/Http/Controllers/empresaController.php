<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class empresaController extends Controller
{

    public function index() {
        $url = env('API_URL') . "empresas";
        $response = Http::get($url);

        if ($response->successful()) {
            $empresas = $response->json();
        }

        // return response()->json($empresas);
        return view('empresas.prueba', compact('empresas'));
    }
}
