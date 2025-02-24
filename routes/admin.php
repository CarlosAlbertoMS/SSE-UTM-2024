<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\admin;
use App\Http\Controllers\EgresadosController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\TabuladorController;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\OfertasController;
use App\Models\Carrera;

Route::get('/administrador-egresados/eventos/agregar_evento', function () {
    return view('administrador.Agregar-Evento_Admin');
})->name('administrador_agregar_evento');


Route::get('/administrador-egresados/agregar_historia', function () {
    return view('administrador.Agregar-Historia_Admin');
})->name('administrador_agregar_historia');

Route::get('/administrador-egresados/agregar_salario', function () {
    return view('administrador.Agregar-Salario_Admin');
})->name('administrador_agregar_salario');


Route::get('/administrador-egresados/admin_agregar_egresado', function () {
    $carreras = Carrera::obtenerCarreras();
    return view('administrador.Egresados_Admin-Agregar-Egresado', compact('carreras'));
})->name('administrador_agregar_egresado');

Route::get('/administrador-egresados/admin_agregar_lote', function () {
    return view('administrador.Egresados_Admin-Agregar-Lote');
})->name('administrador_agregar_lote');


Route::get('/administrador-egresados/egresados', [EgresadosController::class, 'obtener_egresados_paginados'])
    ->name('administrador');


Route::get('/administrador-egresados/empresas', [empresaController::class, 'obtener_empresas'])
    ->name('administrador_Empresas_Admin');

#Route::get('/administrador-egresados/ofertas', function () {
#    return view('administrador.Ofertas_Admin');
#})->name('administrador_Ofertas_Admin');

Route::get('/administrador-egresados/ofertas', [OfertasController::class, 'obtener_ofertas_paginados'])
    ->name('administrador_Ofertas_Admin');


Route::get('/administrador-egresados/estadisticas', function () {
    return view('administrador.Estadisticas_Admin');
})->name('administrador_Estadisticas_Admin');

Route::get('/administrador-egresados/eventos', function () {
    return view('administrador.Eventos_Admin');
})->name('administrador_Eventos_Admin');


Route::get('/administrador-egresados/salarios', [TabuladorController::class, 'index2'])->name('administrador_Salarios_Admin');
// Route::get('/administrador-egresados/salarios', [TabuladorController::class, 'index'])->name('administrador_Salarios_Admin');
// Route::get('/administrador-egresados/salarios', function () {
//     return view('administrador.Salarios_Admin');
// })->name('administrador_Salarios_Admin');

Route::get('/administrador-egresados/historias', function () {
    return view('administrador.Historias_Admin');
})->name('administrador_Historias_Admin');

Route::get('/administrador-egresados/tips', function () {
    return view('administrador.Tips_Admin');
})->name('administrador_Tips_Admin');


Route::post('/salarios', [TabuladorController::class, 'store'])->name('salarios.store');

Route::post('/egresados',[EgresadosController::class, 'crearEgresado'])->name('egresados.crearEgresado');