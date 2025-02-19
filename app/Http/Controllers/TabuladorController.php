<?php

namespace App\Http\Controllers;

use App\Carrera;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\Models\Salario;

class TabuladorController extends Model
{
    public function index()
    {
        try {
            $url = env('API_URL') . "tabulador";

            $response = Http::get($url);
            $response->throw();
            $tabulador = $response->json();
        } catch (RequestException $e) {
            return back()->withErrors('No se pudieron obtener los datos de las tabulador. Inténtalo de nuevo más tarde.');
        } catch (\Exception $e) {
            return back()->withErrors('Ocurrió un error inesperado. Por favor, inténtalo más tarde.');
        }

        $paginaActual = request('page', 1);
        $porPagina = 10;
        $tabulador_size = count($tabulador);
    
        $items = array_slice($tabulador, ($paginaActual - 1) * $porPagina, $porPagina);
    
        $paginador = new LengthAwarePaginator(
            $items,            // Elementos de la página actual
            count($tabulador), // Total de elementos
            $porPagina,        // Elementos por página
            $paginaActual,
            ['path' => request()->url()] // URL base para los links de paginación
        );

        $carreras = Carrera::obtenerCarreras();
        return view('Egresados.TabuladorDeSalarios-Egresados', compact('tabulador', 'tabulador_size', 'carreras', 'paginador'));
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'empleo' => 'required|string|max:255',
            'experiencia' => 'required|string|max:255',
            'carrera' => 'required|string|max:255',
            'monto_minimo' => 'required|numeric',
            'monto_maximo' => 'required|numeric',
        ]);

        // Guardar en la base de datos
        Salario::create([
            'empleo' => $request->empleo,
            'experiencia' => $request->experiencia,
            'carrera' => $request->carrera,
            'monto_minimo' => $request->monto_minimo,
            'monto_maximo' => $request->monto_maximo,
            'activo'        => $request->input('activo', 1),    
        ]);

        // Redirigir con mensaje de éxito
       // return redirect()->back()->with('success', 'Salario guardado correctamente');
       return redirect()->route('salarios.index')->with('success', 'Salario agregado correctamente.');

    }
}
