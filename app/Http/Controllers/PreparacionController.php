<?php

namespace App\Http\Controllers;

use App\Carrera;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\Models\Salario;

class PreparacionController extends Controller
{
    //Es solamente para redirigirlo a distintas vistas
    public function index()
    {
        [$tabulador_size, $paginador] = self::getTabuladorContent();
        return view('Egresados.TabuladorDeSalarios-Egresados', compact('tabulador_size', 'paginador'));
    }
    public function index2()
    {
        [$tabulador_size, $paginador] = self::getTabuladorContent();
        return view('administrador.Salarios_Admin', compact('tabulador_size', 'paginador'));
    }


    public static function getTabuladorContent()
    {
        try {
            $url = env('API_URL') . "tabulador";

            $response = Http::get($url);
            $response->throw();
            $tabuladores = $response->json();
            foreach ($tabuladores as &$tabulador) {
                $tabulador['carrera'] = Carrera::obtenerNombre($tabulador['carrera']);
            }
            unset($tabulador);
        } catch (RequestException $e) {
            return back()->withErrors('No se pudieron obtener los datos de las tabulador. Inténtalo de nuevo más tarde.');
        } catch (\Exception $e) {
            return back()->withErrors('Ocurrió un error inesperado. Por favor, inténtalo más tarde.');
        }

        $paginaActual = request('page', 1);
        $porPagina = 10;
        $tabulador_size = count($tabuladores);

        $items = array_slice($tabuladores, ($paginaActual - 1) * $porPagina, $porPagina);

        $paginador = new LengthAwarePaginator(
            $items,            // Elementos de la página actual
            count($tabuladores), // Total de elementos
            $porPagina,        // Elementos por página
            $paginaActual,
            ['path' => request()->url()] // URL base para los links de paginación
        );

        return [$tabulador_size, $paginador];
    }

    public function store(Request $request)
    {
        $request->validate([
            'carrera' => 'required|string|max:200',
            'generacion' => 'required|integer|min:0',
            'fecha_inicio' => 'required|string|max:200',
            'fecha_fin' => 'required|string|max:200',
            'promedio' => 'required|numeric|min:0',
            'forma_titulacion' => 'required|string|max:200',
            'fecha_titulo' => 'required|string|max:200',
            
        ]);

        try {
            $response = Http::post(env('API_URL') . "tabulador", [
                'generacion' => $request->generacion,
                'carrera' => $request->carrera,
                'fecha_inicio' => $request->fecha_inicio,
                'fecha_fin' => $request->fecha_fin,
                'promedio' => $request->monto_minimo, // Convertir a string
                'forma_titulacion' => $request->monto_maximo, // Convertir a string
                'fecha_titulo' => $request->unidad_monto,
                
            ]);

            $response->throw();

            // Almacenar mensaje en la sesión
            session()->flash('success', 'preparacion agregada exitosamente');

            return redirect()->route('administrador_Salarios_Admin');
        } catch (RequestException $e) {
            return back()->withErrors('Error: ' . $e->getMessage());
        }
    }
}
