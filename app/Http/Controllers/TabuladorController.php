<?php

namespace App\Http\Controllers;

use App\Carrera;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\Models\Salario;

class TabuladorController extends Controller
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
            'empleo' => 'required|string|max:200',
            'experiencia' => 'required|integer|min:0',
            'carrera' => 'required|integer|min:1',
            'monto_minimo' => 'required|numeric|min:0',
            'monto_maximo' => 'required|numeric|min:0',
            'unidad_tiempo' => 'required|in:meses,años',
            'unidad_monto' => 'required|in:mensuales,anuales',
            'activo' => 'required|boolean',
        ]);

        try {
            $response = Http::post(env('API_URL') . "tabulador", [
                'empleo' => $request->empleo,
                'carrera' => (int)$request->carrera,
                'experiencia' => (int)$request->experiencia,
                'unidad_tiempo' => $request->unidad_tiempo,
                'monto_minimo' => (string)$request->monto_minimo, // Convertir a string
                'monto_maximo' => (string)$request->monto_maximo, // Convertir a string
                'unidad_monto' => $request->unidad_monto,
                'activo' => (int)$request->activo,
            ]);

            $response->throw();

            // Almacenar mensaje en la sesión
            session()->flash('success', 'Salario agregado exitosamente');

            return redirect()->route('administrador_Salarios_Admin');
        } catch (RequestException $e) {
            return back()->withErrors('Error: ' . $e->getMessage());
        }
    }
}
