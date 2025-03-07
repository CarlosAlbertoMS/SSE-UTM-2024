<?php
//Egresados
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\admin;

use App\Http\Controllers\OfertasController;
use App\Http\Controllers\DirectorioController;
use App\Http\Controllers\EgresadosController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\TabuladorController;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\HistoriasController;


Route::get('/Egresados/Ofertas_laborales', [OfertasController::class, 'index'])->name('Egresados_Ofertas');

Route::get('/Egresados/Directorio-empresas', [directorioController::class, 'index'])->name('Egresados_Directorio');

Route::get('/Egresados/TabuladorDeSalarios-Egresados', [TabuladorController::class, 'index'])->name('Egresados_Tabulador');
Route::get('/Egresados/TabuladorSalarios/Carrera/{id}', [TabuladorController::class, 'filtrarPorCarrera'])->name('Egresados_Tabulador_Por_Carrera');

Route::get('/Egresados/Eventos', [EventosController::class, 'index'])->name('Egresados_Eventos');
Route::get('/Egresados/Eventos/{id}', [EventosController::class, 'show'])->name('Egresados_Evento.show');

Route::get('/Egresados/Informacion-de-empresas/{id}', [directorioController::class, 'obtenerEmpresa'])->name('Informacion-de-empresas');
Route::get('/Egresados/Informacion-empresas-ofertas-laborales/{idempresa}', [OfertasController::class, 'obtener_ofertas_por_id'])->name('Informacion-empresas-ofertas-laborales');

Route::get('/Egresados/HistoriasExito', [HistoriasController::class, 'index'])->name('Egresados_Historias');

Route::get('/Egresados/ingreso-ingresa-tus-datos', function () {
    return view('Egresados.ingreso-ingresa-tus-datos');
})->name('ingreso-ingresa-tus-datos');

Route::get('/Egresados/Selecciona-tu-universidad', function () {
    return view('Egresados.Selecciona-tu-universidad');
})->name('Selecciona-tu-universidad');

//Route::get('/egresados', [EgresadosController::class, 'obtenerEgresados']);
//Route::get('/egresados/{matricula}', [EgresadosController::class, 'obtenerEgresado']);
//Route::post('/egresados', [EgresadosController::class, 'crearEgresado']);
//Route::put('/egresados/{matricula}', [EgresadosController::class, 'actualizarEgresado']);
//Route::delete('/egresados/{matricula}', [EgresadosController::class, 'eliminarEgresado']);
?>