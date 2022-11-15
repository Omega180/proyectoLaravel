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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/vistaPrincipal', [App\Http\Controllers\HomeController::class, 'vistaPrincipal'])->name('vistaPrincipal');
Route::get('/vistaLista', [App\Http\Controllers\HomeController::class, 'vistaLista'])->name('vistaLista');
Route::get('/vistaCorreo', [App\Http\Controllers\HomeController::class, 'vistaCorreo'])->name('vistaCorreo');
Route::get('/vistaDetalle', [App\Http\Controllers\HomeController::class, 'vistaDetalle'])->name('vistaDetalle');

//Rutas del CRUD Real
/* storeDistribuidor */
Route::get('/distribuidores', [App\Http\Controllers\DistribuidorController::class, 'index'])->name('paginaDistribuidores');
Route::get('/crearDistribuidor', [App\Http\Controllers\DistribuidorController::class, 'crearDistribuidor'])->name('paginaCrear');
Route::post('/guardarDistribuidor', [App\Http\Controllers\DistribuidorController::class, 'storeDistribuidor'])->name
('paginaGuardar');

Route::get('/editDistribuidor/{id}', [App\Http\Controllers\DistribuidorController::class, 'editDistribuidor'])->name('paginaEdit');

Route::put('/editarDistribuidor/{id}', [App\Http\Controllers\DistribuidorController::class, 'updateDistribuidor'])->name('paginaUpdate');

Route::get('/eliminarDistribuidor/{id}', [App\Http\Controllers\DistribuidorController::class, 'destroyDistribuidor'])->name('paginaDestroy');

Route::get('/detalleDistribuidor/{id}', [App\Http\Controllers\DistribuidorController::class, 'detalleDistribuidor'])->name('paginaDetalle');