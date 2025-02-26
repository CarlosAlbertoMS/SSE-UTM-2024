<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Carrera;
use Illuminate\Http\Client\RequestException;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\EgresadoImport;
use App\Models\Egresado;

class EgresadosController extends Controller
{

    private $baseUrl = 'http://localhost:8081'; // Cambia esto por la URL base de tu API

    /**
     * Obtener todos los egresados.
     */
    public function obtener_egresados_paginados()
    {
        $egresados = collect(); // Inicializamos como colección vacía en caso de error.
        $error = null;
    
        try {
            $url = env('API_URL') . "egresados";
            $response = Http::get($url);
            $response->throw();
            $data = $response->json();
    
            if (!is_array($data)) {
                throw new \Exception('La API no devolvió un array válido.');
            }
    
            // Convertir los datos a colección para trabajar cómodamente
            $data = collect($data);
    
            // Filtrar por búsqueda (por nombre completo)
            $search = request()->query('search', '');
            if (!empty($search)) {
                $data = $data->filter(function ($egresado) use ($search) {
                    // Si los egresados vienen como array, usa la notación de corchetes
                    // Si son objetos, usa ->; aquí asumiremos array
                    $nombreCompleto = trim(
                        ($egresado['ap_paterno'] ?? '') . ' ' .
                        ($egresado['ap_materno'] ?? '') . ' ' .
                        ($egresado['nombres'] ?? '')
                    );
                    return stripos($nombreCompleto, $search) !== false;
                })->values(); // values() para reindexar la colección
            }
    
            // Obtener totales de egresados (filtrados)
            $totalEgresados = $data->count();
            $noContestado = $data->where('estado', 'No ha contestado')->count();
            $parcialmente = $data->where('estado', 'Contestado parcialmente')->count();
            $completamente = $data->where('estado', 'Contestado completamente')->count();
    
            // Paginación manual
            $currentPage = max(1, (int) request()->get('page', 1));
            $perPage = 10; // Número de egresados por página
            // Obtener los ítems para la página actual
            $currentItems = $data->forPage($currentPage, $perPage);
    
            $egresados = new \Illuminate\Pagination\LengthAwarePaginator(
                $currentItems,
                $totalEgresados,
                $perPage,
                $currentPage,
                [
                    'path'  => request()->url(),
                    'query' => request()->query(),
                ]
            );
    
            // Si necesitas obtener carrerasGeneraciones para cada egresado de la página:
            $matriculas = $egresados->pluck('matricula');
            $carrerasGeneraciones = [];
            foreach ($matriculas as $matricula) {
                $carreraUrl = env('API_URL') . "egresado/carrera-generacion/{$matricula}";
                try {
                    $carreraResponse = Http::get($carreraUrl);
                    $carreraResponse->throw();
                    $carrerasGeneraciones[$matricula] = $carreraResponse->json();
                } catch (\Exception $e) {
                    Log::error("Error al obtener carrera y generación para matrícula {$matricula}: " . $e->getMessage());
                    $carrerasGeneraciones[$matricula] = ['carrera' => null, 'generacion' => null];
                }
            }
        } catch (RequestException $e) {
            Log::error('Error al obtener egresados: ' . $e->getMessage());
            $error = 'No se pudieron obtener los datos de los egresados. Inténtalo más tarde.';
        } catch (\Exception $e) {
            Log::error('Error inesperado: ' . $e->getMessage());
            $error = 'Ocurrió un error inesperado. Por favor, inténtalo más tarde.';
        }
    
        return view('administrador.Egresados_Admin', compact('egresados', 'error', 'totalEgresados', 'noContestado', 'parcialmente', 'completamente', 'carrerasGeneraciones'));
    }
    



    public function obtenerEgresados()
    {
        $response = Http::get("{$this->baseUrl}/egresados");

        if ($response->successful()) {
            return response()->json($response->json(), 200);
        }

        return response()->json([
            'error' => 'No se pudieron obtener los egresados',
            'details' => $response->json()
        ], $response->status());
    }

    /**
     * Obtener un egresado por su matrícula.
     */
    public function obtenerEgresado($matricula)
    {
        $response = Http::get("{$this->baseUrl}/egresados/{$matricula}");

        if ($response->successful()) {
            return response()->json($response->json(), 200);
        }

        return response()->json([
            'error' => 'No se pudo obtener el egresado',
            'details' => $response->json()
        ], $response->status());
    }

