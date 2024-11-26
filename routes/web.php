<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\admin;
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


// RUTAS PARA EMPRESAS:
Route::get('/crear-oferta-editar', function() {
    return view('empresas.crear-oferta-editar');
}); // ofertas.edit

Route::get('/datos-de-la-empresa-ofertas-laborales', function() {
    return view('empresas.Datos-de-la-empresa-Ofertas-Laborales');
})->name('ofertas.index'); // ofertas.index

Route::get('/datos-de-la-empresa', function() {
    return view('empresas.Datos-de-la-empresa'); 
}); // empresa.index

Route::get('/editar-datos-empresa', function() {
    return view('empresas.editar-datos-empresa'); 
}); // empresa.editar

Route::get('/ofertas-laborales-crear-oferta', function() {
    return view('empresas.ofertas--laborales-crear-oferta'); 
}); // oferta.create

Route::get('/ofertas-laborales', function() {
    return view('empresas.ofertas-laborales'); 
}); // oferta.index

Route::get('/', function() {
    return redirect()->route('administrador'); 
});

?>
