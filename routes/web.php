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
?>
