<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\configuracionController;
use App\Http\Controllers\RolController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Crud para usuarios
Route::get('usuario','App\Http\Controllers\UsuarioController@index');
Route::post('usuario-create','App\Http\Controllers\UsuarioController@store');
Route::put('usuario-update','App\Http\Controllers\UsuarioController@store');
Route::delete('usuario-delete','App\Http\Controllers\UsuarioController@store');

Route::get('rol','App\Http\Controllers\RolController@index');
Route::post('rol-create','App\Http\Controllers\RolController@store');
Route::get('configuracion','App\Http\Controllers\ConfiguracionController@index');
Route::post('configuracion-create','App\Http\Controllers\ConfiguracionController@store');


