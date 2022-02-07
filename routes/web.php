t<?php
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/menujefe',function(){
    return view('menujefe'); 
})->name('menu');

Route::get('/login', function(){
    return view('login'); 
})->name('login');

Route::post('/login', [HomeController::class, 'login'])->name('login.validate');

Route::get('/reportes',function(){
    return view('LeerReportes'); 
});

Route::get('/detalleIncidencia',function(){
    return view('detalleIncidencia'); 
});

Route::get('/detalleReporte',function(){
    return view('detalleReporte'); 
});

Route::get('/header',function(){
    return view('header'); 
});

Route::get('/incidencias',function(){
    return view('incidencias'); 
});

Route::get('/listadoJefeEquipo',function(){
    return view('listadoJefeEquipo'); 
});

Route::get('/listadoTecnicos',function(){
    return view('listadoTecnicos'); 
});

Route::get('/listadoOperarios',function(){
    return view('listadoOperarios'); 
});

Route::get('/manuales',function(){
    return view('manuales'); 
});

Route::get('/usuarioCreate', function(){
    return view('usuarioCreate');
});

Route::get('/incidenciaCreate', function(){
    return view('incidenciaCreate');
});

//Rutas manuales

Route::post('/subir', 'ManualController@subirManual')->name('subir');

//Rutas descargar excels

Route::post('/export/reporte/create', [App\Http\Controllers\ExcelController::class, 'ReporteExport']);

Route::post('/export/estadisticas/create', [App\Http\Controllers\ExcelController::class, 'EstadisticaExport']);

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