    /**
     * Crear un nuevo egresado.
     */
    public function crearEgresado(Request $request)
    {     // Ahora, preparas los datos para enviar a FastAPI
        

        $preparacion =[
           'generacion' => $request->generacion,
            'carrera' => $request->carrera,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'promedio' => $request->promedio, // Convertir a string
            'forma_titulacion' => $request->forma_titulacion, // Convertir a string
            'fecha_titulo' => $request->fecha_titulo,
            
        ];
        $responsePreparacion = Http::post("{$this->baseUrl}/preparacion", $preparacion);
        $dataPreparacion = $responsePreparacion->json();

        // Extraer el ID si existe
        $preparacion_id = $dataPreparacion['id'] ?? null;
        
        if (!$preparacion_id) {
            return response()->json([
                'error' => 'No se pudo obtener el ID de preparación desde FastAPI',
                'response' => $dataPreparacion
            ], 500);
        }
        $egresado = [
            'nombres'       => $request->input('nombres'),
            'ap_paterno'    => $request->input('ap_paterno'),
            'ap_materno'    => $request->input('ap_materno'),
            'curp'          => $request->input('curp'),
            'genero'        => $request->input('genero'),
            'fecha_nacimiento' => $request->input('fecha_nacimiento'),
            'nacionalidad'  => $request->input('nacionalidad'),
            'lugar_origen'  => $request->input('lugar_origen'),
            'matricula'     => $request->input('matricula'),
            //'generacion'    => $request->input('generacion'),
            'preparacion_id' => $preparacion_id, // Aquí agregamos el ID de la preparación
            'habilitado'    => 1, // Este valor se envía automáticamente
        ];

        if (!$responsePreparacion->successful()) {
            return response()->json([
                'error'   => 'No se pudo crear la preparación en FastAPI',
                'details' => $responsePreparacion->json()
            ], $responsePreparacion->status());
        }

       // $response = Http::post("{$this->baseUrl}/egresados", $request->all());
       $response = Http::post("{$this->baseUrl}/egresados", $egresado);


        if ($response->successful()) {
            return redirect()->route('administrador');
                }

        return response()->json([
            'error' => 'No se pudo crear el egresado',
            'details' => $response->json()
        ], $response->status());
    }

    /**
     * Actualizar un egresado por su matrícula.
     */
    public function actualizarEgresado(Request $request, $matricula)
    {
       // dd($request->all());

        // Primero, actualiza
        //  los datos del egresado
        $response = Http::put("{$this->baseUrl}/egresados/{$matricula}", $request->all());
    
        if ($response->successful()) {
            // Si el preparacion_id es parte de los datos, actualiza la preparación también
            if ($request->has('preparacion_id')) {
                $id=$request->input('preparacion_id');
                $preparacionData = $request->only([ 'carrera','generacion','fecha_inicio', 'fecha_fin', 'promedio', 'forma_titulacion']);
                $preparacionResponse = Http::put("{$this->baseUrl}/preparacion/{$id}", $preparacionData);
    
                if (!$preparacionResponse->successful()) {
                    // Si la actualización de la preparación falla, redirige con error
                    return redirect()->route('administrador') // La ruta que manejas para la lista de egresados
                        ->with('error', 'La preparación no pudo ser actualizada');
                }
            }
    
            // Si todo fue exitoso, redirige con mensaje de éxito
            return redirect()->route('administrador') // La ruta que manejas para la lista de egresados
                ->with('success', 'Egresado y preparación actualizados correctamente');
        }
    
        // Si la actualización del egresado falla, retorna un mensaje de error
        return response()->json([
            'error' => 'No se pudo actualizar el egresado',
            'details' => $response->json()
        ], $response->status());
    }
    

    /**
     * Eliminar un egresado por su matrícula.
     */
    public function eliminarEgresado($matricula)
    {
        $response = Http::delete("{$this->baseUrl}/egresados/{$matricula}");

        if ($response->successful()) {
            return response()->noContent();
        }

        return response()->json([
            'error' => 'No se pudo eliminar el egresado',
            'details' => $response->json()
        ], $response->status());
    }
    // Para depuración
    
