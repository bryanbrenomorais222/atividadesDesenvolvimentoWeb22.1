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

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\CarroController;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/clientes/novo', 
        [ClientesController::class, 'cadastro_novo']);
Route::post('/clientes/novo', [ClientesController::class, 'novo'])->name('clientes_novo');

Route::get('/clientes/listar', [ClientesController::class, 'listar'])->name('clientes_listar');

Route::get('/clientes/alterar/{id}', [ClientesController::class, 'alterar'])->name('clientes_alterar');

Route::post('/clientes/alterar/', [ClientesController::class, 'salvar'])->name('clientes_salvar');

Route::get('/clientes/excluir/{id}', [ClientesController::class, 'excluir'])->name('clientes_excluir');

Route::get('/fornecedores/novo', 
        [FornecedoresController::class, 'cadastro_novo']);
        
Route::post('/fornecedores/novo', [FornecedoresController::class, 'novo'])->name('fornecedores_novo');

Route::get('/fornecedores/listar', [FornecedoresController::class, 'listar'])->name('fornecedores_listar');

Route::get('/fornecedores/alterar/{id}', [FornecedoresController::class, 'alterar'])->name('fornecedores_alterar');

Route::post('/fornecedores/alterar', [FornecedoresController::class, 'salvar'])->name('fornecedores_salvar');

Route::get('/fornecedores/excluir/{id}', [FornecedoresController::class, 'excluir'])->name('fornecedores_excluir');

Route::get('/carro/novo',[CarroController::class,'cad_novo']);

Route::post('/carro/novo',[CarroController::class, 'novo'])->name('carros_novo');

Route::get('/carro/listar', [CarroController::class, 'listar'])->name('carros_listar');

Route::get('produtos/fornecedores/listar', [FornecedoresController::class, 'relacionamento'])->name('produtos_fornecedores_listar');


