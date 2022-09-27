<?php

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

Route::resource('politicas',App\Http\Controllers\PoliticaController::class);
Route::resource('bitacoras',App\Http\Controllers\BitacoraController::class);
Route::resource('ayudas',App\Http\Controllers\AyudaController::class);


Route::resource('responsables',App\Http\Controllers\ResponsableController::class);
Route::resource('estados_actividades',App\Http\Controllers\EstadosActividadeController::class);
Route::resource('categorias',App\Http\Controllers\CategoriaController::class);
Route::resource('actividades',App\Http\Controllers\ActividadeController::class);


Route::get('/', function () {
    return view('auth.login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');