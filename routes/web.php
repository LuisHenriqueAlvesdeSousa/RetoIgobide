<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('menujefe');
});


Route::get('/menujefe',function(){
    return view('menujefe'); 
});

Route::get('usuario/', 'UsuarioController@index');
Route::get('usuario/{id}', 'UsuarioController@show');
Route::get('usuario/{id}/create', 'UsuarioController@create');
Route::get('usuario/', 'UsuarioController@store');
