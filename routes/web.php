<?php
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\OperadorController;
use App\Http\Controllers\JefeController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\IncidenciaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

Route::get('/menu', function(){
    return view('menujefe');
})->name('menu');


Route::post('/', [HomeController::class, 'login'])->name('login');

Route::get('/reportes',function(){
    return view('reportes'); 
});

Route::get('/estadisticas',function(){
    return view('estadisticas'); 
});

//Rutas descargar excels

Route::post('/reportes', [App\Http\Controllers\ReporteController::class, 'ReporteExport']);

Route::post('/estadisticas', [App\Http\Controllers\EstadisticaController::class, 'EstadisticaExport']);

//___________________________

Route::get('/header',function(){
    return view('header'); 
});

//Control de Usuarios

Route::post('/usuarioCreate', [UserController::class, 'store'])->name('usuarioCreate.store');

Route::get('/usuarioCreate', function(){
    return view('usuarioCreate');
});

Route::get('/usuarioCreate/{id}', [UserController::class, 'edit'])->name('usuarioCreate.edit');

Route::delete('/eliminar/{id}', [JefeController::class, 'delete'])->name('jefes.eliminar');

Route::delete('/eliminar/{id}', [OperadorController::class, 'delete'])->name('operadores.eliminar');

Route::delete('/eliminar/{id}', [TecnicoController::class, 'delete'])->name('tecnicos.eliminar');

Route::delete('/eliminar/{id}', [DirectorController::class, 'delete'])->name('directores.eliminar');

//Rutas manuales
Route::post('/subir', [ManualController::class, 'store'])->name('manuales.subir');

//Route::delete('/manuales/eliminar/{id}', [ManualController::class, 'delete'])->name('manuales.eliminar');
//Route::get('/manuales/eliminar/{id}', 'ManualController@destroy')->name('manuales.destroy');
Route::get('/manuales/eliminar/{id}', [ManualController::class, 'destroy'])->name('manuales.eliminar');

Route::get('manuales/', [ManualController::class, 'index']);

//Rutas comentarios
Route::post('detalleIncidencia', [ComentarioController::class, 'store']);

//Control de Incidencias

Route::post('/incidenciaCreate', [IncidenciaController::class, 'store'])->name('incidenciaCreate.store');

Route::delete('incidencias/eliminar/{id}', [IncidenciaController::class, 'delete'])->name('incidencias.eliminar');

Route::get('/incidencias', [IncidenciaController::class, 'index'])->name('incidencias');

Route::get('/incidenciaCreate', function(){
    return view('incidenciaCreate');
});

Route::get('/detalleIncidencia',function(){
    return view('detalleIncidencia'); 
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

Route::get('/historial',function(){
    return view('historial'); 
});
//Rutas manuales

//Route::post('/subir', [App\Http\Controllers\ManualController::class, 'subirManual'])->name('subir');

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
 //Buscador
Route::get('/buscarManual', function(){    
    $search = urlencode(e(input->('search')));
    $route = "manuales/$search";
    return redirect($route);
});

Route::get('/manuales/{search}', [ManualController::class, 'buscarManual']);

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
