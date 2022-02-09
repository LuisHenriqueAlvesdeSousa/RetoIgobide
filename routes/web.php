<?php
use App\Http\Controllers\UsuarioController;

use App\Http\Controllers\ManualController;

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;

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

Route::post('/', [HomeController::class, 'login'])->name('login');

Route::get('/export/reporte/create',function(){
    return view('reportes'); 
});

Route::get('/export/estadisticas/create',function(){
    return view('estadisticas'); 
});

//Rutas descargar excels

Route::post('/export/reporte/create', [App\Http\Controllers\ReporteController::class, 'ReporteExport']);

Route::post('/export/estadisticas/create', [App\Http\Controllers\EstadisticaController::class, 'EstadisticaExport']);

//___________________________

Route::get('/header',function(){
    return view('header'); 
});

//Control de Incidencias

Route::post('/incidenciaCreate', [IncidenciaController::class, 'store'])->name('incidenciaCreate.store');

Route::delete('incidencias/eliminar/{id}', [IncidenciaController::class, 'delete'])->name('incidencias.eliminar');

Route::get('/incidencias', [IncidenciaController::class, 'index'])->name('incidencias');

Route::get('/incidencias/{id}/create', [IncidenciaController::class, 'create'])->name('incidencias.crear');

Route::get('/incidencias/{id}/edit', [IncidenciaController::class, 'edit'])->name('incidencias.edit');

Route::put('/incidencias/{id}', [IncidenciaController::class, 'update']);

Route::get('incidencias/{id}', [IncidenciaController::class, 'show'])->name('incidencias.detalle'); 


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

Route::get('/historial',function(){
    return view('historial'); 
});
//Rutas manuales

Route::post('/subir', [App\Http\Controllers\ManualController::class, 'subirManual'])->name('subir');

//BASE DE DATOS
///MANUALES
//Route::post('/getAllManuales', [ManualController::class,'getAllManuales']);
Route::post('/getAllManuales', function(){

    $manuales = DB::table('ascensors')
    ->select('*')
    ->join('manuals', 'manuals.id', '=', 'ascensors.manual_id')
    ->get();

    return  $manuales;
});

Route::post('/getJefes', function(){
    $jefes = DB::table('jeves')
    ->select('*')
    ->join('users', 'users.id', '=', 'jeves.user_id')
    ->join('equipos', 'equipos.id', '=', 'jeves.equipo_id')
    ->get();

    return  $jefes;
});

Route::post('/getOperarios', function(){
    $operarios = DB::table('operadors')
    ->select('*')
    ->join('users', 'users.id', '=', 'operadors.user_id')
    ->get();

    return  $operarios;
});

Route::post('/getTecnicos', function(){
    $tecnicos = DB::table('tecnicos')
    ->select('*')
    ->join('users', 'users.id', '=', 'tecnicos.user_id')
    ->join('equipos', 'equipos.id', '=', 'tecnicos.equipo_id')
    ->get();

    return  $tecnicos;
});

Route::post('/getIncidencias', function(){
    $incidencias = DB::table('incidencias')
    ->select('*')
    ->join('ascensors', 'ascensors.id', '=', 'incidencias.ascensor_id')
    ->get();

    return  $incidencias;
});


//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
