<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CarroController;

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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/clientes/novo',[ClientesController::class,'cadastro_novo']);

Route::post('/clientes/novo',[ClientesController::class, 'novo'])->name('clientes_novo');

Route::get('/clientes/listar', [ClientesController::class, 'listar'])->name('clientes_listar');

Route::get('/carro/novo',[CarroController::class,'cad_novo']);

Route::post('/carro/novo',[CarroController::class, 'novo'])->name('carros_novo');

Route::get('/carro/listar', [CarroController::class, 'listar'])->name('carros_listar');