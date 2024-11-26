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


Route::get('/', function() {
    return redirect()->route('administrador'); 
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


Route::get('/empresa-egresados/propuesta', function () {
    return view('registro-empresa.propuesta-suneo');
})->name('empresa_propuesta');

?>
