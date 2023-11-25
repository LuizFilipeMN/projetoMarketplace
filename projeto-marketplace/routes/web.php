<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\LojaController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('produtos', ProdutoController::class);

Route::get('/cadastro', [LojaController::class, 'create'])->name('cadastro.create');
Route::post('/cadastro', [LojaController::class, 'store'])->name('cadastro.store');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');


