<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/sobre', [HomeController::class, 'sobre'])->name('sobre');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/cadastro', [HomeController::class, 'cadastro'])->name('cadastro');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/{id}/{nome?}/{categoria?}', [ProdutoController::class, 'show'])->name('produtos.show');

Route::get('/pedidos', [PedidosController::class, 'Pedidos'])->name('Pedidos');  
    return 'Route is working!';


Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::prefix('clientes')->group(function () {
        Route::get('/', [AdminController::class, 'clientes'])->name('admin.clientes.index');
        Route::get('/{id}', [AdminController::class, 'clienteShow'])->name('admin.clientes.show');
    });
});
