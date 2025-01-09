<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\admin;
use App\Http\Controllers\EgresadosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/administrador-egresados', function () {
    return view('administrador.Egresados_Admin');
})->name('administrador');



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
    return view('administrador.Egresados_Admin-Agregar-Egresado');
})->name('administrador_agregar_egresado');

Route::get('/administrador-egresados/admin_agregar_lote', function () {
    return view('administrador.Egresados_Admin-Agregar-Lote');
})->name('administrador_agregar_lote');

Route::get('/administrador-egresados/empresas', function () {
    return view('administrador.Empresas_Admin');
})->name('administrador_Empresas_Admin');


Route::get('/administrador-egresados/estadisticas', function () {
    return view('administrador.Estadisticas_Admin');
})->name('administrador_Estadisticas_Admin');

Route::get('/administrador-egresados/eventos', function () {
    return view('administrador.Eventos_Admin');
})->name('administrador_Eventos_Admin');

Route::get('/administrador-egresados/ofertas', function () {
    return view('administrador.Ofertas_Admin');
})->name('administrador_Ofertas_Admin');

Route::get('/administrador-egresados/salarios', function () {
    return view('administrador.Salarios_Admin');
})->name('administrador_Salarios_Admin');

Route::get('/administrador-egresados/historias', function () {
    return view('administrador.Historias_Admin');
})->name('administrador_Historias_Admin');

Route::get('/administrador-egresados/tips', function () {
    return view('administrador.Tips_Admin');
})->name('administrador_Tips_Admin');


Route::get('/', function() {
    return redirect()->route('administrador'); 
});

//Egresados
Route::get('/Egresados/Ofertas_laborales', function () {
    return view('Egresados.Ofertas_laborales');
})->name('Egresados_Ofertas');

Route::get('/Egresados/Informacion-de-empresas', function () {
    return view('Egresados.Informacion-de-empresas');
})->name('Informacion-empresas');

Route::get('/Egresados/Informacion-empresas-ofertas-laborales', function () {
    return view('Egresados.Informacion-empresas-ofertas-laborales');
})->name('Informacion-empresas-ofertas-laborales');

Route::get('/Egresados/Eventos', function () {
    return view('Egresados.Eventos');
})->name('Eventos');

Route::get('/Egresados/Eventos-individual', function () {
    return view('Egresados.Eventos-individual');
})->name('Eventos-individual');

Route::get('/Egresados/CasosDeExito-Egresados', function () {
    return view('Egresados.CasosDeExito-Egresados');
})->name('CasosDeExito-Egresados');

Route::get('/Egresados/ingreso-ingresa-tus-datos', function () {
    return view('Egresados.ingreso-ingresa-tus-datos');
})->name('ingreso-ingresa-tus-datos');

Route::get('/Egresados/Selecciona-tu-universidad', function () {
    return view('Egresados.Selecciona-tu-universidad');
})->name('Selecciona-tu-universidad');

Route::get('/Egresados/TabuladorDeSalarios-Egresados', function () {
    return view('Egresados.TabuladorDeSalarios-Egresados');
})->name('TabuladorDeSalarios-Egresados');

Route::get('/egresados', [EgresadosController::class, 'obtenerEgresados']);
Route::get('/egresados/{matricula}', [EgresadosController::class, 'obtenerEgresado']);
Route::post('/egresados', [EgresadosController::class, 'crearEgresado']);
Route::put('/egresados/{matricula}', [EgresadosController::class, 'actualizarEgresado']);
Route::delete('/egresados/{matricula}', [EgresadosController::class, 'eliminarEgresado']);



?>
