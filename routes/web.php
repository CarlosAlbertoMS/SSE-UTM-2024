<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\admin;

use App\Http\Controllers\OfertasController;
use App\Http\Controllers\DirectorioController;
use App\Http\Controllers\EgresadosController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\TabuladorController;
use App\Http\Controllers\OfertaController;


require __DIR__ . '/admin.php';
require __DIR__ . '/egresados.php';

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

Route::get('/administrador-egresados2', function () {
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


// RUTAS PARA EMPRESAS:
Route::get('/prueba', [EmpresaController::class, 'index'])->name('prueba');

Route::get('/empresa', function() {
    return view('empresas.index'); 
})->name('empresa.index');

// Prueba para modificar el header de todo este apartado xd.
// Route::get('/header-test', function() {
//     return view('layouts.empresas.header'); 
// });

Route::get('/empresas/editar', function() {
    return view('empresas.edit'); 
})->name('empresas.edit');

Route::get('/crear-oferta-editar', function() {
    // return view('empresas.crear-oferta-editar');
    return view('empresas.edit');
})->name('ofertas-editar');

Route::get('/ofertas-laborales-crear-oferta', function() {
    return view('ofertas-laborales.ofertas--laborales-crear-oferta'); 
})->name('ofertas-laborales-crear'); // oferta.create

Route::get('/ofertas-laborales', function() {
    return view('ofertas-laborales.ofertas-laborales'); 
})->name('ofertas-laborales'); // oferta.index


Route::get('/', function() {
    return redirect()->route('login'); 
});

Route::get('/empresa-egresados/cuenta', function () {
    return view('registro-empresa.Crear-Cuenta_Empresa');
})->name('empresa_cuenta');

Route::get('/empresa-egresados/datos', function () {
    return view('registro-empresa.DatosDeLaEmpresa_RegEmpresas');
})->name('empresa_datos');

Route::get('/empresa-egresados/encuesta', function () {
    return view('registro-empresa.Encuesta-satisfaccion-empresa');
})->name('empresa_encuesta');


Route::get('/empresa-egresados/ingreso', function () {
    return view('registro-empresa.Ingreso_Selecciona_Universidad');
})->name('empresa_ingreso');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/empresa-egresados/cuenta', function () {
    return view('registro-empresa.Crear-Cuenta_Empresa');
})->name('empresa_cuenta');

Route::get('/empresa-egresados/datos', function () {
    return view('registro-empresa.DatosDeLaEmpresa_RegEmpresas');
})->name('empresa_datos');

Route::get('/empresa-egresados/encuesta', function () {
    return view('registro-empresa.Encuesta-satisfaccion-empresa');
})->name('empresa_encuesta');


Route::get('/empresa-egresados/ingreso', function () {
    return view('registro-empresa.Ingreso_Selecciona_Universidad');
})->name('empresa_ingreso');


Route::get('/empresa-egresados/propuesta', function () {
    return view('registro-empresa.propuesta-suneo');
})->name('empresa_propuesta');

//Egresados
//Route::get('/Egresados/Ofertas_laborales', function () {    return view('Egresados.Ofertas_laborales');})->name('Egresados_Ofertas');
Route::get('/Egresados/Ofertas_laborales', [OfertasController::class, 'index'])->name('Egresados_Ofertas');

Route::get('/Egresados/Directorio-empresas', [directorioController::class, 'index'])->name('Egresados_Directorio');

/*Route::get('/Egresados/Directorio-empresas', function () {
    return view('Egresados.Directorio-de-empresas');
})->name('Egresados_Directorio');*/

Route::get('/Egresados/Informacion-de-empresas', function () {
    return view('Egresados.Informacion-de-empresas');
})->name('Informacion-empresas');


Route::get('/Egresados/Informacion-empresas-ofertas-laborales', function () {
    return view('Egresados.Informacion-empresas-ofertas-laborales');
})->name('Informacion-empresas-ofertas-laborales');

Route::get('/Egresados/Informacion-de-empresas/{id}', [directorioController::class, 'obtenerEmpresa'])->name('Informacion-de-empresas');

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
Route::post('/crear-egresado', [EgresadosController::class, 'crearEgresado']);
Route::put('/egresados/{matricula}', [EgresadosController::class, 'actualizarEgresado']);
Route::delete('/egresados/{matricula}', [EgresadosController::class, 'eliminarEgresado']);


Route::post('/salarios', [TabuladorController::class, 'store'])->name('salarios.store');

Route::get('/salarios', [TabuladorController::class, 'index'])->name('salarios.index');


//Route::get('/egresados', [EgresadosController::class, 'obtenerEgresados']);
//Route::get('/egresados/{matricula}', [EgresadosController::class, 'obtenerEgresado']);
//Route::post('/egresados', [EgresadosController::class, 'crearEgresado']);
//Route::put('/egresados/{matricula}', [EgresadosController::class, 'actualizarEgresado']);
//Route::delete('/egresados/{matricula}', [EgresadosController::class, 'eliminarEgresado']);
?>
