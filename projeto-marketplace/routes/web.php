<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\LoginController;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::resource('produtos', ProdutoController::class);

Route::get('/cadastro', [LojaController::class, 'create'])->name('cadastro.create');
Route::post('/cadastro', [LojaController::class, 'store'])->name('cadastro.store');


