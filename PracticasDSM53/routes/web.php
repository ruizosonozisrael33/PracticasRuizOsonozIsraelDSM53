<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenciasController;
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
    return view('welcome');
});


Route::post('', function () {
    return ("Hola desde ua ruta");
});
Route::delete('', function () {
    return ("Hola desde ua ruta");
});
Route::put('', function () {
    return ("Hola desde ua ruta");
});
Route::patch('', function () {
    return ("Hola desde ua ruta");
});
Route::get('conget', function () {
    return ("Hola desde ua ruta get");
});

route::resource('conresource',DocenciasController::class);
