<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/sobre-nos', [UserController::class, 'sobreNos'])->name('sobre');
Route::get('/contato', [UserController::class, 'contato'])->name('contato');
Route::get('/login', [UserController::class, 'login'])->name('login');

Route::prefix('/app')->group(function () {
    Route::get('/clientes', [UserController::class, 'clientes'])->name('app.clientes');
    Route::get('/fornecedores', [UserController::class, 'fornecedores'])->name('app.fornecedores');
    Route::get('/produtos', [UserController::class, 'produtos'])->name('app.produtos');
});

Route::fallback(fn () => view('errors.404'));