    public function cargarEgresadosExcel(Request $request)
{
   // dd($request->all());
    $request->validate([
        'excel' => 'required|mimes:xlsx,xls'
    ]);

    try {
        $excel = $request->file('excel');
        $fileName = $excel->getClientOriginalName(); // Obtener el nombre del archivo

        $egresados = Excel::toCollection(new EgresadoImport, $excel)->first();

        if ($egresados->isEmpty()) {
            
                session()->flash('error', "El archivo '$fileName' no contiene datos.");
                session()->flash('fileName', $fileName);
                return redirect()->route('administrador');

                // Pasar el nombre del archivo a la vista
            
        }

        foreach ($egresados as $row) {
            $this->crearEgresado2($row);
        }

        session()->flash('fileName', $fileName);


        return redirect()->route('administrador')->with([
            'success' => "El archivo '$fileName' se cargó correctamente.",
            'fileName' => $fileName // Pasar el nombre del archivo a la vista
        ]);

    } catch (\Exception $e) {
        return redirect()->route('administrador')->with([
            'error' => "Error al procesar el archivo '$fileName': " . $e->getMessage(),
            'fileName' => $fileName // Pasar el nombre del archivo a la vista
        ]);
    }
}
     


    public function crearEgresado2($data)
{

    try {
        // 🔹 Preparación de datos para FastAPI
        $preparacion = [
            'generacion' => (string) $data['generacion'],  // Asegura que sea string
            'carrera' => (string) $data['carrera'],        
            'fecha_inicio' => (string) $data['fecha_inicio'],  
            'fecha_fin' => (string) $data['fecha_fin'],
            'promedio' => (string) number_format((float) $data['promedio'], 2, '.', ''), // Formatea y convierte a string
            'forma_titulacion' => (string) $data['forma_titulacion'],
            'fecha_titulo' => (string) $data['fecha_titulo'],
        ];
        // 🔹 Enviar la preparación a FastAPI
        $responsePreparacion = Http::post("{$this->baseUrl}/preparacion", $preparacion);
        $dataPreparacion = $responsePreparacion->json();
        $preparacion_id = $dataPreparacion['id'] ?? null;

        if (!$preparacion_id) {
            return response()->json([
                'error' => 'Error en preparación',
                'details' => $dataPreparacion
            ], 500);
        }

        // 🔹 Enviar el egresado a FastAPI con el `preparacion_id`
        $egresado = [
            'nombres' => $data['nombres'],
            'ap_paterno' => $data['ap_paterno'],
            'ap_materno' => $data['ap_materno'],
            'curp' => $data['curp'],
            'genero' => $data['genero'],
            'fecha_nacimiento' => $data['fecha_nacimiento'],
            'nacionalidad' => $data['nacionalidad'],
            'lugar_origen' => $data['lugar_origen'],
            'matricula' => (string) $data['matricula'],
            'preparacion_id' => $preparacion_id,
            'habilitado' => 1,
        ];

        $response = Http::post("{$this->baseUrl}/egresados", $egresado);
       // dd($response->json()); 

        if (!$response->successful()) {
            return response()->json([
                'error' => 'Error al crear el egresado',
                'details' => $response->json()
            ], $response->status());
        }

    } catch (\Exception $e) {
        return response()->json([
            'error' => 'Excepción en Laravel',
            'details' => $e->getMessage()
        ], 500);
    }
}

public function editar($matricula)
{
    // Petición a FastAPI para obtener el egresado
    $response = Http::get("{$this->baseUrl}/egresados/$matricula");

    if ($response->failed()) {
        return redirect()->back()->with('error', 'No se pudo obtener la información del egresado');
    }

    $egresado = $response->json();  // Convertir la respuesta en un array

    // Petición para obtener la lista de carreras desde FastAPI (si es necesario)
    $carreras = Carrera::obtenerCarreras();

    //$egresado['preparacion_id'] = $egresado['preparacion_id'] ?? null;

    $response2 = Http::get("{$this->baseUrl}/preparacion/{$egresado['preparacion_id']}");
    $preparacion = $response2->json();
    
    // Retornar la vista con los datos obtenidos desde FastAPI
    return view('administrador.Editar_Egresado', compact('egresado', 'carreras', 'preparacion'));
}

public function ver($matricula){
    $response = Http::get("{$this->baseUrl}/egresados/$matricula");    
    $egresado = $response->json(); 
    $carreras = Carrera::obtenerCarreras();
    $response2 = Http::get("{$this->baseUrl}/preparacion/{$egresado['preparacion_id']}");
    $preparacion = $response2->json();
    return view('administrador.Ver_Egresados', compact('egresado', 'carreras', 'preparacion'));

}






}
